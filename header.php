<?php include_once('middleware.php'); ?>

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
    <!-- ============================================================== -->
    <!-- Topbar header - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="display_data.php">
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo.png" alt="homepage" class="dark-logo" />
                        </b>
                        <!--End Logo icon -->
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
                    data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                    <!-- create new -->
                    <!-- ============================================================== -->
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-right">
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="ml-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">
                                    <?= $_SESSION['sessionname'] ?>
                                </span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- ============================================================== -->
    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <!-- ============================================================== -->
    <aside class="left-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="nav-small-cap"><span class="hide-menu">Item</span></li>
                    <li class="sidebar-item">
                        <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                                data-feather="file-text" class="feather-icon">
                            </i><span class="hide-menu">Forms </span>
                        </a>
                        <ul aria-expanded="false" class="collapse  first-level base-level-line">
                            <li class="sidebar-item">
                                <a href="display_data.php" class="sidebar-link"><span class="hide-menu">List
                                        Aduan</span></a>
                            </li>
                        </ul>
                        <?php if (hasRole('SuperAdmin') === 'TRUE') { ?>
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                                    data-feather="user" class="feather-icon">
                                </i><span class="hide-menu">User Management</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="roles.php" class="sidebar-link"><span class="hide-menu">Roles</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="permission.php" class="sidebar-link"><span
                                            class="hide-menu">Permission</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="roles_perm.php" class="sidebar-link"><span
                                            class="hide-menu">Roles/Permission</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="user.php" class="sidebar-link"><span class="hide-menu">User Role</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="user_list.php" class="sidebar-link"><span class="hide-menu">User
                                            List</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="service.php" class="sidebar-link"><span class="hide-menu">Service
                                            List</span></a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="service_role.php" class="sidebar-link"><span class="hide-menu">Service/Role
                                            List</span></a>
                                </li>
                            </ul>
                            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false"><i
                                    data-feather="file-text" class="feather-icon">
                                </i><span class="hide-menu">Report</span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item">
                                    <a href="report_trail.php" class="sidebar-link"><span class="hide-menu">Report
                                            Trail</span></a>
                                </li>
                            </ul>
                        <?php } ?>
                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="logout.php"
                            aria-expanded="false"><i data-feather="log-out" class="feather-icon"></i><span
                                class="hide-menu">Logout</span></a></li>
                </ul>
            </nav>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>