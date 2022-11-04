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

      <section class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Trend Work Order (Perbulan)" style="width:100%;height:350px;">
            <div id='chart_bar_work_order_perbulan' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Akumulasi Trend Work Order" style="width:100%;height:350px;">
            <div id='chart_bar_akumulasi_work_order' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="WO by Status" style="width:100%;height:350px;">
            <div id='chart_bar_wo_by_status' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-4 col-xs-4">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Status Pelanggan" style="width:100%;height:350px;">
            <div id='chart_bar_status_pelanggan' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>


      <section class="col-lg-8 col-xs-8">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Jenis Pekerjaan" style="width:100%;height:350px;">
            <div id='chart_bar_jenis_pekerjaan' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-6 col-xs-6">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Trend Gagal Perbulan" style="width:100%;height:350px;">
            <div id='chart_bar_gagal_perbulan' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-6 col-xs-6">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Akumulasi Trend Gagal" style="width:100%;height:350px;">
            <div id='chart_bar_akumulasi_trend_gagal' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- ROW SLA -->
    <div class="row">
      <section class="col-lg-6 col-xs-6">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Response Time" style="width:100%;height:350px;">
            <div id='chart_bar_rata2_rst' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-6 col-xs-6">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Recovery Time" style="width:100%;height:350px;">
            <div id='chart_bar_rata2_rt' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
          </div>
        </div>
      </section>

      <section class="col-lg-12 col-xs-12">
        <div class="box box-info">
          <div id="p1" class="mini-panel" title="Waktu Tunggu" style="width:100%;height:350px;">
            <div id='chart_bar_rata2_wt' style="width: 100%; height: 100%; font-size: 8px;">

            </div>
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

    // ----------------------- WO By Status ------------------------------
    chart_bar_wo_by_status();

    function chart_bar_wo_by_status() {

      var url = 'data_table_wo_by_status.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'keterangan'
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
          dataField: ['keterangan'],
          displayText: ['Keterangan WO'],
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
            text: 'Jumlah Pelanggan'
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
      $('#chart_bar_wo_by_status').jqxChart(settings);
      $('#chart_bar_wo_by_status').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ----------------------- Rata-rata Response Time ------------------------------
    chart_bar_rata2_rst();

    function chart_bar_rata2_rst() {

      var url = 'data_table_response_time.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'rata2'
          },
          {
            name: 'max'
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
            text: 'Jumlah Rata-Rata'
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
              dataField: 'rata2',
              displayText: 'Rata-Rata Response',
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
              dataField: 'max',
              displayText: 'maksimum Response',
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
      $('#chart_bar_rata2_rst').jqxChart(settings);
      $('#chart_bar_rata2_rst').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ---------------------------- Status Pelanggan --------------------------
    chart_bar_status_pelanggan();

    function chart_bar_status_pelanggan() {

      var url = 'data_table_status_pelanggan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'status_idpel'
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
          dataField: ['status_idpel'],
          displayText: ['Status ID Pelanggan'],
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
            text: 'Total Pelanggan'
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
            displayText: 'Daftar Status ID Pelanggan',
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
      $('#chart_bar_status_pelanggan').jqxChart(settings);
      $('#chart_bar_status_pelanggan').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }


    // ----------------------- Rata-rata Recovery Time ------------------------------
    chart_bar_rata2_rt();

    function chart_bar_rata2_rt() {

      var url = 'data_table_recovery_time.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'rata2'
          },
          {
            name: 'max'
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
            text: 'Jumlah Rata-Rata'
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
              dataField: 'rata2',
              displayText: 'Rata-rata Recovery Time',
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
              dataField: 'max',
              displayText: 'Maksimum Recovery Time',
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
      $('#chart_bar_rata2_rt').jqxChart(settings);
      $('#chart_bar_rata2_rt').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ----------------------- Rata-rata Waktu Tunggu ------------------------------
    chart_bar_rata2_wt();

    function chart_bar_rata2_wt() {

      var url = 'data_table_waktu_tunggu.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'rata2'
          },
          {
            name: 'max'
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
            text: 'Jumlah Rata-Rata'
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
              dataField: 'rata2',
              displayText: 'Rata-rata Waktu Tunggu',
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
              dataField: 'max',
              displayText: 'Maksimum Waktu Tunggu',
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
      $('#chart_bar_rata2_wt').jqxChart(settings);
      $('#chart_bar_rata2_wt').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }


    // ----------------------- jumlah pelanggan berdasarkan jenis pekerjaan ------------------------------
    chart_bar_jenis_pekerjaan();

    function chart_bar_jenis_pekerjaan() {

      var url = 'data_table_jenis_pekerjaan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'jenis_pekerjaan'
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
          dataField: ['jenis_pekerjaan'],
          displayText: ['Jenis Pekerjaan'],
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
            text: 'Jumlah Pelanggan'
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
            displayText: 'Daftar Jenis Pekerjaan',
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
      $('#chart_bar_jenis_pekerjaan').jqxChart(settings);
      $('#chart_bar_jenis_pekerjaan').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ----------------------- Trend Gagal Perbulan ------------------------------
    chart_bar_gagal_perbulan();

    function chart_bar_gagal_perbulan() {

      var url = 'data_table_gagal_perbulan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'status'
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
            // formatFunction: function(value) {
            //   return months[value - 1]; //value.toString(); //months[value-1];
            // }
          },
          tickMarks: {
            visible: true,
            // interval: 1
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
            text: 'Jumlah Pelanggan'
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
            displayText: 'Daftar Trend Gagal',
            labels: {
              visible: true,
              verticalAlignment: 'top',
              offset: {
                x: 0,
                y: -20
              }
            },
            // formatFunction: decimalFormatFunction
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
      $('#chart_bar_gagal_perbulan').jqxChart(settings);
      $('#chart_bar_gagal_perbulan').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ----------------------- Trend Work Order (Bulanan) ------------------------------
    chart_bar_work_order_perbulan();

    function chart_bar_work_order_perbulan() {

      var url = 'data_table_work_order_perbulan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'appointment'
          },
          {
            name: 'pb_or_pd'
          },
          {
            name: 'instalasi'
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
            // formatFunction: function(value) {
            //   return months[value - 1]; //value.toString(); //months[value-1];
            // }
          },
          tickMarks: {
            visible: true,
            // interval: 1
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
            text: 'Jumlah Pelanggan'
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
              dataField: 'appointment',
              displayText: 'Appointment',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
            },
            {
              dataField: 'pb_or_pd',
              displayText: 'PB/PD',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
            },
            {
              dataField: 'instalasi',
              displayText: 'Instalasi',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
            },
            {
              dataField: 'selesai',
              displayText: 'Selesai',
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
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
      $('#chart_bar_work_order_perbulan').jqxChart(settings);
      $('#chart_bar_work_order_perbulan').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }

    // ----------------------- Akumulasi Trend Gagal ------------------------------
    chart_bar_akumulasi_trend_gagal();

    function chart_bar_akumulasi_trend_gagal() {

      var url = 'data_table_gagal_perbulan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'akumulasi'
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
          left: 10,
          top: 5,
          right: 10,
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
            // formatFunction: function(value) {
            //   return months[value - 1]; //value.toString(); //months[value-1];
            // }
            // rotationPoint: 'topright',
            // offset: {
            //   x: 0,
            //   y: -15
            // },
          },
          tickMarks: {
            visible: true,
            // interval: 1
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
            text: 'Jumlah Pelanggan'
          },
          //labels: { horizontalAlignment: 'right' }
          flip: false,
          axisSize: 'auto',
          tickMarksColor: '#888888'
        },

        colorScheme: 'scheme01',
        columnSeriesOverlap: false,
        seriesGroups: [{
          type: 'area',
          series: [{
            dataField: 'akumulasi',
            displayText: 'Trend Gagal',
            labels: {
              visible: true,
              verticalAlignment: 'top',
              offset: {
                x: 0,
                y: -20
              }
            },
            // formatFunction: decimalFormatFunction
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
      $('#chart_bar_akumulasi_trend_gagal').jqxChart(settings);
      $('#chart_bar_akumulasi_trend_gagal').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }


    // ----------------------- Akumulasi Work Order ------------------------------
    chart_bar_akumulasi_work_order();

    function chart_bar_akumulasi_work_order() {

      var url = 'data_table_work_order_perbulan.php';
      var source = {
        datatype: "json",
        datafields: [{
            name: 'bulan'
          },
          {
            name: 'ak_appointment'
          },
          {
            name: 'ak_pbpd'
          },
          {
            name: 'ak_instalasi'
          },
          {
            name: 'ak_selesai'
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
          left: 10,
          top: 5,
          right: 10,
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
            // formatFunction: function(value) {
            //   return months[value - 1]; //value.toString(); //months[value-1];
            // }
            // rotationPoint: 'topright',
            // offset: {
            //   x: 0,
            //   y: -15
            // },
          },
          tickMarks: {
            visible: true,
            // interval: 1
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
            text: 'Jumlah Pelanggan'
          },
          //labels: { horizontalAlignment: 'right' }
          flip: false,
          axisSize: 'auto',
          tickMarksColor: '#888888'
        },

        colorScheme: 'scheme01',
        columnSeriesOverlap: false,
        seriesGroups: [{
          type: 'area',
          series: [{
              dataField: 'ak_appointment',
              displayText: 'appointment',
              opacity: 0.8,
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
            },
            {
              dataField: 'ak_pbpd',
              displayText: 'PB/PD',
              opacity: 0.6,
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
            },
            {
              dataField: 'ak_instalasi',
              displayText: 'Instalasi',
              opacity: 0.4,
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
            },
            {
              dataField: 'ak_selesai',
              displayText: 'Selesai',
              opacity: 0.2,
              labels: {
                visible: true,
                verticalAlignment: 'top',
                offset: {
                  x: 0,
                  y: -20
                }
              },
              // formatFunction: decimalFormatFunction
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
      $('#chart_bar_akumulasi_work_order').jqxChart(settings);
      $('#chart_bar_akumulasi_work_order').on('click', function(event) {
        if (event.args)
          myEventHandler(event);

      });
    }
  </script>
</body>

</html>