<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Created profile page
 */
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Profile</title>

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
                            Admin Profile
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-user"></i> Profile
                            </li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Profile Picture</h3>
                            </div>
                            <div class="panel-body text-center">
                                <img src="<?php echo $user['profile_pic'] ? base_url('uploads/profile/'.$user['profile_pic']) : asset_url().'img/runner_img.png'; ?>" 
                                     class="img-circle profile-img" 
                                     style="width: 150px; height: 150px; object-fit: cover; margin-bottom: 15px;">
                                
                                <form action="<?php echo site_url('admin/upload_profile_pic'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" name="profile_pic" class="form-control" accept="image/*" style="display: none;" id="profile_pic_input">
                                        <button type="button" class="btn btn-default btn-block" onclick="document.getElementById('profile_pic_input').click();">
                                            <i class="fa fa-camera"></i> Choose Photo
                                        </button>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block" id="upload_btn" style="display: none;">
                                        <i class="fa fa-upload"></i> Upload Photo
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <form role="form" method="post" action="<?php echo site_url('admin/update_profile'); ?>">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="username" value="<?php echo $this->session->userdata('username'); ?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Full Name</label>
                                <input class="form-control" name="name" value="<?php echo isset($user['name']) ? $user['name'] : ''; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Phone</label>
                                <input type="tel" class="form-control" name="phone" value="<?php echo isset($user['phone']) ? $user['phone'] : ''; ?>">
                            </div>

                            <button type="submit" class="btn btn-primary">Update Profile</button>
                            <a href="<?php echo site_url('admin/dashboard'); ?>" class="btn btn-default">Cancel</a>
                        </form>

                        <hr>

                        <h3>Change Password</h3>
                        <form role="form" method="post" action="<?php echo site_url('admin/change_password'); ?>">
                            <div class="form-group">
                                <label>Current Password</label>
                                <input type="password" class="form-control" name="current_password" required>
                            </div>

                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" name="new_password" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input type="password" class="form-control" name="confirm_password" required>
                            </div>

                            <button type="submit" class="btn btn-warning">Change Password</button>
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