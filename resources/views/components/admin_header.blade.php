
        <!-- Main Header -->
        <header class="main-header">
    
            <!-- Logo -->
        <a href="{{url('admin/dashboard')}}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>PRO</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>PROTECH</b></span>
            </a>
        
            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="{{asset('')}}assets/main/img/avatar.png" class="user-image" alt="User Image">
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{Session::get('admin')['admin_name']}}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                        <img src="{{asset('')}}assets/main/img/avatar.png" class="img-circle" alt="User Image">
        
                        <p>
                            {{Session::get('admin')['admin_name']}}
                        </p>
                        <p>
                            ADMINISTRATOR
                        </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-body">
                            <div class="row">
                              <div class="col-xs-4 text-center">
                                <a href="{{url('admin/editprofile')}}">Profile</a>
                            </div>
                              <div class="col-xs-4 text-center">
                              <a href="{{url('admin/editpassword')}}">Password</a>
                              </div>
                              <div class="col-xs-4 text-center">
                                <a href="/logout">Sign out</a>
                            </div>
                            </div>
                            <!-- /.row -->
                          </li>
                    </ul>
                    </li>
                </ul>
                </div>
            </nav>
            </header>