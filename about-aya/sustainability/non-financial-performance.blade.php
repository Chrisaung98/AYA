@extends('layouts.frontend-app')

@section('title', 'Non-financial Performance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/non-financial-performance.css') }}">
<style type="text/css">
	#chartdiv, #chartdiv-1, #chartdiv2, #chartdiv3, #chartdiv3-1, #chartdiv4, #chartdiv4-1, #chartdiv5, #chartdiv5-1, #chartdiv6, #chartdiv6-1 {
		width: 100%;
		height: 500px;
	}
</style>

@section('content')

<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'non_financial_performance'])
			
			<div class="our_key_enabler_section" style="background-color: #fafcfc;">
				<div class="container">
					<h4>&nbsp;</h4>
					<div class="row">
						<div class="col-md-1"></div>
						<div class="col-md-10">
							<div class="row">
								<div class="col-md-4 text-center">
									<a href="#dashboard" style="text-decoration: none;">
										<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/healthy_life_style.webp') }}" class="img-fluid key_enablers_icon">
									</a>
									<a href="#dashboard" style="text-decoration: none !important;">
										<p class="csr_key_lable">Dashboard</p>
									</a>
								</div>
								<div class="col-md-4 text-center">
									<a href="#non-financial-kpi" style="text-decoration: none;">
										<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/gender_equality.webp') }}" class="img-fluid key_enablers_icon">
									</a>
									<a href="#non-financial-kpi" style="text-decoration: none !important;">
										<p class="csr_key_lable">Non-financial KPI</p>
									</a>
								</div>
								<div class="col-md-4 text-center">
									<a href="#tax-contribution" style="text-decoration: none;">
										<img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/corporate_digital_responsibility.webp') }}" class="img-fluid key_enablers_icon">
									</a>
									<a href="#tax-contribution" style="text-decoration: none !important;">
										<p class="csr_key_lable">Tax Contribution</p>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-1"></div>
					</div>
				</div>
				<div class="space-30" id="dashboard"></div>
			</div>

			<div class="" style="background-color: #fafcfc;">
				<div class="container" >
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold mb-0">Dashboard</h4>
							<hr class="dashboard_bottom_hr">
							<div class="space-10"></div>
							<p>Have a quick look on non-financial performance of AYA Bank from different perspectives - roles, diversity, learning & growth.</p>
						</div>
						<div class="space-20"></div>
						<div class="col-md-12">
							<h5 class="fw-bold mb-10">Gender Balance</h5>
						</div>
					</div>

					<div class="row">
						<div class="col-md-8 d-none d-sm-block">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="padding-left: 40px;">Proportionate Retention by Position</p>
								<div id="chartdiv"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
						<div class="col-md-8 d-block d-sm-none">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="padding-left: 40px;">Proportionate Retention by Position</p>
								<div id="chartdiv-1"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="padding-left: 40px;">Board Composition</p>
								<div id="chartdiv2"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-12">
							<h5 class="fw-bold mb-10">Age Balance</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 d-none d-sm-block">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 100px;margin: 0 0 0 0;">
								<p class="fw-semibold" style="padding-left: 40px;">&nbsp;</p>
								<div id="chartdiv3"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
						<div class="col-md-12 d-block d-sm-none">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 30px;margin: 0 0 0 0;">
								<p class="fw-semibold" style="padding-left: 40px;">&nbsp;</p>
								<div id="chartdiv3-1"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-12">
							<h5 class="fw-bold mb-10">Learning for All</h5>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 d-none d-sm-block">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 30px 30px 20px 0px;margin: 0 0 0 0;">
								<p class="fw-semibold" style="text-align: center;">Training Head Count</p>
								<div id="chartdiv4"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
						<div class="col-md-12 d-block d-sm-none">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 30px 30px 20px 0px;margin: 0 0 0 0;">
								<p class="fw-semibold" style="text-align: center;">Training Head Count</p>
								<div id="chartdiv4-1"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
					<div class="row">
						<div class="col-md-6 d-none d-sm-block" style="margin-bottom: 40px;">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 30px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="text-align: center;">Training Classification<br>(Training Count)</p>
								<div id="chartdiv5"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
						<div class="col-md-6 d-none d-sm-block">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 30px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="text-align: center;">Training Hours<br>&nbsp;</p>
								<div id="chartdiv6"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>


						<div class="col-md-6 d-block d-sm-none" style="margin-bottom: 40px;">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 30px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="text-align: center;">Training Classification<br>(Training Count)</p>
								<div id="chartdiv5-1"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
						<div class="col-md-6 d-block d-sm-none">
							<div class="row" style="background-color: #fff;border-radius: 10px;border: 1px solid #f7f7f7;padding: 30px 30px 20px 0;margin: 0 0 0 0;">
								<p class="fw-semibold" style="text-align: center;">Training Hours<br>&nbsp;</p>
								<div id="chartdiv6-1"></div>
								<div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
							</div>
						</div>
					</div>
					<div class="space-40"></div>
				</div>
			</div>

			<div class="space-60" id="non-financial-kpi"></div>
			<div>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h4 class="fw-bold mb-0">Non-Financial KPI</h4>
							<hr class="dashboard_bottom_hr">
							<div class="space-10"></div>
							<p>AYA Bank uses following benchmarks and guidelines for better and more effective analysis on non-financial KPIs.</p>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="table-responsive text-nowrap committee_meeting_table_div">
								<table class="table table-borderless committee_meeting_table">
									<thead>
										<tr valign="middle">
											<td class="f-white" style="width: 30%;">Category</td>
											<td class="f-white">Key Non-Financial Measures</td>
										</tr>
									</thead>
									<tbody class="table-border-bottom-0" style="background-color: #fff;">
										<tr valign="top">
											<td class="b-t-l-radius-10 py-4">
												<p class="fw-semibold category_title" style="font-size: 20px;position: relative;">
													<img src="{{ url('/images/about-aya/sustainability/avenue-sustain/non-financial-performance/employee.png') }}" class="img-fluid">
													<span>Employee</span>
												</p>
											</td>
											<td class="b-t-r-radius-10">
												<p class="fw-semibold " style="font-size: 18px;">For the financial year 2022-2023,</p>
												<ul style="list-style: disc;">
													<li><p><b>Employee engagement</b> : 3 Townhalls</p></li>
													<li><p><b>Employee turnover rate</b> : 14.43% </p></li>
													<li><p><b>Employee absenteeism rate</b> : 3.67%</p></li>
													<li><p><b>Equal opportunity</b>: </p></li>
												</ul>

												<div class="row" style="padding: 0px 50px">
													<div class="col">
														<p><b>By Gender</b></p>
														<table class="table table-bordered interest_rates_fees_table" style="width: 80%;">
															<tbody>
																<tr class="b-t-none">
																	<td class="w-30 f-600 b-l-none">Male</td>
																	<td class="b-r-none">45%</td>
																</tr>
																<tr class="b-b-none">
																	<td class="f-600 b-l-none">Female</td>
																	<td class="b-r-none">55%</td>
																</tr>
															</tbody>
														</table>
													</div>
													<div class="col">
														<p><b>By Age</b></p>
														<table class="table table-bordered interest_rates_fees_table">
															<tbody>
																<tr class="b-t-none">
																	<td class="w-30 f-600 b-l-none" style="width: 50% !important">Under 25</td>
																	<td class="b-r-none">9%</td>
																</tr>
																<tr>
																	<td class="f-600 b-l-none">25 to 34</td>
																	<td class="b-r-none">69%</td>
																</tr>
																<tr>
																	<td class="f-600 b-l-none">35 to 44</td>
																	<td class="b-r-none">15%</td>
																</tr>
																<tr>
																	<td class="f-600 b-l-none">45 to 54</td>
																	<td class="b-r-none">6%</td>
																</tr>
																<tr class="b-b-none">
																	<td class="f-600 b-l-none">55 and above</td>
																	<td class="b-r-none">1%</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<div class="space-20"></div>


												<ul style="list-style: disc;">
													<li><p><b>Disability</b>: 0 Physically challenged person</p></li>
													<li><p><b>Frequency rate / Fatality rate</b>: 0 near miss, 0 LTI (Lost Time Injury)</p></li>
													<li><p><b>Training</b>: Provided 118 trainings, total training hours 2077</p></li>
													<li><p><b>Appraisal</b>: 1 performance review session per year,</p></li>
													<li style="list-style: none;"><p><span style="color: transparent;user-select: none;">Appraisal: </span>221 staffs (3.5% of the bank population) were promoted based on their performance</p></li>
													<li><p><b>Health</b>: We adhere to the maximum our Occupational Health & Safety (OHS) Rules to identify hazards and assess risks. During the pandemic period, ERT (Emergency Response Team) is organized to help prevent the spread of the Corona Virus. </p></li>
												</ul>
											</td>
										</tr>
										<tr valign="top">
											<td class="py-3">
												<p class="fw-semibold category_title" style="font-size: 20px;position: relative;margin-bottom: 0px;">
													<img src="{{ url('/images/about-aya/sustainability/avenue-sustain/non-financial-performance/community.png') }}" class="img-fluid">
													<span>Community</span>
												</p>
											</td>
											<td valign="middle">
												<ul style="list-style: disc;margin-bottom: 0;">
													<li><p class="mb-0">Philanthropic activities: Total expense for donation\philanthropy in FY 2022-2023 is MMK 2 billion.</p></li>
												</ul>
											</td>
										</tr>
										<tr valign="top">
											<td class="py-3">
												<p class="fw-semibold category_title" style="font-size: 20px;position: relative;">
													<img src="{{ url('/images/about-aya/sustainability/avenue-sustain/non-financial-performance/environment.png') }}" class="img-fluid">
													<span>Environment</span>
												</p>
											</td>
											<td>
												<ul style="list-style: disc;">
													<li><p>Mandatory for all our suppliers and vendors to sign SCP (Supplier Code of Principles) which prevents and reduces negative environmental impact.</p></li>
													<li><p>Ongoing with projects on Reducing paper usage, Save Energy, Recycle Bin as Internal Campaign to educate our AYA Staff to be aware of the risks and impact on the environment.</p></li>
													<li><p>Waste : Promoted paperless and cashless services and directed to digitalization</p></li>
													<li><p>For FY2022-2023, the Bank utilized</p></li>
													<li style="list-style: none;"><p><b>Electricity : </b>Total  expenditure MMK 1.48 billion for Head Office and 262  branches</p></li>
													<li style="list-style: none;"><p><b>Petrol : </b>Total  expenditure MMK 4.7 billion for Head Office 262 branches</p></li> 
												</ul>
											</td>
										</tr>
										<tr valign="top">
											<td class="py-4">
												<p class="fw-semibold category_title" style="font-size: 20px;position: relative;">
													<img src="{{ url('/images/about-aya/sustainability/avenue-sustain/non-financial-performance/supply_change_mgmt.png') }}" class="img-fluid">
													<span>Supply Chain Management</span>
												</p>
											</td>
											<td>
												<ul style="list-style: disc;">
													<li><p class="mb-0">‘Purchasing Guidelines’ has been developed that requires ethical, efficient and accountable practices for sourcing and procuring goods and services</p></li>
													<li><p class="mb-0">‘Suppliers Code of Principle’ has been developed to ensure vendors’ commitment on labor rights and non-discrimination along with service or product contract.</p></li>
												</ul>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="space-80"></div>
			</div>

			<div style="background-color: #fafcfc;">
				<div class="space-60" id="tax-contribution"></div>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h4 class="fw-bold mb-0">Tax Contribution</h4>
							<hr class="dashboard_bottom_hr">
							<div class="space-10"></div>
							<p>We strongly believe that taxes are beneficial to society, essential part in help building a stronger nation and laying a better foundation for the future generation. The obligation of paying taxes play a crucial role towards the progress of humanity. Taxes help spur economic growth which in turn has a ripple effect on the country’s economy. AYA Bank is committed to pay tax annually in compliance with the country’s law. Our tax data are audited according to International Financial Reporting Standards (IFRS) and published every year in Financial Statements and Annual Reports.</p>
							<p>AYA Bank was honored among top 20 large taxpayers in Myanmar for six assessment years consecutively, from 2013-14 to 2018-19. AYA Bank makes every effort to certain that the tax declaration is accurate, transparent, and fair. We fulfill our responsibilities as a compliant taxpayer and refrain from tax evasion. From its inception since 2010, AYA Bank has contributed total amount of MMK 41.533 billion till FY 2019-2020 for tax payment.</p>
						</div>

						<div class="space-20"></div>

						<div class="col-12">
							<div class="table-responsive text-nowrap committee_meeting_table_div">
								<table class="table table-borderless table-striped committee_meeting_table text-center">
									<thead>
										<tr valign="middle">
											<td class="f-white px-5 py-4" style="width: 50%;">Financial Year</td>
											<td class="f-white">Income tax payment (in million kyat)</td>
										</tr>
									</thead>
									<tbody class="table-border-bottom-0" style="background-color: #fff;">
										<tr>
											<td class="b-t-l-radius-10 px-5 py-3">FY 2019 - 2020</td>
											<td class="b-t-r-radius-10 px-5" class=" b-t-r-radius-10">8,614.7</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2018 - 2019</td>
											<td class="px-5">579.6</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2018</td>
											<td class="px-5">10,367.0</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2017 - 2018</td>
											<td class="px-5">5,731.0</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2016 - 2017</td>
											<td class="px-5">5,419.3</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2015 - 2016</td>
											<td class="px-5">2,634.6</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2014 - 2015</td>
											<td class="px-5">2,872.6</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2013 - 2014</td>
											<td class="px-5">3,002.5</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2012 - 2013</td>
											<td class="px-5">1,994.8</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2011 - 2012</td>
											<td class="px-5">300.0</td>
										</tr>
										<tr>
											<td class="px-5 py-3">FY 2010 - 2011</td>
											<td class="px-5">17.8</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="row">
						
					</div>
				</div>
				<div class="space-60"></div>
			</div>
		</div>
	</div>
