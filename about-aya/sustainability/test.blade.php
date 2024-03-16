@extends('layouts.frontend-app')

@section('title', 'Non-financial Performance – AYA Bank')
<link rel="stylesheet" href="{{ url('/css/about-aya/non-financial-performance.css') }}">
<style type="text/css">
  #chartdiv, #chartdiv2 {
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

      <div class="space-20"></div>
      <div class="our_key_enabler_section" style="background-color: #fafcfc;">
        <div class="container">
          <h4>&nbsp;</h4>
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
              <div class="row">
                <div class="col-md-4 text-center">
                  <img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/healthy_life_style.webp') }}" class="img-fluid key_enablers_icon">
                  <p class="csr_key_lable">Dashboard</p>
                </div>
                <div class="col-md-4 text-center">
                  <img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/gender_equality.webp') }}" class="img-fluid key_enablers_icon">
                  <p class="csr_key_lable">Non-financial KPI</p>
                </div>
                <div class="col-md-4 text-center">
                  <img src="{{ url('/images/about-aya/sustainability/corporate-social-responsibility/corporate_digital_responsibility.webp') }}" class="img-fluid key_enablers_icon">
                  <p class="csr_key_lable">Tax Contribution</p>
                </div>
              </div>
            </div>
            <div class="col-md-1"></div>
          </div>
        </div>
        <div class="space-30"></div>
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
              <h5 class="fw-bold mb-0">Gender Balance</h5>
            </div>
          </div>

          <div class="row">
            <div class="col-md-8">
              <div class="row" style="background-color: #fff;border-radius: 5px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 0;margin: 0 0 0 0;">
                <p class="fw-semibold" style="padding-left: 40px;">Proportionate Retention by Position</p>
                <div id="chartdiv"></div>
                <div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row" style="background-color: #fff;border-radius: 5px;border: 1px solid #f7f7f7;padding: 20px 30px 20px 0;margin: 0 0 0 0;">
                <p class="fw-semibold" style="padding-left: 40px;">Board Composition</p>
                <div id="chartdiv2"></div>
                <div style="height: 20px;background-color: #fff;margin-top: -20px;z-index: 9999;position: relative;"></div>
              </div>
            </div>
          </div>




          <div class="space-30"></div>
        </div>
      </div>

      <div class="space-30"></div>
      <div style="background-color: #fafcfc;">
        <div class="space-30"></div>
        <div class="container">
          <div class="row">
            <div class="col-6">
              <h4 class="fw-bold">Recent Update</h4>
            </div>
            <div class="col-6 text-right">
              <a class="theme_text_color float-end" href="{{ url('/about-aya/news-room/csr-news') }}"><h4 style="font-size: 14px !important;line-height: 34px;">View all&nbsp;<i class='bx bx-chevron-right' style="font-size: 18px;line-height: 18px;"></i></h4></a>
            </div>
          </div>
          <div class="row">
            
          </div>
        </div>
        <div class="space-30"></div>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer', ['page'=>''])

<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script>
  am5.ready(function() {
    var root = am5.Root.new("chartdiv");

    root.setThemes([
      am5themes_Animated.new(root)
    ]);

    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: false,
      panY: false,
      // wheelX: "panX",
      // wheelY: "zoomX",
      layout: root.verticalLayout
    }));

    chart.get("colors").set("colors", [
      am5.color(0xfd9a01),
      am5.color(0x4176d4)
    ]);

    var data = [{
      "position": "Assistant Supervisor\nto Supervisor\n",
      "women": 70,
      "men": 30
      
    }, {
      "position": "Assistant Manager\nto Senior Manager\n",
      "women": 67,
      "men": 33
    }, {
      "position": "Assistant GM\nto Senior GM\n",
      "women": 56,
      "men": 44
    }, {
      "position": "Deputy Director\nand Above\n",
      "women": 44,
      "men": 56
    }]

    var xRenderer = am5xy.AxisRendererX.new(root, {});
    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      categoryField: "position",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {}),

    }));

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

    var legend = chart.children.push(
      am5.Legend.new(root, {
        centerX: am5.p50,
        x: am5.p50
      })
    );

    var data = [{
      "board member": "Board Member",
      "women": 33,
      "men": 67
    }]

    var xRenderer = am5xy.AxisRendererX.new(root, {
      cellStartLocation: 0.1,
      cellEndLocation: 0.9
    })

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      categoryField: "board member",
      renderer: xRenderer,
      tooltip: am5.Tooltip.new(root, {})
    }));

    xRenderer.grid.template.setAll({
      location: 1
    })

    xAxis.data.setAll(data);

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      renderer: am5xy.AxisRendererY.new(root, {
        strokeOpacity: 0.1
      })
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
        tooltipText: "{name}, {categoryX}:{valueY}",
        width: am5.percent(90),
        tooltipY: 0,
        strokeOpacity: 0
      });

      series.data.setAll(data);

      series.appear();

      series.bullets.push(function() {
        return am5.Bullet.new(root, {
          locationY: 0,
          sprite: am5.Label.new(root, {
            text: "{valueY}",
            fill: root.interfaceColors.get("alternativeText"),
            centerY: 0,
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
</script>


@endsection('content')