<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Added header and menu to the page
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

    <title>Tables</title>

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
                            Tables
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Tables
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">
                        <h2>Race Participation Report</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Race Name</th>
                                        <th>Total Runners</th>
                                        <th>% Capacity</th>
                                        <th>Revenue</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>St. Pattys 5K</td>
                                        <td>1,265</td>
                                        <td>84.3%</td>
                                        <td>$63,250</td>
                                    </tr>
                                    <tr>
                                        <td>Spring Fest 5K & 10K</td>
                                        <td>861</td>
                                        <td>71.8%</td>
                                        <td>$34,440</td>
                                    </tr>
                                    <tr>
                                        <td>Firework 4th Marathon</td>
                                        <td>665</td>
                                        <td>95.0%</td>
                                        <td>$19,950</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2>Runner Demographics</h2>
                        <div class="table-responsive">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>Age Group</th>
                                        <th>Male</th>
                                        <th>Female</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>18-24</td>
                                        <td>156</td>
                                        <td>189</td>
                                        <td>345</td>
                                    </tr>
                                    <tr>
                                        <td>25-34</td>
                                        <td>423</td>
                                        <td>387</td>
                                        <td>810</td>
                                    </tr>
                                    <tr>
                                        <td>35-44</td>
                                        <td>534</td>
                                        <td>478</td>
                                        <td>1,012</td>
                                    </tr>
                                    <tr>
                                        <td>45-54</td>
                                        <td>312</td>
                                        <td>289</td>
                                        <td>601</td>
                                    </tr>
                                    <tr>
                                        <td>55+</td>
                                        <td>123</td>
                                        <td>98</td>
                                        <td>221</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <h2>Monthly Registration Trends</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Month</th>
                                        <th>New Registrations</th>
                                        <th>Race Entries</th>
                                        <th>Revenue</th>
                                        <th>Avg. Entry Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td>January 2024</td>
                                        <td>245</td>
                                        <td>312</td>
                                        <td>$15,600</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr class="success">
                                        <td>February 2024</td>
                                        <td>312</td>
                                        <td>389</td>
                                        <td>$19,450</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr class="warning">
                                        <td>March 2024</td>
                                        <td>198</td>
                                        <td>245</td>
                                        <td>$12,250</td>
                                        <td>$50</td>
                                    </tr>
                                    <tr class="danger">
                                        <td>April 2024</td>
                                        <td>156</td>
                                        <td>189</td>
                                        <td>$9,450</td>
                                        <td>$50</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

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

</body>

</html>
