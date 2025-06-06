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

    <title>SB Admin - Bootstrap Admin Template</title>

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
                            Bootstrap Grid
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="home.php">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-wrench"></i> Bootstrap Grid
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-12
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-6
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-6
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-4
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-4
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-4
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-2
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-1
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-8
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-4
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-6
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 text-center">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                .col-lg-3
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

</body>

</html>
