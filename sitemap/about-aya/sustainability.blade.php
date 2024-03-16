@extends('layouts.frontend-app')

@section('title', 'Sustainability – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/site-map.css') }}" />

@section('content')
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <div class="layout-page">
            @include('layouts.header', ['page'=>'about_aya'])
            <div class="menu-overlay"></div>
            <div>
                @include('sitemap.sitemap-header', ['header_title'=>'Sustainability', 'page'=>'sustainability'])

                <div class="container y-4">
                    <div class="row">
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/our-commitment.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Our Commitment</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/sustainability/our-commitment') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                     </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/our-approach.webp') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Our Approach</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/sustainability/our-approach') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                     </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/corporate-social-responsibility.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Corporate Social Responsibility</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/sustainability/corporate-social-responsibility') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                     </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 px-3 mb-40">
                            <div class="card h-100 sitemap_card">
                                <img class="card-img-top" src="{{ url('/images/sitemap/non-financial.png') }}" alt="Card image cap" />
                                <div class="card-body">
                                    <h5 class="card-title">Avenue to Sustain</h5>
                                    <p class="card-text">
                                        <a class="theme_text_color" href="{{ url('/about-aya/sustainability/avenue-sustain') }}">Explore more <i class="menu-icon tf-icons bx bx-right-arrow-alt"></i></a>
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="space-60"></div>
@include('layouts.footer', ['page'=>'mobilebanking'])

@endsection('content')