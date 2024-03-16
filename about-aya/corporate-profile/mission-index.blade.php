@extends('layouts.frontend-app')

@section('title', 'Mission, Corporate Values, Brand Promise – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/mission_promise.css') }}">

@section('content')
@php
    $page_data = App\Models\AboutAYA\MissionCopBrandPromise::first();
    $excellence_info = App\Models\AboutAYA\MissionCopBrandProiseAspectExcellence::get();
    $sincerities_info = App\Models\AboutAYA\MissionCopBrandPromiseAspectSincerity::get();
@endphp
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>

            @include('layouts.banner', ['page'=>'mission_promise'])

            <div class="container">
                <div class="space-40"></div>
                <div class="row">
                    <h4 class="fw-bold">
                        {!!$page_data->page_title_1!!}
                    </h4>
                    <p>{!!$page_data->page_desc_1!!}</p>
                </div>
                <div class="space-20"></div>
                <div class="row">
                    <h4 class="fw-bold">
                        {!!$page_data->page_title_2!!}&nbsp;
                    </h4>
                    <p>{!!$page_data->page_desc_2!!}</p>
                </div>
                <div class="space-20"></div>
            </div>

            <div class="ethics_section">
                <div class="container">
                    <div class="row ethics_box_row">
                        <div class="col-2 text-center ethics_box">
                            <div class="text-center">
                                {!!$page_data->aspect_1!!}
                            </div>
                        </div>
                        <div class="col-2 text-center ethics_box">
                            <div class="text-center">
                                {!!$page_data->aspect_2!!}
                            </div>
                        </div>
                        <div class="col-2 text-center ethics_box">
                            <div class="text-center">
                                {!!$page_data->aspect_3!!}
                            </div>
                        </div>
                        <div class="col-2 text-center ethics_box">
                            <div class="text-center">                           
                                {!!$page_data->aspect_4!!}
                            </div>
                        </div>
                        <div class="col-2 text-center ethics_box">
                            <div class="text-center">
                                {!!$page_data->aspect_5!!}
                            </div>
                        </div>
                        <div class="col-2 text-center ethics_box">
                            <div class="text-center">                           
                                {!!$page_data->aspect_6!!}
                            </div>
                        </div>

                        <div class="col-12 space-60"></div>

                        <div class="col-12 ethics_des_col">
                            <p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_1_title!!}</p>
                            <p>{!!$page_data->aspect_1_desc!!}</p>
                        </div>

                        <div class="col-12 space-30"></div>

                        <div class="col-12 ethics_des_col">
                            <p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_2_title!!}</p>
                            <p>{!!$page_data->aspect_2_desc!!}</p>
                        </div>

                        <div class="col-12 space-30"></div>

                        <div class="col-12 ethics_des_col">
                            <p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_3_title!!}</p>
                            <p>{!!$page_data->aspect_3_desc!!}</p>
                        </div>

                        <div class="col-12 space-30"></div>

                        <div class="col-12 ethics_des_col">
                            <p class="theme_text_color fw-bold" style="font-size: 16px;">{{$page_data->aspect_4_title}}</p>
                            <p>{!!$page_data->aspect_4_desc!!}</p>
                        </div>

                        <div class="col-12 space-30"></div>

                        <div class="col-12 ethics_des_col">
                            <p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_5_title!!}</p>
                            <p>{!!$page_data->aspect_5_desc!!}</p>
                            <p>{!!$page_data->aspect_5_desc_text!!}</p>
                        </div>

                        <div class="col-12 space-30"></div>

                        <div class="col-12 ethics_des_col">
                            <p class="theme_text_color fw-bold" style="font-size: 16px;">{!!$page_data->aspect_6_title!!}</p>
                            <p>{!!$page_data->aspect_6_desc!!}</p>
                            <div class="row">
                                @foreach ($sincerities_info as $item_sin)
                                    @if($item_sin->sincerities_desc != '')
                                        <div class="row">
                                            <div class="col-1 sincerity_check_icon_col text-right" style="width: 8%;">
                                                <img src="{{ url('/images/about-aya/corporate-profile/mission-promise/checked.webp') }}" class="img-fluid sincerity_check">
                                            </div>
                                            <div class="col-11 sincerity_check_text_col">
                                                <span class="sincerity_check_text" id="sincerities_point">
                                                    {!! htmlspecialchars_decode($item_sin->sincerities_desc) !!}
                                                </span>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <div class="space-30"></div>
                            <div class="row">
                                <div class="col-md-4 cat_card">
                                    <div class="card h-100">
                                        @php $section_1_img_link =  URL::to('/').'/'.$page_data->aspect_cta_1_img; @endphp
                                        <img src="{{ $section_1_img_link }}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">

                                        
                                        <div class="card-body">
                                            <h5 class="card-title mb-10">{!!$page_data->aspect_cta_1_title!!}</h5>
                                            <a href="{{ url($page_data->aspect_cta_1_link) }}" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 cat_card">
                                    <div class="card h-100">
                                        @php $section_2_img_link =  URL::to('/').'/'.$page_data->aspect_cta_2_img; @endphp
                                        <img src="{{$section_2_img_link}}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title mb-10">{!!$page_data->aspect_cta_2_title!!}</h5>
                                            <a href="{{url ($page_data->aspect_cta_2_link) }}" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 cat_card">
                                    <div class="card h-100">
                                        @php $section_3_img_link =  URL::to('/').'/'.$page_data->aspect_cta_3_img; @endphp
                                        <img src="{{$section_3_img_link}}" alt="Social Sustainability, the best way to create our Future!" class="card-img-top">
                                        <div class="card-body">
                                            <h5 class="card-title mb-10">{!!$page_data->aspect_cta_3_title!!}</h5>
                                            <a href="{{url ($page_data->aspect_cta_3_link) }}" class="view_bio_link theme_text_color">Learn More <i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-60"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="space-40"></div>
            
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <h4 class="fw-bold">{!!$page_data->brand_title!!}</h4>
                        <div class="space-20"></div>
                    </div>
                    <div class="brand_promise" style="background-image:url('../../../{{$page_data->brand_img}}')">
                        <div class="col-md-4 brand_promise_desc">
                            <p>{!!$page_data->brand_desc_1!!}</p>
                        </div>
                        <div class="col-md-8"></div>
                    </div>
                    <div class="space-20"></div>
                    <div class="row">
                        <p>{!!$page_data->brand_desc_2!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>''])


@endsection('content')