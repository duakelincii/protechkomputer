<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Home Page</li>
        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Sections</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{url('admin/about-home')}}">About Us Home Page</a></li>
            <li><a href="{{url('admin/carousel')}}">Carousel</a></li>
            <li><a href="{{url('admin/product')}}">Product</a></li>
            <li><a href="{{url('admin/client')}}">Clients</a></li>
            <li><a href="{{url('admin/customer')}}">Customer </a></li>
            </ul>
        </li>
        <!-- Optionally, you can add icons to the links -->
        <li class="header">About Us</li>

        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Sections</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{url('admin/about-us')}}">About Us</a></li>
            <li><a href="{{url('admin/mission')}}">Mission</a></li>
            <li><a href="{{url('admin/vision')}}">Vision</a></li>
            </ul>
        </li>
        <li class="header">Products</li>

        <li class="treeview">
            <a href="#"><i class="fa fa-link"></i> <span>Product Details</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
            <li><a href="{{url('admin/category')}}">Category</a></li>
            <li><a href="{{url('admin/product')}}">Products</a></li>
            </ul>
        </li>
        <li class="header">HEADER</li>

        <li><a href="{{url('admin/contact')}}"><i class="fa fa-comments"></i> <span>CONTACT MESSAGES</span></a></li>

        <li class="header">HEADER</li>

        <li><a href="{{route('keyword')}}"><i class="fa fa-comments"></i> <span>KEYWORDS</span></a></li>

        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
    </aside>