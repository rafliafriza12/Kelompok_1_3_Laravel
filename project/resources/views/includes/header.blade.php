<!-- Navigation Bar-->
<header id="topnav">
    <div class="topbar-main">
        <div class="container">

            <!-- LOGO -->
            <div class="topbar-left">
                <a href="dashboard.php" class="logo">

                    <span>Student Study Center Management System</span>
                </a>
            </div>
            <!-- End Logo container-->


            <div class="menu-extras navbar-topbar">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </li>



                    <li class="list-inline-item dropdown notification-list">
                        <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{asset(url('assets/images/users/avatar-1.jpg'))}}" alt="user" class="rounded-circle">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                            <!-- item--> 
                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow"><small>Welcome ! {{'admin'}}</small> </h5>
                            </div>

                            <!-- item-->
                            <a href="profile.php" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                            </a>

                            <!-- item-->
                            <a href="change-password.php" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                            </a>

                            <a href="/logout" class="dropdown-item notify-item">
                                <i class="zmdi zmdi-power"></i> <span>Logout</span>
                            </a>

                        </div>
                    </li>

                </ul>

            </div> <!-- end menu-extras -->
            <div class="clearfix"></div>

        </div> <!-- end container -->
    </div>
    <!-- end topbar-main -->


    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
                    <li>
                        <a href="/admin/dashboard"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard </span> </a>
                    </li>

                    <!---Desks---->
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i> <span> Desks </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="/admin/add-desk">Add </a></li>
                                    <li><a href="/admin/manage">Manage </a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>

                    <!---Students---->
                    <li class="has-submenu">
                        <a href="#"><i class="zmdi zmdi-collection-text"></i> <span> Students </span> </a>
                        <ul class="submenu megamenu">
                            <li>
                                <ul>
                                    <li><a href="#">Add </a></li>
                                    <li><a href="/admin/manage-student">Manage </a></li>
                                </ul>
                            </li>

                        </ul>
                    </li>
                    <li> <a href="#"><i class="zmdi zmdi-collection-text"></i> Assigned / Unassigned Desk
                        </a></li>

                    <li> <a href="/admin/report"><i class="zmdi zmdi-collection-text"></i> Report </a></li>





                </ul>
                <!-- End navigation menu  -->
            </div>
        </div>
    </div>
</header>
<!-- End Navigation Bar-->
