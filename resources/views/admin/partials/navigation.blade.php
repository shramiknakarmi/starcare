<div id="wrapper">
    <!-- Navigation -->
    <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/dashboard')}}">STAR CARE</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{url('/')}}" target="_blank"><i class="fa fa-globe fa-fw"></i> Visit Website</a>
            </li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="dropdown-menu-header text-center">
                        <strong>Admin</strong>
                    </li>
                    <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="{{url('/dashboard')}}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-picture-o nav_icon"></i>Slider<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('slider')}}"><i class="fa fa-plus nav_icon"></i>Create Slider</a>
                            </li>
                            <li>
                                <a href="grids.html"><i class="fa fa-table nav_icon"></i>Manage Slider</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-indent nav_icon"></i>Menu<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('menu')}}"><i class="fa fa-plus nav_icon"></i>Create Menu</a>
                            </li>
                            <li>
                                <a href="typography.html"><i class="fa fa-table nav_icon"></i>Manage Header-Menu</a>
                            </li>
                            <li>
                                <a href="typography.html"><i class="fa fa-table nav_icon"></i>Manage Footer-Menu</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-files-o  nav_icon"></i>Pages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('pages')}}"><i class="fa fa-plus nav_icon"></i>Create Page</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table nav_icon"></i>Manage Pages</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-shield nav_icon"></i>Services<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{url('services')}}"><i class="fa fa-plus fa-fw"></i>&nbsp;Create Service</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i>&nbsp;Manage Services</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope nav_icon"></i>Messages</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

</div>
<!-- /#wrapper -->