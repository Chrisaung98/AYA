<style type="text/css">
    .footer_like_title {
        color: #fff;
        font-size: 16.5px;
        font-weight: 400;
        letter-spacing: 0px;
        line-height: 16px;
        margin-bottom: 5px;
    }
    .footer_first_link_a, .footer_first_link_p, .footer_first_link {
        color: #c1c1c1 !important;
        text-decoration: none;
        font-size: 15px !important;
        font-weight: 200 !important;
        line-height: 25px;
    }
    .footer_first_link_a:hover, .footer_first_link:hover{
        color: #fff !important;
        text-decoration: none !important;
    }
    .footer_first_link {
        margin-bottom: 0px;
    }
    #first_footer_height{
        height: auto;
        border-bottom: 1px solid #525252;
    }
    .footer_section {
        padding: 0px 100px !important;
    }
    .social_icon {
        font-size: 15.5px;
        background-color: #989ba1;
        border-radius: 50%;
        text-align: center;
        padding: .5em;
        cursor: pointer;
        display: inline-block;
        line-height: 1;
        border: 1px solid #989ba1 !important;
    }
    .social_icon > span {
        color: #484848 !important;
    }
    .social_icon:hover {
        background-color: #484848;
        border: 1px solid #989ba1 !important;
    }
    .social_icon:hover > span {
        color: #989ba1 !important;
    }
    #go_to_top {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        outline: none;
        cursor: pointer;
        padding: 7px;
        border-radius: 50%;
        border: 1px solid #bf8b00;
        color: #bf8b00;
        font-size: 30px;
    }
    #go_to_top:hover {
        border: 1px solid #bf8b00;
        color: #fff;
        background-color: #bf8f00;
    }
    @media  only screen and (max-width: 576px) {
        #first_footer_height{
            height: auto;
        }
        .footer_section {
            padding: 0px 50px !important;
        }
        .desktop_post_footer {
            display: none;
        }
    }
</style>
<i class="tf-icons bx bx-chevron-up" id="go_to_top" title="Go to top" onclick="topFunction()"></i>

