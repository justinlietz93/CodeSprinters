<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Created add runner page
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Runner</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=asset_url()?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=asset_url()?>css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=asset_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                            Add New Runner
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
                            </li>
                            <li>
                                <i class="fa fa-users"></i> <a href="<?php echo site_url('admin/manage_runners'); ?>">Manage Runners</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user-plus"></i> Add Runner
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="<?php echo site_url('admin/save_runner'); ?>">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="name" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="phone" required>
                            </div>

                            <div class="form-group">
                                <label>Date of Birth</label>
                                <input type="date" class="form-control" name="dob" required>
                            </div>

                            <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                    <option value="O">Other</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Emergency Contact Name</label>
                                <input class="form-control" name="emergency_contact" required>
                            </div>

                            <div class="form-group">
                                <label>Emergency Contact Phone</label>
                                <input type="tel" class="form-control" name="emergency_phone" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Add Runner</button>
                            <a href="<?php echo site_url('admin/manage_runners'); ?>" class="btn btn-default">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?=asset_url()?>js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=asset_url()?>js/bootstrap.min.js"></script>
</body>
</html> 