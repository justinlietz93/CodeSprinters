<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Manage Marathons</title>

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

                <div id="page-wrapper">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-lg-6">
                                <h2>Manage Marathons</h2>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                        <tr>
                                            <th>Marathon Name</th>
                                            <th>Location</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            foreach ($races as $race){
                                                $name = $race['raceName'];
                                                $location = $race['raceLocation'];
                                                $date = $race['raceDateTime'];
                                                $id = $race['raceID'];

                                                echo "<tr><td>$name</td><td>$location</td><td>$date</td><td> <a href='/site/admin/update_race/" . $id . "'> Edit</a> | <a href='/site/admin/delete_race/" . $id . "'> Delete</a></td></tr>";
                                            }

                                            ?>

                                        </tbody>
                                    </table>
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
