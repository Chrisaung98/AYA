<?php

namespace App\Http\Controllers\AboutAYA;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\BlogFile;
use App\Models\SubscribeUser;
use URL;

class NewsController extends Controller
{
    public function corporateIndex($value='')
    {
        $categories = Category::where('id','!=',4)->get();
        $blog_list = Blog::where('blog_category',4)->orderBy('publish_date','desc')->where('status','0')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',4)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year','');
    }

    public function corporateYearIndex($year)
    {
        $categories = Category::where('id','!=',4)->get();
        $blog_list = Blog::where('blog_category',4)->where('publish_year',$year)->where('status','0')->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',4)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year',$year);
    }

    public function corporateDetailIndex($permalink)
    {
        $blog = Blog::where('permalink',$permalink)->first();
        $categories = Category::where('id','!=',4)->get();
        $yearList = Blog::select('publish_year')->where('blog_category',4)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.corporate-detail')->with('blog',$blog)
                                                            ->with('yearList',$yearList)
                                                            ->with('categories',$categories)
                                                            ->with('news_year','');
    }

    // CSR
    public function CSRNewsIndex($value='')
    {
        $categories = Category::where('id','!=',9)->get();
        $blog_list = Blog::where('blog_category',9)->orderBy('publish_date','desc')->where('status','0')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',9)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.csr')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year','');
    }

    public function CSRYearIndex($year)
    {
        $categories = Category::where('id','!=',9)->get();
        $blog_list = Blog::where('blog_category',9)->where('publish_year',$year)->where('status','0')->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',9)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.csr')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year',$year);
    }

    public function CSRDetailIndex($permalink)
    {
        $blog = Blog::where('permalink',$permalink)->first();
        $categories = Category::where('id','!=',9)->get();
        $yearList = Blog::select('publish_year')->where('blog_category',9)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.csr-detail')->with('blog',$blog)
                                                            ->with('yearList',$yearList)
                                                            ->with('categories',$categories)
                                                            ->with('news_year','');
    }

    // Annoucement
    public function AnnoucementIndex($value='')
    {
        $categories = Category::where('id','!=',6)->get();
        $blog_list = Blog::where('blog_category',6)->orderBy('publish_date','desc')->where('status','0')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',6)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.annoucement')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year','');
    }

    public function AnnoucementDetailIndex($permalink)
    {
        $blog = Blog::where('permalink',$permalink)->first();
        $categories = Category::where('id','!=',6)->get();
        $yearList = Blog::select('publish_year')->where('blog_category',6)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.annoucement-detail')->with('blog',$blog)
                                                            ->with('yearList',$yearList)
                                                            ->with('categories',$categories)
                                                            ->with('news_year','');
    }

    public function AnnoucementYearIndex($year)
    {
        $categories = Category::where('id','!=',6)->get();
        $blog_list = Blog::where('blog_category',6)->where('publish_year',$year)->where('status','0')->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',6)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.annoucement')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year',$year);
    }
    
    // Press Release
    public function pressReleaseIndex($value='')
    {
        $categories = Category::where('id','!=',10)->get();
        $blog_list = Blog::where('blog_category',10)->orderBy('publish_date','desc')->where('status','0')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',10)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.press-release')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year','');
    }

    public function pressReleaseDetailIndex($permalink)
    {
        $blog = Blog::where('permalink',$permalink)->first();
        $categories = Category::where('id','!=',10)->get();
        $yearList = Blog::select('publish_year')->where('blog_category',10)->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.press-release-detail')->with('blog',$blog)
                                                            ->with('yearList',$yearList)
                                                            ->with('categories',$categories)
                                                            ->with('news_year','');
    }

    public function pressReleaseYearIndex($year)
    {
        $categories = Category::where('id','!=',10)->get();
        $blog_list = Blog::where('blog_category',10)->where('publish_year',$year)->where('status','0')->orderBy('publish_date','desc')->paginate(9);
        $yearList = Blog::select('publish_year')->where('blog_category',10)->where('status','0')->groupBy('publish_year')->orderBy('publish_date','desc')->get();

        return view('about-aya.news-room.press-release')->with('blog_list',$blog_list)
                                                    ->with('yearList',$yearList)
                                                    ->with('categories',$categories)
                                                    ->with('news_year',$year);
    }

    public function reportIndex()
    {
        return view('about-aya.news-room.report');
    }

    public function reportDownload(Request $request)
    {
        $report_down_email = $request->report_down_email;
        $report_file = $request->report_file;
        $subscribe_flag = $request->subscribe_flag;

        $subscribe = new SubscribeUser;
        $subscribe->email = $report_down_email;
        $subscribe->subscribe_flag = $subscribe_flag;
        $subscribe->save();

        if ($subscribe_flag == 1) {
            $temp_file = tempnam(sys_get_temp_dir(), $report_file);
            copy(URL::to('/').'/report_files/annual_report/'.$report_file, $temp_file);
        }
        if ($subscribe_flag == 2) {
            $temp_file = tempnam(sys_get_temp_dir(), $report_file);
            copy(URL::to('/').'/report_files/annual_general_meeting_notice/'.$report_file, $temp_file);
        }
        if ($subscribe_flag == 3) {
            $temp_file = tempnam(sys_get_temp_dir(), $report_file);
            copy(URL::to('/').'/report_files/annual_general_meeting_minutes/'.$report_file, $temp_file);
        }
        if ($subscribe_flag == 5) {
            $temp_file = tempnam(sys_get_temp_dir(), $report_file);
            copy(URL::to('/').'/file/royal_banking/'.$report_file, $temp_file);
        }

        return Response::download($temp_file, $report_file);
    }
}
