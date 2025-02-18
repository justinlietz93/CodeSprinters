<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Wired up the manage runners page
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

    <title>Manage Runners</title>

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

    <style>
    .sortable {
        cursor: pointer;
    }
    .sortable:hover {
        background-color: #f5f5f5;
    }
    .sort-asc .fa-sort:before {
        content: "\f0de"; /* fa-sort-asc */
    }
    .sort-desc .fa-sort:before {
        content: "\f0dd"; /* fa-sort-desc */
    }
    </style>

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

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Manage Runners
                        </h1>
                        
                        <!-- Add search bar -->
                        <div class="row" style="margin-bottom: 20px;">
                            <div class="col-lg-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="searchInput" placeholder="Search runners...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="runnersTable">
                                <thead>
                                    <tr>
                                        <th class="sortable" data-sort="name">Name <i class="fa fa-sort"></i></th>
                                        <th class="sortable" data-sort="email">Email <i class="fa fa-sort"></i></th>
                                        <th class="sortable" data-sort="phone">Phone <i class="fa fa-sort"></i></th>
                                        <th class="sortable" data-sort="date">Registration Date <i class="fa fa-sort"></i></th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($runners) && is_array($runners)): ?>
                                        <?php foreach($runners as $runner): ?>
                                            <tr>
                                                <td><?php echo $runner['name']; ?></td>
                                                <td><?php echo $runner['email']; ?></td>
                                                <td><?php echo $runner['phone']; ?></td>
                                                <td><?php echo $runner['registrationDate']; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('admin/edit_runner/'.$runner['runnerID']); ?>" class="btn btn-primary btn-sm">Edit</a>
                                                    <a href="<?php echo site_url('admin/delete_runner/'.$runner['runnerID']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <tr>
                                            <td colspan="5">No runners found</td>
                                        </tr>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <a href="<?php echo site_url('admin/add_runner'); ?>" class="btn btn-success">Add New Runner</a>
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

    <script>
    $(document).ready(function(){
        // Search functionality
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#runnersTable tbody tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });

        // Sorting functionality
        $(".sortable").click(function() {
            var table = $(this).parents('table').eq(0);
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()));
            this.asc = !this.asc;
            if (!this.asc) {
                rows = rows.reverse();
            }
            
            // Update sort icons
            table.find('th').removeClass('sort-asc sort-desc');
            $(this).addClass(this.asc ? 'sort-asc' : 'sort-desc');
            
            for (var i = 0; i < rows.length; i++) {
                table.append(rows[i]);
            }
        });

        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index);
                if (isDate(valA) && isDate(valB)) {
                    return new Date(valA) - new Date(valB);
                }
                return valA.toString().localeCompare(valB);
            };
        }

        function getCellValue(row, index) {
            return $(row).children('td').eq(index).text();
        }

        function isDate(value) {
            return !isNaN(Date.parse(value));
        }
    });
    </script>

</body>

</html>