<div id="index_footer" style="background-color: #484848;padding: 33px 0px 0px 0px;">
    <div style="height: 16px;"></div>
    <div class="container footer_section" style="">
        <div class="row" id="first_footer_height">
            <div class="col-md-3 col-xs-12" style="padding-bottom: 20px;padding-top: -10px;">
                <h3 class="footer_like_title">Corporate Info</h3>
                <a class="footer_first_link_a" href="{{url('/about-aya/who-we-are/corporate-profile/ayabank-profile')}}"><p class="footer_first_link">AYA Bank Profile</p></a>
                <a class="footer_first_link_a" href="{{url('/about-aya/who-we-are/leadership/meet-our-leaders')}}"><p class="footer_first_link">Meet Our Leaders</p></a>
                <a class="footer_first_link_a" href="{{url('/about-aya/who-we-are/our-strategies/corporate-strategy')}}"><p class="footer_first_link">Corporate Strategy</p></a>
                <a class="footer_first_link_a" href="{{url('/about-aya/news-room/reports')}}"><p class="footer_first_link">Reports</p></a>

                <div class="space-30"></div>
                <h3 class="footer_like_title">Need Help</h3>
                <a class="footer_first_link_a" href="{{url('/grievance-handling')}}"><p class="footer_first_link">Help & Support</p></a>
                <a class="footer_first_link_a" href="{{url('/contact-us')}}"><p class="footer_first_link">Get in Touch</p></a>
            </div>
            <div class="col-md-3 col-xs-12" style="padding-bottom: 20px;padding-top: -10px;">
                <h3 class="footer_like_title">Recommend for you</h3>
                <a class="footer_first_link_a" href="{{url('/digital-services/online-payment-services/mobile-banking')}}"><p class="footer_first_link">Mobile Banking</p></a>
                <a class="footer_first_link_a" href="{{url('/digital-services/online-payment-services/internet-banking')}}"><p class="footer_first_link">Internet Banking</p></a>
                <a class="footer_first_link_a" href="{{url('/digital-services/online-payment-services/corporate-internet-banking')}}"><p class="footer_first_link">Corporate Internet Banking</p></a>
                <a class="footer_first_link_a" href="{{url('/personal-banking/royal-banking')}}"><p class="footer_first_link">Royal Banking</p></a>
                <a class="footer_first_link_a" href="{{url('/personal-banking/other-services/foreign-currency-exchange-service#foreign_currency_exchange_rate')}}"><p class="footer_first_link">Currency Exchange Rate</p></a> 
                <a class="footer_first_link_a" href="{{url('/digital-services/guideline/digital-secure/mm')}}"><p class="footer_first_link">Security Advices for Digital Services (Myanmar Version)</p></a> 
                <p>&nbsp;</p>
                <!-- <h3 class="footer_like_title">Need Help</h3>
                <a class="footer_first_link_a" href="#"><p class="footer_first_link">Help & Support</p></a>
                <a class="footer_first_link_a" href="#"><p class="footer_first_link">Get in Touch</p></a> -->
            </div>
            
            <div class="col-md-3 col-xs-12" style="padding-bottom: 20px;padding-top: -10px;padding-right: 0px;">
                <h3 class="footer_like_title">Locations</h3>
                <a class="footer_first_link_a" href="{{ url('/about-aya/network/branch-locations') }}"><p class="footer_first_link">Branch</p></a>
                <a class="footer_first_link_a" href="{{ url('/about-aya/network/atm-locations') }}"><p class="footer_first_link">ATM</p></a>
                <a class="footer_first_link_a" href="{{ url('/about-aya/network/fx-counter-locations') }}"><p class="footer_first_link">FX Counter</p></a>
            </div>
            <div class="col-md-3 col-xs-12" style="padding-bottom: 20px;padding-top: -10px;">
                <h3 class="footer_like_title">Head Office</h3>
                <div class="row" style="width: 100%;padding-bottom: calc(15px/2);">
                    <div class="col-12">
                        <p class="footer_first_link_p">No. 416, Mahabandoola Road, Kyauktada Township, Yangon, Myanmar.</p>
                    </div>
                </div>
                <h3 class="footer_like_title">24/7 Contact Center</h3>
                <div class="row" style="width: 100%;padding-bottom: calc(15px/2);">
                    <div class="col-12">
                        <p class="footer_first_link"><a class="footer_first_link_a" href="tel:9512317777">+95 1 231 7777</a></p>
                        <p class="footer_first_link"><a class="footer_first_link_a" href="mailto:info@ayabank.com">info@ayabank.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row desktop_post_footer" style="padding: 30px 0px">
            <!-- <div class="col-4 d-none d-sm-block" style="padding-left: 0px"> -->
                <!-- <p class="footer_first_link_p" style="font-size: 12px;"> -->
                <!-- Terms & Condition&nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy</p> -->
            <!-- </div> -->
            <div class="col-6 d-none d-sm-block" style="padding-top: 4px">
                <a href="https://www.facebook.com/ayabank/" target="_blank" class="social_icon" aria-label="Facebook">
                    <span class="tf-icons bx bxl-facebook"></span>
                </a>
                <a href="https://twitter.com/aya_bank" target="_blank" class="social_icon" aria-label="Twitter">
                    <span class="tf-icons bx bxl-twitter"></span>
                </a>
                <a href="https://www.linkedin.com/company/ayabank/" target="_blank" class="social_icon" aria-label="LinkedIn">
                    <span class="tf-icons bx bxl-linkedin"></span>
                </a>
            </div>
            <div class="col-6 d-none d-sm-block text-right" style="">
                <p class="footer_first_link_p" style="font-size: 12px;float: right;">Copyright at &copy; <?php echo date('Y'); ?> AYA BANK</p>
            </div>
        </div>
        <div class="row d-block d-sm-none" style="padding: 20px 0px">
            <!-- <div class="col-12 text-center">
                <p class="footer_first_link_p" style="font-size: 12px;">Terms & Condition&nbsp;&nbsp;|&nbsp;&nbsp;Privacy Policy</p>
            </div> -->
            <div class="col-12 text-center">
                <a href="https://www.facebook.com/ayabank/" class="social_icon" target="_blank" aria-label="Facebook">
                    <span class="tf-icons bx bxl-facebook"></span>
                </a>
                <a href="https://twitter.com/aya_bank" class="social_icon" target="_blank" aria-label="Twitter">
                    <span class="tf-icons bx bxl-twitter"></span>
                </a>
                <a href="https://www.linkedin.com/company/ayabank/" class="social_icon" target="_blank" aria-label="LinkedIn">
                    <span class="tf-icons bx bxl-linkedin"></span>
                </a>
            </div>
            <div class="col-12 text-center">
                <div style="height: 20px;"></div> 
                <p class="footer_first_link_p" style="font-size: 12px;">Copyright at &copy; <?php echo date('Y'); ?> AYA BANK</p>
            </div>
        </div>
    </div>
</div>

