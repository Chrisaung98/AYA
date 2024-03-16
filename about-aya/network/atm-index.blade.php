@extends('layouts.frontend-app')

@section('title', 'ATM Locations – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/slide_tab.css') }}" />
<link rel="stylesheet" href="{{ url('/css/loader.css') }}" />
<link rel="stylesheet" href="{{ url('/css/about-aya/locations.css') }}" />

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="layout-wrapper layout-content-navbar">
   	<div class="layout-container">
		<div class="layout-page">
			@include('layouts.header', ['page'=>'about_aya'])
        	<div class="menu-overlay"></div>

			@include('layouts.banner', ['page'=>'atm_locations'])

			<div style="">
				<div class="d-none d-sm-block space-60"></div>

				<div class="container">
					<h4 class="fw-bold" style="margin-left: 0px;">Explore Our ATM Locations!</h4>
				</div>
				<div class="nav-align-top">
					<ul class="nav nav-pills " role="tablist" style="justify-content: center;display: none;">
						<li class="nav-item">
							<button type="button" class="tab_title nav-link active" id="map_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-map" aria-controls="navs-pills-top-map" aria-selected="true" >
								Map View
							</button>
						</li>
						<li class="nav-item">
							<button type="button" class="tab_title nav-link" id="list_tab" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-list" aria-controls="navs-pills-top-list" aria-selected="false" >
								List View
							</button>
						</li>
					</ul>
					<div class="tab-content" style="background-color: transparent;padding: 30px 0px 0px 0px;">
						<div class="tab-pane fade " id="navs-pills-top-map" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row">
								</div>
							</div>
						</div>
						<div class="tab-pane list_view fade show active" id="navs-pills-top-list" role="tabpanel" style="background: transparent;padding-bottom: 30px;">
							<div class="container section_1">
								<div class="row tab_data_row">
									<div class="col-md-6">
										<div class="input-group list_row_group">
											<form action="{{ url('/about-aya/network/atm-locations') }}" method="POST" enctype="multipart/form-data" id="enquiry_form" style="width: 100%;display: contents;">
												{{ csrf_field() }}
												<label class="input-group-text show_entries" for="show_entries">Show</label>
												<select class="form-select" id="show_entries" name="show_entries" onchange="this.form.submit();">
													<option value="20" {{ $show_ent == '20' ? 'selected':'' }}>20</option>
													<option value="50" {{ $show_ent == '50' ? 'selected':'' }}>50</option>
													<option value="100" {{ $show_ent == '100' ? 'selected':'' }}>100</option>
													<option value="150" {{ $show_ent == '150' ? 'selected':'' }}>150</option>
													<option value="200" {{ $show_ent == '200' ? 'selected':'' }}>200</option>
													<option value="250" {{ $show_ent == '250' ? 'selected':'' }}>250</option>
													<option value="300" {{ $show_ent == '300' ? 'selected':'' }}>300</option>
													<option value="0" {{ $show_ent == '0' ? 'selected':'' }}>All</option>
												</select>
												<select class="form-select d-none search_show_entries" id="search_show_entries" disabled>
													<option selected disabled>All</option>
												</select>
												<label class="input-group-text show_entries" for="show_entries">entries</label>
											</form>
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group">
											<label class="input-group-text show_entries" for="show_entries">Near By</label>
											<div class="input-group input-group-merge location_search_div">
						                        <span class="input-group-text" id="basic-addon-search31"><i class="bx bx-search"></i></span>
						                        <input type="text" class="form-control" name="search_value" id="search_value" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2" />
						                        <button class="btn btn-outline-primary" type="button" id="button-addon2">Locate</button>
						                    </div>
										</div>
									</div>
									<div class="table-responsive text-nowrap location_table_html">										
										<table class="table table-borderless location_table org_table">
											<thead>
												<tr valign="middle">
													<td class="py-3" style="font-size: 12px;width: 1%;background-color: #f8fa4f;">No</td>
													<td class="py-3 f-white" style="font-size: 12px;width: 10%;background-color: #fbb831;">Region</td>
													<td class="py-3 f-white" style="font-size: 12px;width: 10%;background-color: #fb7e1c;">Township</td>
													<td class="py-3 f-white" style="font-size: 12px;width: 16%;background-color: #f04223;">Location / Branch</td>
													<td class="py-3 f-white" style="font-size: 12px;width: 33%;background-color: #bc1e6a;">Address</td>
													<td class="py-3 f-white" style="font-size: 12px;background-color: #077c78;width: 3%;">
														Map Location
													</td>
												</tr>
											</thead>
											<tbody class="table-border-bottom-0" style="background-color: #f5f5f5;">
												<?php
													$p_page = (int)$pagi_page;													
													if ($p_page > 0) {
														$bl_count = (($p_page - 1) * $show_ent) + 1;
													} else {
														$bl_count = ($p_page * $show_ent) + 1;
													}
													$first_bl_count = $bl_count;
													$last_bl_count;
												?>
												@foreach($branch_list as $bl)
													<tr valign="top">
														<td style="font-size: 12px;">{{ $bl_count }}</td>
														<td style="font-size: 12px;">{{ $bl->region }}</td>
														<td style="font-size: 12px;">{{ $bl->township }}</td>
														<td style="font-size: 12px;">{{ $bl->name }}</td>
														<td style="font-size: 12px;">{{ $bl->list_address }}</td>
														<td style="text-align: center;">
															<a href="{{ (strpos($bl->map, 'http://') === 0 || strpos($bl->map, 'https://') === 0) ? $bl->map : 'http://' . $bl->map }}" target="_blank">
																<img src="{{ url('/images/about-aya/network/location_icon.webp') }}" class="img-fluid" style="width: 45%;">
															</a>
														</td>
													</tr>
													@php
														$bl_count = $bl_count + 1;
														$last_bl_count = $bl_count - 1;
													@endphp
												@endforeach
											</tbody>
										</table>
										<div class="d-none location_loader">
											<div class="loader_upper"></div>
											<div class="lds-dual-ring"></div>
											<div class="loader_lower"></div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="row">
											<div class="col-md-4 entries_count_col">
												<p>Showing <span class="first_bl_count">{{$first_bl_count}}</span> to <span class="last_bl_count">{{ $last_bl_count }}</span> of <span class="total_branch">{{ count($total_branch) }}</span> entries</p>
											</div>
											<div class="col-md-8">
												@if($show_ent != '0')
													{{ $branch_list->appends(request()->input())->links(); }}
												@endif
											</div>
										</div>
									</div>
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
@include('layouts.footer', ['page'=>''])

