<?php
/**
 * Admin Template View
 * 
 * Change History
 * ----------------------------------------------------------------------------------
 * Date         | Developer      | Description
 * ----------------------------------------------------------------------------------
 * 2024-02-17  | Justin         | Initial creation of template page with standard layout
 * 
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo isset($title) ? $title : 'Admin Panel'; ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=asset_url()?>css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=asset_url()?>css/sb-admin.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=asset_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
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
                            <?php echo isset($page_header) ? $page_header : 'Dashboard'; ?>
                            <?php if(isset($page_subheader)): ?>
                                <small><?php echo $page_subheader; ?></small>
                            <?php endif; ?>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
                            </li>
                            <?php if(isset($breadcrumb)): ?>
                                <li class="active">
                                    <i class="fa <?php echo isset($breadcrumb_icon) ? $breadcrumb_icon : 'fa-file'; ?>"></i> <?php echo $breadcrumb; ?>
                                </li>
                            <?php endif; ?>
                        </ol>
                    </div>
                </div>

                <!-- Main Content Area -->
                <?php if(isset($content)): ?>
                    <?php echo $content; ?>
                <?php else: ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info">
                                No content provided for this page.
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

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

    <!-- Custom JavaScript -->
    <?php if(isset($custom_js)): ?>
        <?php echo $custom_js; ?>
    <?php endif; ?>
</body>
</html> 