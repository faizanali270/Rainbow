<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
</head>
<body>
	<?php wp_head(); ?> 
<header>
	<div class="header-navbar" style="height:56px;">
        <div class="container-fluid">
            <div class="row m-0">
                <div class="col-lg-9 col-md-12 col-sm-12 p-0 d-flex justify-content-end">
                    <div id="navbar" class="nav-bar">
                        <nav id="site-navigation" class="navigation main-navigation" role="navigation">
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div class="row m-0">
                        <div class="col-6 p-0">
                            <span class="menu-title-res socialicon">
                            	   <a href="<?php the_field('twitter') ?>"><i class="fa fa-twitter-square twitter"></i></a>
			                      <a href="<?php the_field('facebook') ?>"><i class="fa fa-facebook-official facebook"></i></a>
			                      <a href="<?php the_field('instagram') ?>"><i class="fa fa-instagram instagram"></i></a>
                            </span>
                        </div>
                        <div class="col-6 p-0">
                            <div id="menuToggle" class="menuToggle">
                                <input type="checkbox" />
                                <span></span>
                                <span></span>
                                <span></span>
                                <ul id="menu"></ul>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-0 col-sm-12 icon-box ">
                    <div class="row">
                        <div class="col-md-12  icon-box" style="padding-left: 90px;">
                          <div class=" float-left" style="margin-right: 10px;">
                                <ul style="padding: 0; margin:0;">
                                    <li class="tobar-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true"><i class="fa fa-user"></i></a>
                                        <ul class="dropdown-menu">
                                           <?php wp_nav_menu( array( 'theme_location' => 'my-custom-profile', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
                                        </ul>
                                    </li>
                                </ul>
                          </div>
                                <span class="socialicon">
                                   <a href="<?php the_field('twitter') ?>"><i class="fa fa-twitter-square twitter"></i></a>
                                  <a href="<?php the_field('facebook') ?>"><i class="fa fa-facebook-official facebook"></i></a>
                                  <a href="<?php the_field('instagram') ?>"><i class="fa fa-instagram instagram"></i></a>
                            </span>
                          </div>
                    </div>
            	    
                </div>
            </div>
        </div>
    </div>
</header>