</div>

@include('layouts.footer', ['page'=>''])

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script src="https://cdnjs.com/libraries/Chart.js"></script>

<script>
	am5.ready(function() {
		var root = am5.Root.new("chartdiv");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5xy.XYChart.new(root, {
			panX: false,
			panY: false,
			layout: root.verticalLayout
		}));

		chart.get("colors").set("colors", [
			am5.color(0xfd9a01),
			am5.color(0x4176d4)
		]);

		var data = [
			{
				"position": "Assistant Supervisor to Supervisor",
				"women": 70,
				"men": 30
			}, {
				"position": "Assistant Manager to Senior Manager",
				"women": 67,
				"men": 33
			}, {
				"position": "Assistant GM to Senior GM",
				"women": 56,
				"men": 44
			}, {
				"position": "Deputy Director and Above",
				"women": 44,
				"men": 56
			}
		]

		var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
		var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
			maxDeviation: 0.3,
			categoryField: "position",
			renderer: xRenderer,
			tooltip: am5.Tooltip.new(root, {}),
		}));

		xRenderer.labels.template.setAll({
			paddingBottom: 15,
			oversizedBehavior: "wrap",
			textAlign: "center"
		});

		xRenderer.labels.template.adapters.add("width", function(width, target) {
			var x0 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 0);
			var x1 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 1);
			target.set("maxWidth", x1 - x0)
			return x1 - x0;
		});

		xRenderer.grid.template.setAll({
			location: 1
	    })

		xAxis.data.setAll(data);

		var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
			min: 0,
			max: 100,
			numberFormat: "#'%'",
			strictMinMax: true,
			calculateTotals: true,
			renderer: am5xy.AxisRendererY.new(root, {
				strokeOpacity: 0.1,
			})
		}));

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.p50,
			x: am5.p50
		}));

		function makeSeries(name, fieldName) {
		  	var series = chart.series.push(am5xy.ColumnSeries.new(root, {
				name: name,
				stacked: true,
				xAxis: xAxis,
				yAxis: yAxis,
				valueYField: fieldName,
				valueYShow: "valueYTotalPercent",
				categoryXField: "position"
		  	}));

			series.columns.template.setAll({
				tooltipText: "{name}, {categoryX}:{valueYTotalPercent.formatNumber('#.#')}%",
				tooltipY: am5.percent(10),
				tooltipY: am5.color(0xffffff)
			});

			series.data.setAll(data);

			series.columns.template.setAll({
				width: 100
			});

		  	series.appear();

			series.bullets.push(function() {
				return am5.Bullet.new(root, {
					sprite: am5.Label.new(root, {
						text: "{valueYTotalPercent.formatNumber('#.#')}%",
						fill: root.interfaceColors.get("alternativeText"),
						centerY: am5.p50,
						centerX: am5.p50,
						populateText: true,
					})
				});
			});

		  	legend.data.push(series);
		}

		makeSeries("Women", "women");
		makeSeries("Men", "men");

		chart.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv-1");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5xy.XYChart.new(root, {
			panX: false,
			panY: false,
			layout: root.verticalLayout
		}));

		chart.get("colors").set("colors", [
			am5.color(0xfd9a01),
			am5.color(0x4176d4)
		]);

		var data = [
			{
				"position": "Assistant Supervisor to Supervisor",
				"women": 70,
				"men": 30
			}, {
				"position": "Assistant Manager to Senior Manager",
				"women": 67,
				"men": 33
			}, {
				"position": "Assistant GM to Senior GM",
				"women": 56,
				"men": 44
			}, {
				"position": "Deputy Director and Above",
				"women": 44,
				"men": 56
			}
		]

		var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
		var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
			maxDeviation: 0.3,
			categoryField: "position",
			renderer: xRenderer,
			tooltip: am5.Tooltip.new(root, {}),
		}));

		xRenderer.labels.template.setAll({
			paddingBottom: 15,
			oversizedBehavior: "wrap",
			textAlign: "center"
		});

		xRenderer.labels.template.adapters.add("width", function(width, target) {
			var x0 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 0);
			var x1 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 1);
			target.set("maxWidth", x1 - x0)
			return x1 - x0;
		});

		xRenderer.grid.template.setAll({
			location: 1
	    })

		xAxis.data.setAll(data);

		var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
			min: 0,
			max: 100,
			numberFormat: "#'%'",
			strictMinMax: true,
			calculateTotals: true,
			renderer: am5xy.AxisRendererY.new(root, {
				strokeOpacity: 0.1,
			})
		}));

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.p50,
			x: am5.p50
		}));

		function makeSeries(name, fieldName) {
		  	var series = chart.series.push(am5xy.ColumnSeries.new(root, {
				name: name,
				stacked: true,
				xAxis: xAxis,
				yAxis: yAxis,
				valueYField: fieldName,
				valueYShow: "valueYTotalPercent",
				categoryXField: "position"
		  	}));

			series.columns.template.setAll({
				tooltipText: "{name}, {categoryX}:{valueYTotalPercent.formatNumber('#.#')}%",
				tooltipY: am5.percent(10),
				tooltipY: am5.color(0xffffff)
			});

			series.data.setAll(data);

			series.columns.template.setAll({
				width: 50
			});

		  	series.appear();

			series.bullets.push(function() {
				return am5.Bullet.new(root, {
					sprite: am5.Label.new(root, {
						text: "{valueYTotalPercent.formatNumber('#.#')}%",
						fill: root.interfaceColors.get("alternativeText"),
						centerY: am5.p50,
						centerX: am5.p50,
						populateText: true,
					})
				});
			});

		  	legend.data.push(series);
		}

		makeSeries("Women", "women");
		makeSeries("Men", "men");

		chart.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv2");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5xy.XYChart.new(root, {
		  panX: false,
		  panY: false,
		  layout: root.verticalLayout
		}));

		chart.get("colors").set("colors", [
			am5.color(0xfd9a01),
			am5.color(0x4176d4)
		]);

		var data = [{
		  "board member": "Board Member",
		  "women": 33,
		  "men": 67
		}]

		var xRenderer = am5xy.AxisRendererX.new(root, {
			cellStartLocation: 0.2,
			cellEndLocation: 0.8
		})

		var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
			categoryField: "board member",
			renderer: xRenderer,
			tooltip: am5.Tooltip.new(root, {})
		}));

		xRenderer.labels.template.setAll({
			paddingBottom: 15,
			oversizedBehavior: "wrap",
			textAlign: "center"
		});

		xRenderer.grid.template.setAll({
			location: 1
		})

		xAxis.data.setAll(data);

		var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
			min: 0,
			max: 100,
			numberFormat: "#'%'",
			strictMinMax: true,
			calculateTotals: true,
			renderer: am5xy.AxisRendererY.new(root, {
				strokeOpacity: 0.1,
			})
		}));

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.p50,
			x: am5.p50
		}));

		function makeSeries(name, fieldName) {
			var series = chart.series.push(am5xy.ColumnSeries.new(root, {
				name: name,
				xAxis: xAxis,
				yAxis: yAxis,
				valueYField: fieldName,
				categoryXField: "board member"
			}));

			series.columns.template.setAll({
				tooltipText: "{name}, {categoryX}:{valueY.formatNumber('#.#')}%",
				tooltipY: am5.percent(10),
				tooltipY: am5.color(0xffffff)
			});

			series.data.setAll(data);

			series.appear();

			series.bullets.push(function() {
				return am5.Bullet.new(root, {
					sprite: am5.Label.new(root, {
						text: "{valueY}%",
						fill: root.interfaceColors.get("alternativeText"),
						centerY: am5.p50,
			            centerX: am5.p50,
			            populateText: true
					})
				});
			});

		  	legend.data.push(series);
		}

		makeSeries("Women", "women");
		makeSeries("Men", "men");

		chart.appear(1000, 100);
	});

	am5.ready(function() {
		var root3= am5.Root.new("chartdiv3");

		root3.setThemes([
			am5themes_Animated.new(root3)
		]);

		var chart = root3.container.children.push(am5percent.PieChart.new(root3, {
			layout: root3.verticalLayout,
			innerRadius: am5.percent(50)
		}));

		var series3 = chart.series.push(am5percent.PieSeries.new(root3, {
			valueField: "value",
			categoryField: "category"
		}));

		series3.get("colors").set("colors", [
			am5.color(0x754abd),
			am5.color(0x4176d4),
			am5.color(0xfd9a01),
			am5.color(0x99c727),
			am5.color(0xf6a7a3),
		]);

		series3.data.setAll([
			{ value: 9, category: "Under 25" },
			{ value: 69, category: "25 to 34" },
			{ value: 15, category: "35 to 44" },
			{ value: 6, category: "45 to 54" },
			{ value: 1, category: "55 and above" },
		]);

		series3.get("colors").set("colors", [
			am5.color(0xfd9a01),
			am5.color(0x08dd8c),
			am5.color(0x5aee95),
			am5.color(0x8fa873),
			am5.color(0xbb9006)
		]);

		var legend = chart.children.push( 
			am5.Legend.new(root3, {
				centerY: am5.percent(50),
				y: am5.percent(50),
				layout: root3.verticalLayout
			})
		);

		legend.data.setAll(series3.dataItems);

		series3.appear(1000, 100);
	});

	am5.ready(function() {
		var root3= am5.Root.new("chartdiv3-1");

		root3.setThemes([
			am5themes_Animated.new(root3)
		]);

		var chart = root3.container.children.push(am5percent.PieChart.new(root3, {
			radius: am5.percent(50),
			layout: root3.verticalLayout,
			innerRadius: am5.percent(50)
		}));

		var data = [
			{
			  value: 9,
			  category: "Under 25"
			}, {
			  value: 69,
			  category: "25 to 34"
			}, {
			  value: 15,
			  category: "35 to 44"
			}, {
			  value: 6,
			  category: "45 to 54"
			}, {
			  value: 1,
			  category: "55 and above"
			}
		];

		var series3 = chart.series.push(am5percent.PieSeries.new(root3, {
			name: "Series",
			categoryField: "category",
			valueField: "value",
			legendLabelText: "{category}",
			legendValueText: ""
		}));

		series3.get("colors").set("colors", [
			am5.color(0x754abd),
			am5.color(0x4176d4),
			am5.color(0xfd9a01),
			am5.color(0x99c727),
			am5.color(0xf6a7a3),
		]);

		series3.slices.template.set('tooltipText', '{category}: {value}');
		series3.labels.template.set('text', '{category}: {value}');
		series3.slices.template.set('legendText', '{category}');

		series3.labels.template.setAll({
			maxWidth: 80,
			fontSize: 10,
			oversizedBehavior: "wrap",
			text: "{category}:[bold]{value.formatNumber('#.#')}%[/]"
		});

		series3.data.setAll(data);

		var legend = chart.children.push( 
			am5.Legend.new(root3, {
				centerX: am5.percent(50),
				x: am5.percent(50),
				marginTop: 15,
				marginBottom: 15,
			})
		);

		legend.data.setAll(series3.dataItems);

		series3.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv4");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5xy.XYChart.new(root, {
			panX: false,
			panY: false,
			layout: root.verticalLayout
		}));

		chart.get("colors").set("colors", [
			am5.color(0x4176d4),
			am5.color(0xfd9a01)
			
		]);

		var data = [{
			"position": "AS to Super\n",
			"women": 80,
			"men": 20
		}, {
			"position": "AM to SM\n",
			"women": 74,
			"men": 26
		}, {
			"position": "AGM to SGM\n",
			"women": 63,
			"men": 37
		}, {
			"position": "Dy.Director and above\n",
			"women": 52,
			"men": 48
		}]

		var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
		var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
			maxDeviation: 0.3,
			categoryField: "position",
			renderer: xRenderer,
			tooltip: am5.Tooltip.new(root, {}),
		}));

		xRenderer.labels.template.setAll({
			paddingBottom: 15,
			oversizedBehavior: "wrap",
			textAlign: "center"
		});

		xRenderer.labels.template.adapters.add("width", function(width, target) {
			var x0 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 0);
			var x1 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 1);
			target.set("maxWidth", x1 - x0)
			return x1 - x0;
		});

		xAxis.data.setAll(data);

		var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
			min: 0,
			max: 100,
			numberFormat: "#'%'",
			strictMinMax: true,
			calculateTotals: true,
			renderer: am5xy.AxisRendererY.new(root, {
				strokeOpacity: 0.1,
			})
		}));

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.p50,
			x: am5.p50
		}));

		function makeSeries(name, fieldName) {
		  	var series = chart.series.push(am5xy.ColumnSeries.new(root, {
				name: name,
				stacked: true,
				xAxis: xAxis,
				yAxis: yAxis,
				valueYField: fieldName,
				valueYShow: "valueYTotalPercent",
				categoryXField: "position"
		  	}));

			series.columns.template.setAll({
				tooltipText: "{name}, {categoryX}:{valueYTotalPercent.formatNumber('#.#')}%",
				tooltipY: am5.percent(10),
				tooltipY: am5.color(0xffffff)
			});

			series.data.setAll(data);

			series.columns.template.setAll({
				width: 100
			});

		  	series.appear();

			series.bullets.push(function() {
				return am5.Bullet.new(root, {
					sprite: am5.Label.new(root, {
						text: "{valueYTotalPercent.formatNumber('#.#')}%",
						fill: root.interfaceColors.get("alternativeText"),
						centerY: am5.p50,
						centerX: am5.p50,
						populateText: true
					})
				});
			  });

		  legend.data.push(series);
		}

		makeSeries("Men", "men");
		makeSeries("Women", "women");
		

		chart.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv4-1");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5xy.XYChart.new(root, {
			panX: false,
			panY: false,
			layout: root.verticalLayout
		}));

		chart.get("colors").set("colors", [
			am5.color(0xfd9a01),
			am5.color(0x4176d4)
		]);

		var data = [{
			"position": "AS to Super\n",
			"women": 80,
			"men": 20
		}, {
			"position": "AM to SM\n",
			"women": 74,
			"men": 26
		}, {
			"position": "AGM to SGM\n",
			"women": 63,
			"men": 37
		}, {
			"position": "Dy.Director and above\n",
			"women": 52,
			"men": 48
		}]

		var xRenderer = am5xy.AxisRendererX.new(root, { minGridDistance: 30 });
		var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
			maxDeviation: 0.3,
			categoryField: "position",
			renderer: xRenderer,
			tooltip: am5.Tooltip.new(root, {}),
		}));

		xRenderer.labels.template.setAll({
			paddingBottom: 15,
			oversizedBehavior: "wrap",
			textAlign: "center"
		});

		xRenderer.labels.template.adapters.add("width", function(width, target) {
			var x0 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 0);
			var x1 = xAxis.getDataItemCoordinateY(xAxis.dataItems[0], "category", 1);
			target.set("maxWidth", x1 - x0)
			return x1 - x0;
		});

		xAxis.data.setAll(data);

		var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
			min: 0,
			max: 100,
			numberFormat: "#'%'",
			strictMinMax: true,
			calculateTotals: true,
			renderer: am5xy.AxisRendererY.new(root, {
				strokeOpacity: 0.1,
			})
		}));

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.p50,
			x: am5.p50
		}));

		function makeSeries(name, fieldName) {
		  	var series = chart.series.push(am5xy.ColumnSeries.new(root, {
				name: name,
				stacked: true,
				xAxis: xAxis,
				yAxis: yAxis,
				valueYField: fieldName,
				valueYShow: "valueYTotalPercent",
				categoryXField: "position"
		  	}));

			series.columns.template.setAll({
				tooltipText: "{name}, {categoryX}:{valueYTotalPercent.formatNumber('#.#')}%",
				tooltipY: am5.percent(10),
				tooltipY: am5.color(0xffffff)
			});

			series.data.setAll(data);

			series.columns.template.setAll({
				width: 50
			});

		  	series.appear();

			series.bullets.push(function() {
				return am5.Bullet.new(root, {
					sprite: am5.Label.new(root, {
						text: "{valueYTotalPercent.formatNumber('#.#')}%",
						fill: root.interfaceColors.get("alternativeText"),
						centerY: am5.p50,
						centerX: am5.p50,
						populateText: true
					})
				});
			  });

		  legend.data.push(series);
		}

		makeSeries("Women", "women");
		makeSeries("Men", "men");

		chart.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv5");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5percent.PieChart.new(root, {
			radius: am5.percent(70),
			layout: root.verticalLayout,
			innerRadius: am5.percent(50)
		}));

		var data = [{
		  value: 28,
		  category: "Soft Skill Training"
		}, {
		  value: 34,
		  category: "Freshmen Orientation"
		}, {
		  value: 56,
		  category: "Technical Training"
		}];

		var series = chart.series.push(
			am5percent.PieSeries.new(root, {
				name: "Series",
				categoryField: "category",
				valueField: "value",
				legendLabelText: "{category}",
				legendValueText: ""
			})
		);

		series.get("colors").set("colors", [
			am5.color(0x4176d4),
			am5.color(0xfd9a01),
			am5.color(0x99c727)
		]);

		series.slices.template.set('tooltipText', '{category}: {value}');
		series.labels.template.set('text', '{category}: {value}');

		series.labels.template.setAll({
			maxWidth: 100,
			fontSize: 12,
			oversizedBehavior: "wrap",
			text: "{category} : [bold]{value}[/]"
		});

		series.data.setAll(data);

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.percent(50),
			x: am5.percent(50),
			marginTop: 15,
			marginBottom: 15,
			text: "{category}"
		}));

		legend.data.setAll(series.dataItems);

		series.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv5-1");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5percent.PieChart.new(root, {
			radius: am5.percent(50),
			layout: root.verticalLayout,
			innerRadius: am5.percent(50)
		}));

		var data = [{
		  value: 28,
		  category: "Soft Skill Training"
		}, {
		  value: 34,
		  category: "Freshmen Orientation"
		}, {
		  value: 56,
		  category: "Technical Training"
		}];

		var series = chart.series.push(
			am5percent.PieSeries.new(root, {
				name: "Series",
				categoryField: "category",
				valueField: "value",
				legendLabelText: "{category}",
				legendValueText: ""
			})
		);

		series.get("colors").set("colors", [
			am5.color(0x4176d4),
			am5.color(0xfd9a01),
			am5.color(0x99c727)
		]);

		series.slices.template.set('tooltipText', '{category}: {value}');
		series.labels.template.set('text', '{category}: {value}');

		series.labels.template.setAll({
			maxWidth: 80,
			fontSize: 10,
			oversizedBehavior: "wrap",
			text: "{category} : [bold]{value}[/]"
		});

		series.data.setAll(data);

		var legend = chart.children.push( 
      am5.Legend.new(root, {
        centerX: am5.percent(50),
        x: am5.percent(50),
        marginTop: 15,
        marginBottom: 15,
      })
    );

    legend.data.setAll(series.dataItems);

		series.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv6");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5percent.PieChart.new(root, {
			radius: am5.percent(70),
			layout: root.verticalLayout,
			innerRadius: am5.percent(50)
		}));

		var data = [{
		  value: 136,
		  category: "Soft Skill Training"
		}, {
		  value: 544,
		  category: "Freshmen Orientation"
		}, {
		  value: 1397,
		  category: "Technical Training"
		}];

		var series = chart.series.push(
			am5percent.PieSeries.new(root, {
				name: "Series",
				categoryField: "category",
				valueField: "value",
				legendLabelText: "{category}",
				legendValueText: ""
			})
		);

		series.get("colors").set("colors", [
			am5.color(0x4176d4),
			am5.color(0xfd9a01),
			am5.color(0x99c727)
		]);

		series.slices.template.set('tooltipText', '{category}: {value}');
		series.labels.template.set('text', '{category}: {value}');
		series.slices.template.set('legendText', '{category}');

		series.labels.template.setAll({
			maxWidth: 100,
			fontSize: 11,
			oversizedBehavior: "wrap",
			text: "{category} : [bold]{value}[/]"
		});

		series.data.setAll(data);

		var legend = chart.children.push(am5.Legend.new(root, {
			centerX: am5.percent(50),
			x: am5.percent(50),
			marginTop: 15,
			marginBottom: 15
		}));
 
		legend.data.setAll(series.dataItems);

		series.appear(1000, 100);
	});

	am5.ready(function() {
		var root = am5.Root.new("chartdiv6-1");

		root.setThemes([
			am5themes_Animated.new(root)
		]);

		var chart = root.container.children.push(am5percent.PieChart.new(root, {
			radius: am5.percent(50),
			layout: root.verticalLayout,
			innerRadius: am5.percent(50)
		}));

		var data = [{
		  value: 136,
		  category: "Soft Skill Training"
		}, {
		  value: 544,
		  category: "Freshmen Orientation"
		}, {
		  value: 1397,
		  category: "Technical Training"
		}];

		var series = chart.series.push(
			am5percent.PieSeries.new(root, {
				name: "Series",
				categoryField: "category",
				valueField: "value",
				legendLabelText: "{category}",
				legendValueText: ""
			})
		);

		series.get("colors").set("colors", [
			am5.color(0x4176d4),
			am5.color(0xfd9a01),
			am5.color(0x99c727)
		]);

		series.slices.template.set('tooltipText', '{category}: {value}');
		series.labels.template.set('text', '{category}: {value}');
		series.slices.template.set('legendText', '{category}');

		series.labels.template.setAll({
			maxWidth: 80,
			fontSize: 10,
			oversizedBehavior: "wrap",
			text: "{category} : [bold]{value}[/]"
		});

		series.data.setAll(data);

		var legend = chart.children.push( 
	      am5.Legend.new(root, {
	        centerX: am5.percent(50),
	        x: am5.percent(50),
	        marginTop: 15,
	        marginBottom: 15,
	      })
	    );

	    legend.data.setAll(series.dataItems);

		series.appear(1000, 100);
	});
</script>


@endsection('content')