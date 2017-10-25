

<body> <!--<![endif]-->

    <!-- PRELOADER -->
    <div id="preloader">
        <span class="preloader-dot"></span>
    </div>
    <!-- END / PRELOADER -->

    <!-- PAGE WRAP -->
    <div id="page-wrap">

        <!-- HEADER -->
        <header id="header">

            <!-- HEADER TOP -->
            <div class="header_top">
                <div class="container">
                    <div class="header_left float-left">
                        <span><i class="lotus-icon-cloud"></i> 18 °C</span>
                        <span><i class="lotus-icon-location"></i> 225 Beach Street, Srilanka.</span>
                        <span><i class="lotus-icon-phone"></i>+94-11-000000</span>
                    </div>
                    <div class="header_right float-right">

                        <span class="login-register">
                            <a href="#">Login</a>
                            <a href="#">register</a>
                        </span>


                    </div>
                </div>
            </div>
            <!-- END / HEADER TOP -->

            <!-- HEADER LOGO & MENU -->
            <div class="header_content" id="header_content">

                <div class="container">
                    <!-- HEADER LOGO -->
                    <div class="header_logo">
                        <a href="<?php echo site_url() ?>"><img src="<?php echo site_url() ?>resources/images/logo-header.png" alt=""></a>
                    </div>
                    <!-- END / HEADER LOGO -->

                    <!-- HEADER MENU -->
                    <nav class="header_menu">
                        <ul class="menu">
                            <li class="<?PHP if($active=="home") { ?> current-menu-item <?php } ?>">
                                <a href="<?php echo site_url()?>">Home </a>

                            </li>
                            <li class="<?PHP if($active=="about") { ?> current-menu-item <?php } ?>">
                              <a href="<?php echo site_url('index/about') ?>">About</a></li>

                            <li class="<?php if($active=="room") {?> current-menu-item <?php }?> ">
                                <a href="<?php echo site_url('index/room') ?>">Room </a>

                            </li>
                            <li class="<?php if($active=="restaurant"){?> current-menu-item<?php }?>">
                                <a href="<?php echo site_url('index/restaurant') ?>">Restaurant </a>

                            </li>

                            <li class="<?php if($active=="gallery"){?>current-menu-item<?php } ?>">
                                <a href="<?php echo site_url('index/gallery')?>">Gallery </a>

                            </li>

                            <li class="<?php if($active=="contact"){?>current-menu-item<?php }?>">
                              <a href="<?php echo site_url('index/contact')?>">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- END / HEADER MENU -->

                    <!-- MENU BAR -->
                    <span class="menu-bars">
                        <span></span>
                    </span>
                    <!-- END / MENU BAR -->

                </div>
            </div>
            <!-- END / HEADER LOGO & MENU -->

        </header>
        <!-- END / HEADER -->