<script src="{{ url('/js/jquery.js') }}"></script>
<script type="text/javascript">
    function init() {
      var imgDefer = document.querySelectorAll('div[data-src]');
      var style = "background-image: url({url})";
      for (var i = 0; i < imgDefer.length; i++) {
    
        imgDefer[i].setAttribute('style', style.replace("{url}", imgDefer[i].getAttribute('data-src')));
    
      }
    }
    
    window.onload = init;

    $('[data-toggle="slide-collapse"]').on('click', function() {
        $navMenuCont = $($(this).data('target'));
        $navMenuCont.animate({
            'width': 'toggle'
        }, 350);
        $(".menu-overlay").fadeIn(500);
        $(".landing_carousel").css('z-index','0');
    });
    $(".menu-overlay").click(function(event) {
        $(".navbar-toggle").trigger("click");
        $(".menu-overlay").fadeOut(500);
        $(".landing_carousel").css('z-index','0');
    });
    $("#navbar_close").click(function(event) {
        $(".navbar-toggle").trigger("click");
        $(".menu-overlay").fadeOut(500);
        $(".landing_carousel").css('z-index','0');
    });
    
    $(".dropdown-menu > li").click(function(event) {
        $(".navbar-toggle").trigger("click");
        $(".menu-overlay").fadeOut(500);
        $(".landing_carousel").css('z-index','0');
    });

    mybutton = document.getElementById("go_to_top");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        var body = $("html, body");
            body.stop().animate({scrollTop:0}, 500, function() { 
        });
    }

    $("#go_to_top").mouseover(function () {
        $(this).attr('src', $(this).data("hover"));
    }).mouseout(function () {
        $(this).attr('src', $(this).data("src"));
    });

    $(".personal-banking-li").mouseenter(function(e) {
        $(".menu-link").removeClass('menu-hover-active');
        // $(".personal-menu-ac-sav-link").addClass('menu-active');
    });
    $(".business-banking-li").mouseenter(function(e) {
        $(".menu-link").removeClass('menu-hover-active');
        // $(".business-menu-ac-sav-link").addClass('menu-active');
    });
    $(".digital-services-li").mouseenter(function(e) {
        $(".menu-link").removeClass('menu-hover-active');
        // $(".digital-menu-online-pay-services-link").addClass('menu-active');
    });
    $(".about-aya-li").mouseenter(function(e) {
        $(".menu-link").removeClass('menu-hover-active');
        // $(".about-aya-menu-who-we-are-link").addClass('menu-active');
    });

    $(".menu-link").mouseenter(function(e) {
        $(this).addClass('menu-hover-active');
    });
    $(".menu-link").mouseleave(function(e) {
        $(this).removeClass('menu-hover-active');
        $(".personal-menu-ac-sav-link").addClass('menu-active');
        $(".business-menu-ac-sav-link").addClass('menu-active');
        $(".digital-menu-online-pay-services-link").addClass('menu-active');
        $(".about-aya-menu-who-we-are-link").addClass('menu-active');
    });

    $(".personal-menu-ac-sav-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".personal-menu-ac-sav-link").addClass('menu-hover-active');
        $(".personal-menu-links").addClass('d-none');
        $(".personal-acc-sav-menu").removeClass('d-none');
    });
    $(".personal-menu-borrow-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".personal-menu-borrow-link").addClass('menu-hover-active');
        $(".personal-menu-links").addClass('d-none');
        $(".personal-borrow-menu").removeClass('d-none');
    });
    $(".personal-menu-remit-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".personal-menu-remit-link").addClass('menu-hover-active');
        $(".personal-menu-links").addClass('d-none');
        $(".personal-remit-menu").removeClass('d-none');
    });
    $(".personal-menu-premium-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".personal-menu-premium-link").addClass('menu-hover-active');
        $(".personal-menu-links").addClass('d-none');
        $(".personal-premium-menu").removeClass('d-none');
    });
    $(".personal-menu-ins-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".personal-menu-ins-link").addClass('menu-hover-active');
        $(".personal-menu-links").addClass('d-none');
        $(".personal-ins-menu").removeClass('d-none');
    });
    $(".personal-menu-other-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".personal-menu-other-link").addClass('menu-hover-active');
        $(".personal-menu-links").addClass('d-none');
        $(".personal-other-menu").removeClass('d-none');
    });

    $(".business-menu-ac-sav-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".business-menu-ac-sav-link").addClass('menu-hover-active');
        $(".business-menu-links").addClass('d-none');
        $(".business-acc-sav-menu").removeClass('d-none');
    });
    $(".business-menu-remit-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".business-menu-remit-link").addClass('menu-hover-active');
        $(".business-menu-links").addClass('d-none');
        $(".business-remit-menu").removeClass('d-none');
    });
    $(".business-menu-borrow-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".business-menu-borrow-link").addClass('menu-hover-active');
        $(".business-menu-links").addClass('d-none');
        $(".business-borrow-menu").removeClass('d-none');
    });
    $(".business-menu-trade-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".business-menu-trade-link").addClass('menu-hover-active');
        $(".business-menu-links").addClass('d-none');
        $(".business-trade-menu").removeClass('d-none');
    });
    $(".business-menu-cash-management-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".business-menu-cash-management-link").addClass('menu-hover-active');
        $(".business-menu-links").addClass('d-none');
        $(".business-cash-management-menu").removeClass('d-none');
    });
    $(".business-menu-ins-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".business-menu-ins-link").addClass('menu-hover-active');
        $(".business-menu-links").addClass('d-none');
        $(".business-ins-menu").removeClass('d-none');
    });

    $(".digital-menu-online-pay-services-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".digital-menu-online-pay-services-link").addClass('menu-hover-active');
        $(".digital-menu-links").addClass('d-none');
        $(".digital-online-pay-services-menu").removeClass('d-none');
    });
    $(".digital-menu-card-services-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".digital-menu-card-services-link").addClass('menu-hover-active');
        $(".digital-menu-links").addClass('d-none');
        $(".digital-card-services-menu").removeClass('d-none');
    });
    $(".digital-menu-atm-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".digital-menu-atm-link").addClass('menu-hover-active');
        $(".digital-menu-links").addClass('d-none');
        $(".digital-atm-menu").removeClass('d-none');
    });
    $(".digital-menu-wallet-solutions-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".digital-menu-wallet-solutions-link").addClass('menu-hover-active');
        $(".digital-menu-links").addClass('d-none');
        $(".digital-wallet-solutions-menu").removeClass('d-none');
    });
    $(".digital-menu-guidlines-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".digital-menu-guidlines-link").addClass('menu-hover-active');
        $(".digital-menu-links").addClass('d-none');
        $(".digital-guidlines-menu").removeClass('d-none');
    });

    $(".about-aya-menu-who-we-are-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".about-aya-menu-who-we-are-link").addClass('menu-hover-active');
        $(".about-aya-menu-links").addClass('d-none');
        $(".about-aya-who-we-are-menu").removeClass('d-none');
    });
    $(".about-aya-menu-career-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".about-aya-menu-career-link").addClass('menu-hover-active');
        $(".about-aya-menu-links").addClass('d-none');
        $(".about-aya-career-menu").removeClass('d-none');
    });
    $(".about-aya-menu-governance-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".about-aya-menu-governance-link").addClass('menu-hover-active');
        $(".about-aya-menu-links").addClass('d-none');
        $(".about-aya-governance-menu").removeClass('d-none');
    });
    $(".about-aya-menu-sustainability-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".about-aya-menu-sustainability-link").addClass('menu-hover-active');
        $(".about-aya-menu-links").addClass('d-none');
        $(".about-aya-sustainability-menu").removeClass('d-none');
    });
    $(".about-aya-menu-newsroom-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".about-aya-menu-newsroom-link").addClass('menu-hover-active');
        $(".about-aya-menu-links").addClass('d-none');
        $(".about-aya-newsroom-menu").removeClass('d-none');
    });
    $(".about-aya-menu-network-link").hover(function(){
        $(".menu-link").removeClass('menu-hover-active');
        $(".menu-link").removeClass('menu-active');
        $(".about-aya-menu-network-link").addClass('menu-hover-active');
        $(".about-aya-menu-links").addClass('d-none');
        $(".about-aya-network-menu").removeClass('d-none');
    });

    $(".personal-banking-li > span").click(function(){
        $(".personal-dropdown-content").slideToggle();
    });
    $(".business-banking-li > span").click(function(){
        $(".business-dropdown-content").slideToggle();
    });
    $(".digital-services-li > span").click(function(){
        $(".digital-dropdown-content").slideToggle();
    });
    $(".about-aya-li > span").click(function(){
        $(".about-aya-dropdown-content").slideToggle();
    });

    function pageLoad(page_url) {
        var app_url = $("#app_url").val();
        location.href = app_url + page_url;
    }

    function menuTog(tog_ev) {
        var url = window.location.href;
        var app_url = $("#app_url").val() + '/';

        if (url == app_url) {
            $("."+tog_ev).slideToggle();
        }
    }
</script>