<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Wired up the registration form page
 */
?>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Runner Registration Form</title>

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
                            Runner Registration Form
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i> <a href="<?php echo site_url('admin/dashboard'); ?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Registration Form
                            </li>
                        </ol>
                    </div>
                </div>

                <!-- PDF Printable Version -->
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-lg-12 text-right">
                        <a href="<?php echo asset_url(); ?>pdfs/Registration Signup Form Template.pdf" class="btn btn-info" target="_blank">
                            <i class="fa fa-print"></i> Print PDF Version
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-edit"></i> Runner Information</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form" method="post" action="<?php echo site_url('admin/submit_registration'); ?>">
                                    <!-- Personal Information -->
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4>Personal Information</h4>
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input class="form-control" name="name" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input type="date" class="form-control" name="dob" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <select class="form-control" name="gender" required>
                                                    <option value="">Select Gender</option>
                                                    <option value="M">Male</option>
                                                    <option value="F">Female</option>
                                                    <option value="O">Other</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Phone</label>
                                                <input type="tel" class="form-control" name="phone" required>
                                            </div>
                                        </div>
                                        
                                        <!-- Emergency Contact -->
                                        <div class="col-lg-6">
                                            <h4>Emergency Contact</h4>
                                            <div class="form-group">
                                                <label>Emergency Contact Name</label>
                                                <input class="form-control" name="emergency_contact" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Emergency Contact Phone</label>
                                                <input type="tel" class="form-control" name="emergency_phone" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Relationship to Runner</label>
                                                <input class="form-control" name="emergency_relation" required>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Medical Information -->
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-lg-12">
                                            <h4>Medical Information</h4>
                                            <div class="form-group">
                                                <label>Do you have any medical conditions we should be aware of?</label>
                                                <textarea class="form-control" name="medical_conditions" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Are you currently taking any medications?</label>
                                                <textarea class="form-control" name="medications" rows="3"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Blood Type (if known)</label>
                                                <select class="form-control" name="blood_type">
                                                    <option value="">Select Blood Type</option>
                                                    <option value="A+">A+</option>
                                                    <option value="A-">A-</option>
                                                    <option value="B+">B+</option>
                                                    <option value="B-">B-</option>
                                                    <option value="O+">O+</option>
                                                    <option value="O-">O-</option>
                                                    <option value="AB+">AB+</option>
                                                    <option value="AB-">AB-</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Running Experience -->
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-lg-12">
                                            <h4>Running Experience</h4>
                                            <div class="form-group">
                                                <label>Previous Race Experience</label>
                                                <textarea class="form-control" name="race_experience" rows="3" 
                                                    placeholder="Please list any previous races you have participated in, including dates and completion times"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Expected Pace (minutes per mile)</label>
                                                <input type="number" step="0.1" class="form-control" name="expected_pace">
                                            </div>
                                            <div class="form-group">
                                                <label>T-Shirt Size</label>
                                                <select class="form-control" name="tshirt_size" required>
                                                    <option value="">Select Size</option>
                                                    <option value="XS">Extra Small</option>
                                                    <option value="S">Small</option>
                                                    <option value="M">Medium</option>
                                                    <option value="L">Large</option>
                                                    <option value="XL">Extra Large</option>
                                                    <option value="XXL">Double XL</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Waiver -->
                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-lg-12">
                                            <h4>Waiver Agreement</h4>
                                            <div class="well" style="max-height: 200px; overflow-y: scroll;">
                                                <p>By registering for this event, I acknowledge that running is a potentially hazardous activity...</p>
                                                <!-- Add full waiver text here -->
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="waiver_agreed" required>
                                                    I have read and agree to the waiver
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row" style="margin-top: 20px;">
                                        <div class="col-lg-12">
                                            <button type="submit" class="btn btn-primary">Submit Registration</button>
                                            <button type="reset" class="btn btn-default">Reset Form</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
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

    <!-- Form validation -->
    <script>
    $(document).ready(function() {
        $('form').on('submit', function(e) {
            if (!$('input[name="waiver_agreed"]').is(':checked')) {
                alert('You must agree to the waiver to continue');
                e.preventDefault();
            }
        });
    });
    </script>

</body>

</html>
