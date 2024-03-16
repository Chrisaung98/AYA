<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AboutAYA\CorporateMilestones;
use App\Models\AboutAYA\CorporateMilestonesDetail;
use DB;

class CorporateMilestonesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function milestones()
    {
        $milestones = CorporateMilestones::get();
        $milestone_details = CorporateMilestonesDetail::get();
        return view('admin.page.about-aya.corporate-milestones.list')->with('milestones',$milestones)
                                                                    ->with('milestone_details',$milestone_details);
    }

    public function milestonesAdd()
    {
        return view('admin.page.about-aya.corporate-milestones.add');
    }

    public function milestonesStore(Request $request)
    {
        $milestone_year = $request->milestone_year;
        // echo $milestone_year;exit();

        if ($request->hasFile('milestones_img')) {
            $milestones_img = $request->file('milestones_img');
            $file = $milestones_img->getClientOriginalName();
            $upload_path = public_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-milestones/';
            $milestones_img->move($upload_path, $file);
            $milestones_img_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-milestones/" . $file;
        }

        $milestones = new CorporateMilestones;
        $milestones->year = $milestone_year;
        $milestones->milestones_img = $milestones_img_path;
        $milestones->created_by = auth()->user()->id;
        $milestones->updated_by = auth()->user()->id;        
        $milestones->save();

        return redirect('/admin/corporate-milestones');
    }

    public function milestonesEdit($milestones_id)
    {
        $milestones = CorporateMilestones::where('id',$milestones_id)->first();
        return view('admin.page.about-aya.corporate-milestones.edit')->with('milestones',$milestones);
    }

    public function milestonesUpdate(Request $request)
    {
        $milestone_year = $request->milestone_year;
        $milestones_id = $request->milestones_id;

        if($request->milestones_img_old == '') {
            if ($request->hasFile('milestones_img')) {
                $milestones_img = $request->file('milestones_img');
                $file = $milestones_img->getClientOriginalName();
                $upload_path = public_path() . '/page_images/about-aya/who-we-are/corporate-profile/corporate-milestones/';
                $milestones_img->move($upload_path, $file);
                $milestones_img_path = "page_images/about-aya/who-we-are/corporate-profile/corporate-milestones/" . $file;
            }
        } else {
            $milestones_img_path = $request->milestones_img_old;
        }

        $milestones = DB::table('corporate_milestones')
                        ->where('id', $milestones_id)
                        ->update([
                            'year' => $milestone_year,
                            'milestones_img' => $milestones_img_path,
                            'updated_by' => auth()->user()->id
                        ]);

        return redirect('/admin/corporate-milestones');
    }

    public function milestonesDelete(Request $request)
    {
        $milestone_id = $request->milestone_id;

        DB::table('corporate_milestones')->where('id', $milestone_id)->delete();

        return redirect('/admin/corporate-milestones');
    }

    public function milestonesDetail($milestones_id)
    {
        $milestonesDetail = CorporateMilestonesDetail::where('milestones_id',$milestones_id)->get();

        return view('admin.page.about-aya.corporate-milestones.detail')->with('milestonesDetail',$milestonesDetail)
                                                                        ->with('milestones_id',$milestones_id);
    }

    public function milestoneDetailAdd($milestones_id)
    {
        return view('admin.page.about-aya.corporate-milestones.detail_add')->with('milestones_id',$milestones_id);
    }
}
