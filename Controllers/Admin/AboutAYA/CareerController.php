<?php

namespace App\Http\Controllers\Admin\AboutAYA;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutAYA\Career\lifeAya;
use App\Models\AboutAYA\Career\AyaCulture;
use URL;
class CareerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.admin');
    }

    public function lifeAtAya() {
       
        return view ('admin.page.about-aya.career.life_at_aya');
    }

    public function ayaCulture() {
        return view ('admin.page.about-aya.career.ayaculture');
    }

    public function employeeDevelopment() {
        return view ('admin.page.about-aya.career.employee_development');
    }

    public function careerOpportunities() {
        return view ('admin.page.about-aya.career.career_opportunities');
    }

// Life-AYA
    public function lifeAyaUpdate(Request $request) {

        $life_at_aya_title = $request->life_at_aya_title;
        $life_at_aya_desc = $request->life_at_aya_desc;
        $life_at_aya_video = $request->life_at_aya_video;
        $id = $request->id;
        
        $banner = DB::table('life_ayas')
            ->where('id', $id)
            ->update([
                'life_at_aya_title' => $life_at_aya_title,
                'life_at_aya_desc' => $life_at_aya_desc,
                'life_at_aya_video' => $life_at_aya_video,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/life-at-aya');
    }

    // public function workLifeBalanceUpdate(Request $request) {

    //     $work_life_balance_title = $request->work_life_balance_life;
    //     $work_life_balance_desc = $request->work_life_balance_desc;
    //     $work_life_balance_desc1 = $request->work_life_balance_desc1;

    //     $banner = DB::table('life_ayas')
    //         ->update ([
    //             'work_life_balance_title' => $work_life_balance_title,
    //             'work_life_balance_desc' => $work_life_balance_desc,
    //             'work_life_balance_desc1' => $work_life_balance_desc1,
    //             'updated_by' => auth()->user()->id
    //         ]);
    //     return redirect('admin/pagelist/about-aya/career/life-at-aya');
    // }

    // public function healthUpdate(Request $request) {
    //     $health_wellness_title = $request->health_wellness_title;
    //     $health_wellness_desc = $request->health_wellness_desc;
    //     $health_wellness_img = $request->health_wellness_img;
    //     $healthy_body_title = $request->healthy_body_title;
    //     $healthy_body_desc = $request->healthy_body_desc;
    //     $healthy_mind_title = $request->healthy_mind_title;
    //     $healthy_mind_desc = $request->healthy_mind_desc;
    //     $healthy_workplace_title = $request->healthy_workplace_title;
    //     $healthy_workplace_desc = $request->healthy_workplace_desc;
    //     $health_wellness_desc1 = $request->health_wellness_desc1;

    //     $banner = DB::table('life_ayas')
    //         ->update ([
    //             'health_wellness_title' => $health_wellness_title,
    //             'health_wellness_desc' => $health_wellness_desc,
    //             '$health_wellness_img' => $health_wellness_img,
    //             'healthy_body_title' => $healthy_body_title,
    //             'healthy_body_desc' => $healthy_body_desc,
    //             'healthy_mind_title' => $healthy_mind_title,
    //             'healthy_mind_desc' => $healthy_mind_desc,
    //             'healthy_workplace_title' => $healthy_workplace_title,
    //             'healthy_workplace_desc' => $healthy_workplace_desc,
    //             'healthy_wellness_desc1' => $healthy_wellness_desc1,
    //             'updated_by' => auth()->user()->id
    //         ]);
    //     return redirect('admin/pagelist/about-aya/career/life-at-aya');

    // }

    // public function financialWellbeingUpdate(Request $request) {
    //     $financial_wellbeing_title = $request->financial_wellbeing_title;
    //     $financial_wellbeing_desc = $request->financial_wellbeing_desc;
    //     $financial_wellbeing_img = $rrequest->financial_wellbeing_img;
    //     $financial_wellbeing_desc1 = $request->financial_wellbeing_desc1;

    //     $banner = DB::table('life_ayas')
    //         ->update ([
    //             'financial_wellbeing_title' => $financial_wellbeing_title,
    //             'financial_wellbeing_desc' => $financial_wellbeing_desc,
    //             'financial_wellbeing_img' => $financial_wellbeing_img,
    //             'financial_wellbeing_desc1' => $financial_wellbeing_desc1,
    //             'updated_by' => auth()->user()->id
    //         ]);
    //     return redirect('admin/pagelist/about-aya/career/life-at-aya');

    // }

    // public function familySupportUpdate(Request $request) {
    //     $family_support_title = $request->family_support_title;
    //     $family_support_desc = $request->family_support_desc;
    //     $family_support_desc = $request->family_support_img;
    //     $family_support_desc1 = $request->family_support_desc1;

    //     $banner = DB::table ('life_ayas')
    //         ->update ([
    //             'reward_title' => $reward_title,
    //             'family_support_desc' => $family_support_desc,
    //             'financial_wellbeing_img' => $financial_wellbeing_img,
    //             'financial_wellbeing_desc1' => $financial_wellbeing_desc1,
    //             'updated_by' => auth()->user()->id
    //         ]);
    //     return redirect('admin/pagelist/about-aya/career/life-at-aya');

    // }

    // public function rewardsUpdate(Request $request) {
    //     $reward_title = $request->reward_title;
    //     $reward_desc = $request->reward_desc;
    //     $reward_img = $request->reward_img;
    //     $monetary_rewards_title = $request->monetary_rewards_title;
    //     $monetary_rewards_desc = $request->monetary_rewards_desc;
    //     $non_monetary_rewards_title = $request->non_monetary_rewards_title;
    //     $non_monetary_rewards_desc = $request->non_monetary_rewards_desc;

    //     $banner = DB::table('life_ayas')
    //         ->update ([
    //             'reward_title' => $reward_title,
    //             'reward_desc' => $reward_desc,
    //             'reward_img' => $reward_img,
    //             'monetary_rewards_title' => $monetary_rewards_title,
    //             'monetary_rewards_desc' => $monetary_rewards_desc,
    //             'non_monetary_rewards_title' => $non_monetary_rewards_title,
    //             'non_monetary_rewards_desc'=> $non_monetary_rewards_desc,
    //             'updated_by' => auth()->user()->id
    //         ]);
    //     return redirect('admin/pagelist/about-aya/career/life-at-aya');
    // }

    // AYA Culture

    public function ayaCultureUpdate(Request $request) {

        $culture_desc = $request->culture_desc;
       
        
        $banner = DB::table('aya_cultures')
            ->update([
                'culture_desc' => $culture_desc,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/ayaculture');
    }

    public function ourValueUpdate(Request $request) {

        $our_value_title = $request->our_value_title;
        $our_value_desc = $request->our_value_desc;
        
        $banner = DB::table('aya_cultures')
            ->update([
                'our_value_title' => $our_value_title,
                'our_value_desc' => $our_value_desc,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/ayaculture');
    }

    public function cardUpdate(Request $request) {

        $card_title_1 = $request->card_title_1;
        $card_title_1_desc = $request->card_title_1_desc;
        $card_title_1_img_old = $request->card_title_1_img_old;
        $card_title_1_img = $request->card_title_1_img;
        $card_title_2 = $request->card_title_2;
        $card_title_2_desc = $request->card_title_2_desc;
        $card_title_2_img_old = $request->card_title_2_img_old;
        $card_title_2_img = $request->card_title_2_img;
        $card_title_3 = $request->card_title_3;
        $card_title_3_desc = $request->card_title_3_desc;
        $card_title_3_img_old = $request->card_title_3_img_old;
        $card_title_3_img = $request->card_title_3_img;
        
        if ($request->card_title_1_img_old == '') {
            if ($request->hasFile('card_title_1_img')) {
                $imageBreak = $request->file('card_title_1_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/career/ayaculture/';
                $imageBreak->move($upload_path, $file);
                $card_title_1_img_path = "page_images/about-aya/career/ayaculture/" . $file;
            } else {
                $card_title_1_img_path = '';
            }
        } else {
            $card_title_1_img_path = $request->card_title_1_img_old;
        }

        if ($request->card_title_2_img_old == '') {
            if ($request->hasFile('card_title_2_img')) {
                $imageBreak = $request->file('card_title_2_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/career/ayaculture/';
                $imageBreak->move($upload_path, $file);
                $card_title_2_img_path = "page_images/about-aya/career/ayaculture/" . $file;
            } else {
                $card_title_2_img_path = '';
            }
        } else {
            $card_title_2_img_path = $request->card_title_2_img_old;
        }

        if ($request->card_title_3_img_old == '') {
            if ($request->hasFile('card_title_3_img')) {
                $imageBreak = $request->file('card_title_3_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/career/ayaculture/';
                $imageBreak->move($upload_path, $file);
                $card_title_3_img_path = "page_images/about-aya/career/ayaculture/" . $file;
            } else {
                $card_title_3_img_path = '';
            }
        } else {
            $card_title_3_img_path = $request->card_title_3_img_old;
        }

        $banner = DB::table('aya_cultures')
            ->update([
                'card_title_1' => $card_title_1,
                'card_title_1_desc' => $card_title_1_desc,
                'card_title_1_img' => $card_title_1_img,
                'card_title_2' => $card_title_2,
                'card_title_2_desc' => $card_title_2_desc,
                'card_title_2_img' => $card_title_2_img,
                'card_title_3' => $card_title_3,
                'card_title_3_desc' => $card_title_3_desc,
                'card_title_3_img' => $card_title_3_img,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/ayaculture');
    }

    public function governanceUpdate(Request $request) {

        $governance_title = $request->governance_title;
        $governance_desc = $request->governance_desc;
        $governance_img_old = $request->governance_img_old;
        $governance_img = $request->governance_img;
        
        
        if ($request->governance_img_old == '') {
            if ($request->hasFile('governance_img')) {
                $imageBreak = $request->file('governance_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/career/ayaculture/';
                $imageBreak->move($upload_path, $file);
                $governance_img_path = "page_images/about-aya/career/ayaculture/" . $file;
            } else {
                $governance_img_path = '';
            }
        } else {
            $governance_img_path = $request->governance_img_old;
        }

        $banner = DB::table('aya_cultures')
            ->update([
                'governance_title' => $governance_title,
                'governance_desc' => $governance_desc,
                'governance_img' => $governance_img,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/ayaculture');
    }

    public function equalUpdate(Request $request) {

        $equal_title = $request->equal_title;
        $equal_desc = $request->equal_desc;
        $equal_img_old = $request->equal_img_old;
        $equal_img = $request->equal_img;
        $equal_desc1 = $request->equal_desc1;
        $leadership_title = $request->leadership_title;
        $leadership_desc = $request->leadership_desc;

        if ($request->equal_img_old == '') {
            if ($request->hasFile('equal_img')) {
                $imageBreak = $request->file('equal_img');
                $file = $imageBreak->getClientOriginalName();
                $upload_path = base_path() . '/page_images/about-aya/career/ayaculture/';
                $imageBreak->move($upload_path, $file);
                $equal_img_path = "page_images/about-aya/career/ayaculture/" . $file;
            } else {
                $equal_img_path = '';
            }
        } else {
            $equal_img_path = $request->equal_img_old;
        }
        $banner = DB::table('aya_cultures')
            ->update ([
                'equal_title' => $equal_title,
                'equal_desc' => $equal_desc,
                'equal_img' => $equal_img,
                'equal_desc1' => $equal_desc1,
                'leadership_title' => $leadership_title,
                'leadership_desc' => $leadership_desc,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/ayaculture');
    }

    public function bondedUpdate(Request $request) {

        $bonded_title = $request->bonded_title;
        $bonded_desc = $request->bonded_desc;
        $bonded_desc_1 = $request->bonded_desc_1;
        $bonded_img_old = $request->bonded_img_old;
        $bonded_img = $request->bonded_img;
     
        $banner = DB::table('aya_cultures')
            ->update ([
                'bonded_title' => $bonded_title,
                'bonded_desc' => $bonded_desc,
                'bonded_img' => $bonded_img,
                'updated_by' => auth()->user()->id
            ]);
        
        return redirect('admin/pagelist/about-aya/career/ayaculture');

    }

    public function continualUpdate(Request $request) {
        
        $continual_title = $request->continual_title;
        $continual_desc = $request->continual_desc;
        $continual_img_old = $request->continual_img_old;
        $continual_img = $request->continual_img;

        $banner = DB::table('aya_cultures')
            ->update ([
                'continual_title' => $continual_title,
                'continual_desc' => $continual_desc,
                // 'continual_img' => $continual_img,
                'updated_by' => auth()->user()->id

            ]);

        return redirect('admin/pagelist/about-aya/career/ayaculture');
    }

}


