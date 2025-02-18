<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Wired up the menu
 */
?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav side-nav">
        <li class="<?php echo $this->uri->segment(2) == 'home' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('home'); ?>"><i class="fa fa-fw fa-home"></i> Home</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/dashboard'); ?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'charts' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/charts'); ?>"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'tables' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/tables'); ?>"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'manage_marathons' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/manage_marathons'); ?>"><i class="fa fa-fw fa-wrench"></i> Manage Marathons</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'add_marathon' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/add_marathon'); ?>"><i class="fa fa-fw fa-edit"></i> Add Marathon</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'manage_runners' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/manage_runners'); ?>"><i class="fa fa-fw fa-users"></i> Manage Runners</a>
        </li>
        <li class="<?php echo $this->uri->segment(2) == 'registration_form' ? 'active' : ''; ?>">
            <a href="<?php echo site_url('admin/registration_form'); ?>"><i class="fa fa-fw fa-file"></i> Registration Form</a>
        </li>
    </ul>
</div>
<!-- /.navbar-collapse -->