<script type="text/javascript">
    var cur_url = window.location.href;
    var parts = cur_url.split('#');
    var last_part = parts.at(-1);

    $("#radio-1").click(function(){
        $("#bod_tab").click();
    });
    $("#radio-2").click(function(){
        $("#emt_tab").click();
    });

    var _changeInterval = null;

    document.addEventListener('keypress', (event)=>{
        let keyCode = event.keyCode ? event.keyCode : event.which;
        if(keyCode === 13) {
            $("#button-addon2").click();
        }
    });

	$("#button-addon2").click(function(){
    	var search_value = $("#search_value").val();
    	var show_entries = $("#show_entries").val();
    	var location_table_html;
    	var APP_URL = {!! json_encode(url('/')) !!};

    	if (!search_value || search_value.trim() === "") {
        	show_entries = "0"; // Set show_entries to '0' for "All"
        	$("#show_entries").val(show_entries); // Update the select element
    	
			}	
        $(".location_table").addClass('d-none');
        $(".location_loader").removeClass('d-none');
		
		if (search_value == "") {
	    	window.location=window.location;
	    } else {
	        $.ajax({
	            type:'POST',
	            url:"{{ url('/about-aya/network/atm-locations-search-value')}}",
	            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
	            data:{search_value:search_value,show_entries:show_entries},
	            success:function(data){
	                location_table_html = '<table class="table table-borderless location_table search_table">'+
	                                            '<thead>'+
	                                                '<tr valign="middle">'+
	                                                    '<td class="py-3" style="font-size: 12px;width: 1%;background-color: #f8fa4f;">No</td>'+
	                                                    '<td class="py-3 f-white" style="font-size: 12px;width: 10%;background-color: #fbb831;">Region</td>'+
	                                                    '<td class="py-3 f-white" style="font-size: 12px;width: 10%;background-color: #fb7e1c;">Township</td>'+
	                                                    '<td class="py-3 f-white" style="font-size: 12px;width: 14%;background-color: #f04223;">Location / Branch</td>'+
		                                                '<td class="py-3 f-white" style="font-size: 12px;width: 33%;background-color: #bc1e6a;">Address</td>'+
														'<td class="py-3 f-white" style="font-size: 12px;background-color: #077c78;width: 3%;">'+
															'Map Location'+
														'</td>'+
	                                                '</tr>'+
	                                            '</thead>'+
	                                            '<tbody class="table-border-bottom-0" style="background-color: #f5f5f5;">';
	                                                for (var blist = 0; blist < data['data']['branch_list'].length; blist++) {
	                                                    location_table_html +=     '<tr valign="top">'+
	                                                                                '<td style="font-size: 12px;">'+ (blist + 1) +'</td>'+
	                                                                                '<td style="font-size: 12px;">'+data['data']['branch_list'][blist]['region']+'</td>'+
	                                                                                '<td style="font-size: 12px;">'+data['data']['branch_list'][blist]['township']+'</td>'+
	                                                                                '<td style="font-size: 12px;">'+data['data']['branch_list'][blist]['name']+'</td>'+
	                                                                                '<td style="font-size: 12px;">'+data['data']['branch_list'][blist]['list_address']+'</td>'+
	                                                                                '<td style="text-align: center;">'+
																						'<a href="https://www.google.com/maps/search/?api=1&query=AYA Bank '+data['data']['branch_list'][blist]['name']+', '+data['data']['branch_list'][blist]['list_address']+', '+data['data']['branch_list'][blist]['latitude']+', '+data['data']['branch_list'][blist]['longitude']+'" target="_blank">'+
																							'<img src="'+APP_URL+'/images/about-aya/network/location_icon.webp" class="img-fluid" style="width: 45%;">'+
																						'</a>'+
																					'</td>'+
	                                                                            '</tr>';
	                                                }
	                                                    
	                                                
	                                            location_table_html +='</tbody>'+
	                                        '</table>';

	                $(".location_table_html").append(location_table_html);
	                $(".location_loader").addClass('d-none');
	                $("#show_entries").addClass('d-none');
	                $(".search_show_entries").removeClass('d-none');
	                $(".pagination").addClass('d-none');
	                $(".first_bl_count").text('1');
	                $(".last_bl_count").text(data['data']['branch_list'].length);
	                $(".total_branch").text(data['data']['branch_list'].length);

	                stop();

	            }

	        });
	    }
    });

    function stop() {
        clearInterval(_changeInterval);
    }
	

</script>

@endsection('content')

