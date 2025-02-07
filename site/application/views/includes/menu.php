<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'charts' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/charts'); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li
            <?php
            if(isset($manage_marathons)){
                echo " class='active'";
            }
            ?>
        >
            <a href="/site/admin/manage_marathons"><i class="fa fa-fw fa-wrench"></i> Manage Marathons</a>
        </li>
        <li
            <?php
            if(isset($add_marathon)){
                echo " class='active'";
            }
            ?>
        >
            <a href="/site/admin/add_marathon"><i class="fa fa-fw fa-edit"></i> Add Marathon</a>
        </li>
        <li
            <?php
            if(isset($manage_runners)){
                echo " class='active'";
            }
            ?>
        >
            <a href="/site/admin/manage_runners"><i class="fa fa-fw fa-wrench"></i> Manage Runners</a>
        </li>
        <li
            <?php
            if(isset($registration_form)){
                echo " class='active'";
            }
            ?>
        >
            <a href="/site/admin/registration_form"><i class="fa fa-fw fa-file"></i> Registration Form</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->