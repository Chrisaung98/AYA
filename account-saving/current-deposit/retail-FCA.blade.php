@extends('layouts.frontend-app')

@section('title', 'Retail FCA Current (FCY) – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/personal_banking/borrowing/hire_purchase/auto_loan.css') }}" />
<style type="text/css">
	h4 {
		color: #2e2e2e !important;
	}
</style>
@section('content')
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'personal_banking'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'retail_fca_curr_acc'])

			<div class="space-40"></div>
			<div class="container section_1">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p>Designed for individuals who receives their salary in foreign currencies while minimising foreign exchange risks and maximising payment efficiency in foreign currencies.</p>
							<div class="space-20"></div>
							<h4>Benefits</h4>
							<div class="row">
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/retail_fca_curr_acc/benefit_icon.png') }}" class="img-fluid" style="width: 17%;">
									<p>Available to open account in US Dollar, Euro, Singapore Dollar, Chinese Yuan or Thai Baht.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 20px;">
									<img src="{{ url('/images/acc_saving/retail_fca_curr_acc/benefit_icon_2.png') }}" class="img-fluid" style="width: 17%;">
									<p>Initial deposit as low as US Dollar, Euro, Singapore Dollar , Chinese Yuan or Thai Baht 100 or equivalent.</p>
								</div>
								<div class="col-md-6" style="margin-bottom: 0px;">
									<img src="{{ url('/images/acc_saving/retail_fca_curr_acc/benefit_icon_3.png') }}" class="img-fluid" style="width: 17%;">
								</div>
								<div class="col-md-7" style="margin-bottom: 20px;">
									<p>Competitive currency exchange rate for payroll received. Facilitated by local payments and international SWIFT payments.</p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-12">
									<h4 style="font-weight: 600;">Related</h4>
								</div>
								<div class="space-20"></div>
								<div class="col-md-12">
									<a class="acc_saving_link" href="{{ url('/personal-banking/account-saving/current-deposit/regular-current-account') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/regular_current_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p class="link_title">Regular Current Account</p>
												<p style="color: #2e2e2e;">Are you looking for an everyday account?</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a class="acc_saving_link" href="{{ url('/personal-banking/account-saving/current-deposit/new-business-current-account') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/new_business_current_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p class="link_title">New Business Current Account</p>
												<p style="color: #2e2e2e;">Make your cash management more accessible</p>
											</div>
										</div>
									</a>
								</div>
								<div class="space-40"></div>
								<div class="col-md-12">
									<a class="acc_saving_link" href="{{ url('/personal-banking/account-saving/current-deposit/seafarer-acount') }}">
										<div class="row" style="cursor: pointer;">
											<div class="col-4 ">
												<img src="{{ url('/images/acc_saving/seaferer_account.png') }}" class="img-fluid">
											</div>
											<div class="col-8 ">
												<p class="link_title">Seafarer Account (FCY)</p>
												<p style="color: #2e2e2e;margin-bottom: 0;">Unique banking solution for seafarers to manage payroll and finance</p>
											</div>
										</div>
									</a>
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
@include('layouts.footer')
<script type="text/javascript">
	$(".nav-link").click(function() {
		$(".nav-link").addClass('active');
		$(".nav-link").not(this).removeClass('active');
	});
</script>


@endsection('content')