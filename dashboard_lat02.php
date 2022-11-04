<?php
session_start();
//error_reporting(0);
?>

<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="../../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../../../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../../bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../../../bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../../../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="../../../jqwidgets/styles/jqx.base.css" type="text/css" />
  <style>
    .mini-panel.max {
      position: fixed !important;
      width: 100% !important;
      height: 100% !important;
      left: 0 !important;
      top: 0 !important;
      z-index: 10000;
    }

    .asLabel .mini-textbox-border,
    .asLabel .mini-textbox-input {
      border: 0;
      background: none;
      cursor: default;
      font-size: 20px;
      width: auto;
    }

    .asLabelsmall .mini-textbox-border,
    .asLabelsmall .mini-textbox-input {
      border: 0;
      background: none;
      cursor: default;
      font-size: 12px;
      text-align: right;
      width: 90%;
    }
  </style>

  <script src="../../../scripts/boot.js" type="text/javascript"></script>
  <script src="../../../scripts/core.js" type="text/javascript"></script>
  <!--link href="scripts/miniui/themes/default/large-mode.css" rel="stylesheet" type="text/css" /-->
  <link href="../../../scripts/miniui/themes/bootstrap/skin.css" rel="stylesheet" type="text/css" />
  <script src="../../../scripts/miniui/locale/en_US.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
  <!-- Left side column. contains the logo and sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <!-- Content Header (Page header) -->
  <!--section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section-->

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->

    <!-- Main row -->
    <div class="row">
      <!-- ini untuk grafik 1 -->
      <section class="col-lg-4 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Pelanggan by Status" style="width:100%;height:350px;">
            <div id='chart_bar_status' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <!-- ini untuk grafik 2 -->
      <section class="col-lg-5 col-xs-5">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Grafik 2" style="width:100%;height:350px;">

          </div>
        </div>
      </section>

      <section class="col-lg-3 col-xs-3">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Grafik 3" style="width:100%;height:350px;">

          </div>
        </div>
      </section>
    </div>

    <!-- Row ke 2 -->
    <div class="row">
      <!-- Row 2 Box 1 -->
      <section class="col-lg-6 col-xs-6">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Grafik 1" style="width:100%;height:350px;">

          </div>
        </div>
      </section>

      <!-- Row 2 Box 2 -->
      <section class="col-lg-6 col-xs-6">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Grafik 1" style="width:100%;height:350px;">

          </div>
        </div>
      </section>
    </div>


  </section>
  <script type="text/javascript" src="../../../jqwidgets/jqxcore.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/jqxdraw.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/jqxchart.core.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/demos.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/jqxdata.js"></script>

  <script type="text/javascript">
    mini.parse();
    chart_bar_Pelanggan_By_status();

    function chart_bar_Pelanggan_By_status() {

      var url = 'data_table.php';
      alert(url);
      var source = {
        datatype: "json",
        datafields: [{
            name: 'sumber_wo'
          },
          {
            name: 'total'
          },
        ],
        url: url
      };
      var dataAdapter = new $.jqx.dataAdapter(source, {
        async: false,
        autoBind: true,
        loadError: function(xhr, status, error) {
          alert('Error loading "' + source.url + '" : ' + error);
        }
      });

      var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

      // prepare jqxChart settings
      var settings = {
        title: "",
        description: "",
        showLegend: true,
        enableAnimations: true,
        showBorderLine: false,
        //padding: { left: 5, top: 5, right: 5, bottom: 5 },
        //titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
        padding: {
          left: 20,
          top: 5,
          right: 20,
          bottom: 5
        },
        titlePadding: {
          left: 90,
          top: 0,
          right: 0,
          bottom: 10
        },
        source: dataAdapter,
        xAxis: {
          dataField: ['sumber_wo'],
          displayText: ['Sumber WO'],
          valuesOnTicks: false,
          labels: {
            angle: 0,
            // formatFunction: function (value) {
            //     return months[value-1]; //value.toString(); //months[value-1];
            // }
          },
          tickMarks: {
            visible: true,
            //interval: 1
          },
          gridLines: {
            visible: false,
            //interval: 3
          },
          flip: false
        },
        valueAxis: {
          visible: true,
          displayValueAxis: true,
          title: {
            text: 'Daftar Sumber WO'
          },
          //labels: { horizontalAlignment: 'right' }
          flip: false,
          axisSize: 'auto',
          tickMarksColor: '#888888'
        },

        colorScheme: 'scheme01',
        columnSeriesOverlap: false,
        seriesGroups: [{
          type: 'column',
          series: [{
            dataField: 'total',
            displayText: 'Total Pelanggan',
            labels: {
              visible: true,
              verticalAlignment: 'top',
              offset: {
                x: 0,
                y: -20
              }
            },
            //formatFunction: decimalFormatFunction
          }, ]
        }, ]
      };

      function myEventHandler(event) {
        var eventData = '<div><b>Last Event: </b>' + event.type + '<b>, Serie DataField: </b>' + event.args.serie.dataField + '<b>, Value: </b>' + event.args.elementValue + "</div>";
        if (event.type == 'toggle')
          eventData = '<div><b>Last Event: </b>' + event.type + '<b>, Serie DataField: </b>' + event.args.serie.dataField + '<b>, visible: </b>' + event.args.state + "</div>";
        //alert(event.args.serie.dataField);
        //alert(record_array[event.args.elementIndex].PENYULANG);
        var record = dataAdapter.records[event.args.elementIndex];
        //alert(record.selesai_wo);
        //alert(record.kode_area);
      };
      $('#chart_bar_status').jqxChart(settings);
      $('#chart_bar_status').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }
  </script>
</body>

</html>