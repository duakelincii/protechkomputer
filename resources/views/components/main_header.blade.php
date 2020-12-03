<div class="header-container">
    <header class="header fixed clearfix">
        <div class="container"> 
            <!--Site Logo-->
            <div class="logo"> <a href="/"> <img alt="Nexus" src="{{asset('')}}assets/main/img/logo.png" data-logo-height="35"> </a> </div>
            <!--End Site Logo-->
        
            <div class="navbar-collapse nav-main-collapse collapse"> 
            <!--Main Menu-->
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main" id="mainMenu">
                    <li class="{{Request::is('/') ? 'active':''}}"> <a href="/">Home </a></li>
                    <li class="{{Request::is('about') ? 'active':''}}"> <a href="/about">About </a></li>
                    <li class="{{Request::is('product') ? 'active':''}}"> <a href="/product">Product </a></li>
                    <li class="{{Request::is('contact') ? 'active':''}}"> <a href="/contact">Contact Us </a> </li>
                </ul>
            </nav>
            <!--End Main Menu--> 
            </div>
            <button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse"> <i class="fa fa-bars"></i> </button>
        </div>
            <span class="v-header-shadow"></span> 
    </header>
</div>