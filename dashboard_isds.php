<?php
session_start();
error_reporting(0);
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

    <!-- ROW WO -->
    <div class="row">

      <sectio class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Work Order Perbulan" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_perbulan' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>

      <sectio class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Work Order by Status Perbulan" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_by_status_perbulan' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>

      <sectio class="col-lg-8 col-xs-8">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Work Order Perkota" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_perkota' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>

      <sectio class="col-lg-4 col-xs-4">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="work Order Perprovinsi" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_perprovinsi' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>

      <sectio class="col-lg-8 col-xs-8">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="work Order Provinsi DKI Jakarta" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_provinsi_dki_jakarta' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>

      <sectio class="col-lg-4 col-xs-4">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="work Order Provinsi Bali" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_provinsi_bali' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>

      <sectio class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="work Order Provinsi Jawa Tengah" style="width:100%;height:350px;">
            <div id='chart_bar_isds_work_order_provinsi_jawa_tengah' style="width: 100%; height: 100%; font-size: 8px;">
            </div>
          </div>
        </div>
      </sectio>


    </div>

  </section>
  <script type="text/javascript" src="../../../jqwidgets/jqxcore.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/jqxdraw.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/jqxchart.core.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/demos.js"></script>
  <script type="text/javascript" src="../../../jqwidgets/jqxdata.js"></script>


  <script type="text/javascript">
    mini.parse();

    // ----------------------- Work Order Induction Stove Digital Service perBulan ------------------------------
    chart_bar_isds_work_order_perbulan();

    function chart_bar_isds_work_order_perbulan() {

      var url = 'data_table_isds_wo_perbulan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
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
          dataField: ['bulan'],
          displayText: ['Bulan'],
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
            text: 'Jumlah'
          },
          //labels: { horizontalAlignment: 'right' }
          flip: false,
          axisSize: 'auto',
          tickMarksColor: '#888888'
        },

        colorScheme: 'scheme01',
        columnSeriesOverlap: false,
        seriesGroups: [{
          type: 'line',
          series: [{
            dataField: 'total',
            displayText: 'Work Order',
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
      $('#chart_bar_isds_work_order_perbulan').jqxChart(settings);
      $('#chart_bar_isds_work_order_perbulan').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }


    // ----------------------- Work Order Induction Stove Digital Service perBulan by Status ------------------------------
    chart_bar_isds_work_order_by_status_perbulan();

    function chart_bar_isds_work_order_by_status_perbulan() {

      var url = 'data_table_isds_wo_by_status_perbulan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'wo_gagal'
          },
          {
            name: 'on_progress'
          },
          {
            name: 'selesai'
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
          dataField: ['bulan'],
          displayText: ['Bulan'],
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
            text: 'Jumlah'
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
              dataField: 'wo_gagal',
              displayText: 'WO Gagal',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              //formatFunction: decimalFormatFunction
            },
            {
              dataField: 'on_progress',
              displayText: 'On Progress',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              //formatFunction: decimalFormatFunction
            },
            {
              dataField: 'selesai',
              displayText: 'WO Selesai',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              //formatFunction: decimalFormatFunction
            },
          ]
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
      $('#chart_bar_isds_work_order_by_status_perbulan').jqxChart(settings);
      $('#chart_bar_isds_work_order_by_status_perbulan').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }


    // ----------------------- Work Order Induction Stove Digital Service Perkota ------------------------------
    chart_bar_isds_work_order_perkota();

    function chart_bar_isds_work_order_perkota() {

      var url = 'data_table_isds_wo_perkota.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'kota'
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
          dataField: ['kota'],
          displayText: ['Kota'],
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
            text: 'Jumlah'
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
            displayText: 'Work Order',
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
      $('#chart_bar_isds_work_order_perkota').jqxChart(settings);
      $('#chart_bar_isds_work_order_perkota').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ----------------------- Work Order Induction Stove Digital Service Perprovinsi ------------------------------
    chart_bar_isds_work_order_perprovinsi();

    function chart_bar_isds_work_order_perprovinsi() {

      var url = 'data_table_isds_wo_perprovinsi.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'nama'
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
          dataField: ['nama'],
          displayText: ['Provinsi'],
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
            text: 'Jumlah'
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
            displayText: 'Work Order',
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
      $('#chart_bar_isds_work_order_perprovinsi').jqxChart(settings);
      $('#chart_bar_isds_work_order_perprovinsi').on('click', function(event) {
        if (event.args)
          myEventHandler(event);
      });
    }

    // ----------------------- Work Order Induction Stove Digital Service provinsi DKI Jakarta ------------------------------
    chart_bar_isds_work_order_provinsi_dki_jakarta();

    function chart_bar_isds_work_order_provinsi_dki_jakarta() {

      var url = 'data_table_isds_wo_prov_31.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'kota'
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
          dataField: ['kota'],
          displayText: ['Kota'],
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
            text: 'Jumlah'
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
            displayText: 'Work Order',
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
      $('#chart_bar_isds_work_order_provinsi_dki_jakarta').jqxChart(settings);
      $('#chart_bar_isds_work_order_provinsi_dki_jakarta').on('click', function(event) {
        if (event.args)
          myEventHandler(event);
      });
    }

    // ----------------------- Work Order Induction Stove Digital Service provinsi Jawa Tengah ------------------------------
    chart_bar_isds_work_order_provinsi_jawa_tengah();

    function chart_bar_isds_work_order_provinsi_jawa_tengah() {

      var url = 'data_table_isds_wo_prov_33.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'kota'
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
          dataField: ['kota'],
          displayText: ['kota'],
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
            text: 'Jumlah'
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
            displayText: 'Work Order',
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
      $('#chart_bar_isds_work_order_provinsi_jawa_tengah').jqxChart(settings);
      $('#chart_bar_isds_work_order_provinsi_jawa_tengah').on('click', function(event) {
        if (event.args)
          myEventHandler(event);
      });
    }

    // ----------------------- Work Order Induction Stove Digital Service provinsi Bali ------------------------------
    chart_bar_isds_work_order_provinsi_bali();

    function chart_bar_isds_work_order_provinsi_bali() {

      var url = 'data_table_isds_wo_prov_51.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'kota'
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
          dataField: ['kota'],
          displayText: ['kota'],
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
            text: 'Jumlah'
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
            displayText: 'Work Order',
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
      $('#chart_bar_isds_work_order_provinsi_bali').jqxChart(settings);
      $('#chart_bar_isds_work_order_provinsi_bali').on('click', function(event) {
        if (event.args)
          myEventHandler(event);
      });
    }
  </script>
</body>

</html>