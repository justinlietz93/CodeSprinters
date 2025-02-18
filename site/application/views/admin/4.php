<?php
/**
 * Admin Charts View
 * 
 * Change History
 * ----------------------------------------------------------------------------------
 * Date         | Developer      | Description
 * ----------------------------------------------------------------------------------
 * 2024-02-17  | Justin         | Initial creation of charts page
 * 2024-02-17  | Justin         | Added registration and revenue trend charts
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Charts</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=asset_url()?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=asset_url()?>css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=asset_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php
            $this->load->view('includes/header');
            $this->load->view('includes/menu');
            ?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Charts <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-bar-chart-o"></i> Charts
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- Registration Trends Chart -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-line-chart fa-fw"></i> Registration & Revenue Trends</h3>
                            </div>
                            <div class="panel-body">
                                <div id="flot-line-chart" style="width:100%; height:400px; border:1px solid #ccc;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Demographics and Race Stats -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-pie-chart fa-fw"></i> Runner Demographics</h3>
                            </div>
                            <div class="panel-body">
                                <div id="flot-pie-chart" style="width:100%; height:400px; border:1px solid #ccc;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-bar-chart fa-fw"></i> Race Participation</h3>
                            </div>
                            <div class="panel-body">
                                <div id="flot-multiple-axes-chart" style="width:100%; height:400px; border:1px solid #ccc;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?=asset_url()?>js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=asset_url()?>js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=asset_url()?>js/plugins/morris/raphael.min.js"></script>
    <script src="<?=asset_url()?>js/plugins/morris/morris.min.js"></script>

    <!-- Flot Charts JavaScript -->
    <script src="<?=asset_url()?>js/plugins/flot/excanvas.min.js"></script>
    <script src="<?=asset_url()?>js/plugins/flot/jquery.flot.js"></script>
    <script src="<?=asset_url()?>js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?=asset_url()?>js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=asset_url()?>js/plugins/flot/jquery.flot.time.js"></script>
    <script src="<?=asset_url()?>js/plugins/flot/jquery.flot.tooltip.min.js"></script>

    <!-- Custom Flot Charts -->
    <script>
    // Monthly Registration and Revenue Chart
    $(document).ready(function() {
        // Monthly Registration Data
        var registrations = [
            [new Date('2024-01-01').getTime(), 245],
            [new Date('2024-02-01').getTime(), 312],
            [new Date('2024-03-01').getTime(), 198],
            [new Date('2024-04-01').getTime(), 156]
        ];

        var revenue = [
            [new Date('2024-01-01').getTime(), 15600],
            [new Date('2024-02-01').getTime(), 19450],
            [new Date('2024-03-01').getTime(), 12250],
            [new Date('2024-04-01').getTime(), 9450]
        ];

        var options = {
            series: {
                lines: { show: true },
                points: { show: true }
            },
            grid: {
                hoverable: true
            },
            xaxis: {
                mode: "time",
                timeformat: "%b %Y"
            },
            yaxes: [
                { min: 0 },
                {
                    min: 0,
                    position: "right",
                    tickFormatter: function(v) {
                        return "$" + v;
                    }
                }
            ],
            tooltip: true,
            tooltipOpts: {
                content: "%s: %y",
                xDateFormat: "%b %Y"
            }
        };

        $.plot($("#flot-line-chart"), [
            { 
                data: registrations,
                label: "Registrations",
                yaxis: 1
            },
            { 
                data: revenue,
                label: "Revenue",
                yaxis: 2
            }
        ], options);

        // Runner Demographics Pie Chart
        var pieData = [
            { label: "18-24", data: 345 },
            { label: "25-34", data: 810 },
            { label: "35-44", data: 1012 },
            { label: "45-54", data: 601 },
            { label: "55+", data: 221 }
        ];

        var pieOptions = {
            series: {
                pie: {
                    show: true,
                    radius: 1,
                    label: {
                        show: true,
                        radius: 2/3,
                        formatter: function(label, series) {
                            return '<div style="font-size:8pt;text-align:center;padding:2px;color:white;">'
                                + label + '<br/>' + Math.round(series.percent) + '%</div>';
                        },
                        threshold: 0.1
                    }
                }
            },
            grid: {
                hoverable: true
            },
            tooltip: true,
            tooltipOpts: {
                content: "%p.0% (%s)",
                shifts: {
                    x: 20,
                    y: 0
                }
            }
        };

        $.plot("#flot-pie-chart", pieData, pieOptions);

        // Race Participation Bar Chart
        var barData = [
            {
                label: "Spring Marathon",
                data: [[1, 1265]],
                bars: { show: true }
            },
            {
                label: "Summer Half",
                data: [[2, 861]],
                bars: { show: true }
            },
            {
                label: "Winter 10K",
                data: [[3, 665]],
                bars: { show: true }
            }
        ];

        var barOptions = {
            grid: {
                hoverable: true,
                borderWidth: 1
            },
            bars: {
                align: "center",
                barWidth: 0.5
            },
            xaxis: {
                ticks: [[1, "Spring"], [2, "Summer"], [3, "Winter"]]
            },
            tooltip: true,
            tooltipOpts: {
                content: "%s: %y runners"
            }
        };

        $.plot("#flot-multiple-axes-chart", barData, barOptions);
    });
    </script>

</body>

</html>
