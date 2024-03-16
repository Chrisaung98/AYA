<?php

namespace App\Http\Controllers\Admin\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\AboutAYA\StakeHolderManagement;
use App\Models\AboutAYA\StakeHolderManagementEngagement;
use DB;
use URL;

class StakeholderManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function pageStakeholderManagement($value='')
    {
        $stakeholder_data = StakeHolderManagement::first();
        $stake_holder_management_engagement = StakeHolderManagementEngagement::get();
        return view('admin.page.about-aya.stakeholder-management.index')->with('stakeholder_data',$stakeholder_data)
                                                                        ->with('stake_holder_management_engagement',$stake_holder_management_engagement);
    }

    public function chartSectionUpdate(Request $request)
    {
        $section_title = $request->section_title;
        $chart_image = $request->chart_image;
        $chart_image_old = $request->chart_image_old;

        if($request->chart_image_old == ''){
            if ($request->hasFile('chart_image')) {
                $chartImageFile = $request->file('chart_image');
                $file = $chartImageFile->getClientOriginalName(); 
                $upload_path= base_path() . '/banner_images/about-aya/stakeholder-management/';
                $chartImageFile->move($upload_path, $file);
                $chart_img_path = "banner_images/about-aya/stakeholder-management/" .$file;
            } else {
                $chart_img_path = '';
            }
        } else {
            $chart_img_path = $request->chart_image_old;
        }

        $stakeholder = DB::table('stake_holder_management')
                    ->update([
                        'title' => $section_title,
                        'stakeholder_chart' => $chart_img_path,
                        'updated_by' => auth()->user()->id

                    ]);
        return redirect('/admin/pagelist/about-aya/stakeholder-management');
    }

    public function engagementSectionUpdate(Request $request)
    {
        $engagement_section_title = $request->engagement_section_title;
        $engage_count = $request->engage_count;

        $stakeholder = DB::table('stake_holder_management')
                    ->update([
                        'stakeholder_engagement_title' => $engagement_section_title,
                        'updated_by' => auth()->user()->id

                    ]);

        for ($engage=1; $engage <= $engage_count ; $engage++) { 
            $engagement_id = $request->input('engagement_id_'.$engage);
            $engage_table_stakeholders = $request->input('engage_table_stakeholders_'.$engage);
            $engage_table_method_engagement = $request->input('engage_table_method_engagement_'.$engage);
            $engage_table_involvement = $request->input('engage_table_involvement_'.$engage);
            $engage_table_scope = $request->input('engage_table_scope_'.$engage);
            $engage_table_party = $request->input('engage_table_party_'.$engage);
            $engage_table_stakeholders_mm = $request->input('engage_table_stakeholders_mm_'.$engage);
            $engage_table_method_engagement_mm = $request->input('engage_table_method_engagement_mm_'.$engage);
            $engage_table_involvement_mm = $request->input('engage_table_involvement_mm_'.$engage);
            $engage_table_scope_mm = $request->input('engage_table_scope_mm_'.$engage);
            $engage_table_party_mm = $request->input('engage_table_party_mm_'.$engage);
            
            if($engagement_id != '0') {
                $banner = DB::table('stake_holder_management_engagements')
                    ->where('id',$engagement_id)
                    ->update([
                        'engage_table_stakeholders' => $engage_table_stakeholders,
                        'engage_table_method_engagement' => $engage_table_method_engagement,
                        'engage_table_involvement' => $engage_table_involvement,
                        'engage_table_scope' => $engage_table_scope,
                        'engage_table_party' => $engage_table_party,
                        'engage_table_stakeholders_mm' => $engage_table_stakeholders_mm,
                        'engage_table_method_engagement_mm' => $engage_table_method_engagement_mm,
                        'engage_table_involvement_mm' => $engage_table_involvement_mm,
                        'engage_table_scope_mm' => $engage_table_scope_mm,
                        'engage_table_party_mm' => $engage_table_party_mm,
                        'updated_by' => auth()->user()->id
                    ]);
            } else {
                $engagement_table = new StakeHolderManagementEngagement;
                $engagement_table->engage_table_stakeholders = $engage_table_stakeholders;
                $engagement_table->engage_table_method_engagement = $engage_table_method_engagement;
                $engagement_table->engage_table_involvement = $engage_table_involvement;
                $engagement_table->engage_table_scope = $engage_table_scope;
                $engagement_table->engage_table_party = $engage_table_party;
                $engagement_table->engage_table_stakeholders_mm = $engage_table_stakeholders_mm;
                $engagement_table->engage_table_method_engagement_mm = $engage_table_method_engagement_mm;
                $engagement_table->engage_table_involvement_mm = $engage_table_involvement_mm;
                $engagement_table->engage_table_scope_mm = $engage_table_scope_mm;
                $engagement_table->engage_table_party_mm = $engage_table_party_mm;
                $engagement_table->updated_by = auth()->user()->id;
                $engagement_table->created_by = auth()->user()->id;
                $engagement_table->save();
            }
        }

        return redirect('/admin/pagelist/about-aya/stakeholder-management');
    }
}
