<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <title>Home - Electronic Signing Platform</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" /> -->

    <?php wp_head(); ?>


    <!-- favicon -->

</head>
<style>
    .nav-badge {
        width: 100%;
        height: 100%;
        padding-left: 12px;
        padding-right: 12px;
        padding-top: 4px;
        padding-bottom: 4px;
        background: #F2F5FB;
        border-radius: 32px;
        justify-content: center;
        align-items: center;
        gap: 8px;
        display: inline-flex
    }
</style>
<script>
    // Toggle menu
    document.addEventListener('click', function (event) {
        // console.log(event.target);
        if (event.target.id === 'isToggle') {
            toggleMenu()
        }
    });
    function toggleMenu() {
        document.getElementById('isToggle').classList.toggle('open');
        var isOpen = document.getElementById('navigation')
        if (isOpen.style.display === "block") {
            isOpen.style.display = "none";
        } else {
            isOpen.style.display = "block";
        }
    };

    // Clickable Menu
    document.addEventListener('click', function (event) {
        if (document.getElementById("navigation")) {
            var elements = document.getElementById("navigation").getElementsByTagName("a");
            for (var i = 0, len = elements.length; i < len; i++) {
                elements[i].onclick = function (elem) {
                    if (elem.target.getAttribute("href") === "javascript:void(0)") {
                        var submenu = elem.target.nextElementSibling.nextElementSibling;
                        submenu.classList.toggle('open');
                    }
                }
            }
        }
    });

</script>

<body>

    <header id="topnav" class="defaultscroll sticky nav-sticky">
        <div class="container pt-4">
            <!-- Logo container-->
            <a class="logo" href="<?php echo site_url('/'); ?>">
                <span class="logo-light-mode">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-b.png" class="l-dark"
                        height="24" alt="">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/logo-b.png" class="l-light"
                        height="24" alt="">
                </span>
            </a>
            <!-- End Logo container-->

            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <ul class="buy-button list-inline mb-0">

                <li class="list-inline-item mb-0 signin">
                    <a href="https://user.gettonote.com/" target="_blank">
                        <div class="btn btn-outline-light top-btn" style="color: #101828;">Sign In</div>
                    </a>
                </li>
                <li class="list-inline-item ps-1 mb-0">
                    <div class=" d-none d-lg-block">
                        <a href="https://calendly.com/tonote-/tonote-demo" target="_blank">
                            <div class="btn btn-primary top-btn"> Request a demo </div>
                        </a>
                    </div>
                </li>
            </ul><!--end login button-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <?php
                // wp_nav_menu(
                //     array(
                //         'theme_location' => 'top_menu',
                //         'menu' => 'main-menu',
                //         'container' => 'ul',
                //         'menu_class' => 'navigation-menu',
                //         'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                //     )
                // )
                ?>
                <?php
                //Display the navigation menu
                // wp_nav_menu(
                //     array(
                //         'theme_location' => 'primary-menu',
                //         'menu_class' => 'navigation-menu',
                //         'container' => 'ul',
                //         'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                //     )
                // );
                ?>
                <ul class="navigation-menu">
                    <?php //echo get_permalink() ?>
                    <li><a href="<?php echo site_url('/'); ?>"
                            class="sub-menu-item <?php if (is_front_page() ? "active" : "") ?>">Home</a></li>
                    <li class="active"><a href="<?php echo site_url('/about-us'); ?>" class="sub-menu-item active">About
                            Us</a></li>
                    <li class="has-submenu parent-parent-menu-item">
                        <a href="javascript:void(0)">Solution</a><span class="menu-arrow"></span>
                        <ul class="submenu megamenu pt-4">
                            <li>
                                <ul>
                                    <dt class="px-4 py-3 d-none d-lg-block">
                                        <div class="nav-badge">
                                            <div
                                                style="color: #003BB3; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                By Product</div>
                                        </div>
                                    </dt>
                                    <li><a class="sub-menu-item" href="<?php echo site_url('/tosign'); ?>">ToSign</a>
                                    </li>
                                    <li><a class="sub-menu-item" href="<?php echo site_url('/tonotarise'); ?>">
                                            ToNotarise</a></li>
                                    <li><a class="sub-menu-item" href="<?php echo site_url('/get-affidavit'); ?>">Get
                                            Affidavit</a></li>
                                    <li><a class="sub-menu-item"
                                            href="<?php echo site_url('/toverify'); ?>">ToVerify</a>
                                    </li>

                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <dt class="px-4 py-3 d-none d-lg-block">
                                        <div class="nav-badge">
                                            <div class="text-center"
                                                style="color: #003BB3; font-size: 16px; font-family: Poppins; font-weight: 400; line-height: 24px; word-wrap: break-word">
                                                By Industry</div>
                                        </div>
                                    </dt>
                                    <li><a class="sub-menu-item" href="<?php echo site_url('/law-firms'); ?>"> Law
                                            Firms</a></li>

                                    <li><a class="sub-menu-item" href="<?php echo site_url('/real-estate'); ?>">Real
                                            Estate</a></li>
                                    <li><a class="sub-menu-item"
                                            href="<?php echo site_url('/financial-service'); ?>">Financial Services</a>
                                    </li>
                                    <!-- <li><a class="sub-menu-item" href="<?php //echo site_url('/government'); ?>">
                                            Government</a></li> -->
                                    <li><a class="sub-menu-item" href="<?php echo site_url('/human-resource'); ?>">
                                            HR</a></li>
                                </ul>
                            </li>
                            <li style="width: 700px;">
                                <?php include('menu_banner.php') ?>
                            </li>
                        </ul>

                    </li>

                    <li><a href="<?php echo site_url('/pricing'); ?>"
                            class="sub-menu-item <?php if (is_page('pricing') ? 'active' : '') ?>"> Pricing</a></li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Partners</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="<?php echo site_url('/notaries'); ?>" class="sub-menu-item">Notary</a></li>
                            <li><a href="<?php echo site_url('/business-affiliates'); ?>" class="sub-menu-item">Business
                                    Affiliates</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">Explore</a><span
                            class="menu-arrow <?php if (get_post_type() == 'post' ? 'active' : '') ?>"></span>
                        <ul class="submenu">
                            <li><a href="<?php echo site_url('/blog'); ?>" class="sub-menu-item">Blog</a></li>
                            <li><a href="<?php echo site_url('/faq'); ?>" class="sub-menu-item">Faq</a></li>
                            <li><a href="<?php echo site_url('/contact-us'); ?>" class="sub-menu-item">Contact Us</a>
                            </li>
                            <li><a href="<?php echo site_url('/resources'); ?>" class="sub-menu-item">Resources</a></li>
                            <li><a href="<?php echo site_url('/customer-stories'); ?>" class="sub-menu-item">Customer
                                    stories</a></li>
                            <li><a href="<?php echo site_url('/media-events'); ?>" class="sub-menu-item">Media &
                                    Events</a></li>
                        </ul>
                    </li>

                </ul>

                <!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header>