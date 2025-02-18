<?php
/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Updated header
 */
?>
<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo site_url('admin/dashboard'); ?>">Marathon Admin</a>
</div>

<!-- Top Menu Items -->
<ul class="nav navbar-right top-nav">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i> 
            <?php echo $this->session->userdata('username'); ?> 
            <b class="caret"></b>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="<?php echo site_url('admin/profile'); ?>">
                    <i class="fa fa-fw fa-user"></i> Profile
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="<?php echo site_url('auth/logout'); ?>">
                    <i class="fa fa-fw fa-power-off"></i> Log Out
                </a>
            </li>
        </ul>
    </li>
</ul>