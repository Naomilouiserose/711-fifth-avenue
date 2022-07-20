<?php

/**
 * Theme header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *
 */
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, viewport-fit=cover">
    <meta charset="<?php bloginfo('charset'); ?>" />

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>


    <div id="page" class="site">

      <section class="sticky-header">
        <div class="container">
            <h1>711 Fifth Avenue</h1>

          <aside class="sticky-menu-mobile">
            <div id="mobileNav" class="overlay">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <div class="overlay-content">
                <li class="main-nav-items menuLink">
                    <?php wp_nav_menu(array(
                        'menu'       => 'Main Nav',
                        'menu_class' => 'main-nav-item',
                        'container'  => '',
                        'items_wrap' => '<ul id="%1$s" class="%2$s mobile-menu-item" role="menu" >%3$s</ul>',
                    ));?>
                </li>
              </div>
            </div>

            <span class="hamburger" onclick="openNav()"><i class="fa fa-bars"></i></span>
          </aside>

          <aside class="sticky-menu-desktop">
            <nav class="navbar-sticky">
              <li class="sticky-nav-items menuLink">
                  <?php wp_nav_menu(array(
                      'menu'       => 'Main Nav',
                      'menu_class' => 'main-nav-item',
                      'container'  => '',
                      'items_wrap' => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
                  ));?>
              </li>
          </nav>
        </aside>
        <a class="scroll-top safari-only-scroll-top" href="#scrollToTop">back to the top <img class="scroll-icon" src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/triangle.png'); ?>" alt=""></a>
        </div>
      </section>

      <header id="masthead" class="site-header">
        <section class="header-static">
        <div class="site-logo">
          <?php
          if (function_exists('the_custom_logo')) {
              $custom_logo_id = get_theme_mod('custom_logo');
              $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
          } ?>
          <img src="<?php echo $logo[0] ?>" alt="">
        </div>

        <?php
            if (has_nav_menu('primary')) :
            ?>
        <section class="mobile-menu">
        <div id="mobileNavMain" class="overlay">
          <a href="javascript:void(0)" class="closebtn" onclick="closeNavMain()">&times;</a>
          <div class="overlay-content">
            <li class="main-nav-items menuLink">
                <?php wp_nav_menu(array(
                    'menu'       => 'Main Nav',
                    'menu_class' => 'main-nav-item',
                    'container'  => '',
                    'items_wrap' => '<ul id="%1$s" class="%2$s mobile-menu-main-item" role="menu" >%3$s</ul>',
                ));?>
            </li>
          </div>
        </div>

        <span class="hamburger" onclick="openNavMain()"><i class="fa fa-bars"></i></span>
        </section>

        <div class="desktop-menu safari-only-desktop-menu">
          <nav class="navbar-full">
            <li class="desktop-nav-items menuLink">
								<?php wp_nav_menu(array(
                      'menu'       => 'Main Nav',
                      'menu_class' => 'main-nav-item',
                      'container'  => '',
                      'items_wrap' => '<ul id="%1$s" class="%2$s" role="menu" >%3$s</ul>',
                ));?>
						</li>
          </nav>
        </div>

      <?php endif; ?>

      </section>
      </header>
