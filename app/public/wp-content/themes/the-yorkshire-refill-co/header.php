<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Yorkshire Refill Company
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class() ?>>
    <div id="page" class="site">
        <header>
            <!-- <section class="search">
                <div class="container">
                    <?php // get_search_form(  );?>
                </div>
            </section> -->
            <section class="top-bar">
                <div class="container">
                    <div class="row">
                    <?php if(class_exists('WooCommerce')) : ?>
                                <div class="account col-12">
                                    <div class="navbar-expand">
                                        <ul class="navbar-nav float-right">
                                            <?php if(is_user_logged_in()): ?>
                                                <li>
                                                    <a href="<?php echo esc_url(get_permalink(get_option( 'woocommerce_myaccount_page_id')))?>" class="nav-link">My Account</a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo esc_url(wp_logout_url(get_permalink(get_option( 'woocommerce_myaccount_page_id'))))?>" class="nav-link">Logout</a>
                                                </li>
                                            
                                            <?php else: ?>
                                                <li class="hide-on-mobile">
                                                    <a href="<?php echo esc_url(wp_logout_url(get_permalink(get_option( 'woocommerce_myaccount_page_id'))))?>" class="nav-link">Login / Register</a>
                                                </li>
                                            <?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                             <?php endif;?>
                        
                        <div class="second-column col-md-11 col-12 col-lg-11 ">
                        <div class="row">
                                <!-- Logo Tablet -->
                                <div class="col-12">
                                    <a href="/" class="tablet-icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/png/MAIN-LOGO-DARK-BROWN.png" alt="The Yorkshire Refill Company" />
                                    </a>
                                </div>
                        </div>
                            <div class="row">
                                <div class="col-12">
                                      
                                <a href="/" class="mobile-icon col-8">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/png/MAIN-LOGO-DARK-BROWN.png" alt="The Yorkshire Refill Company" />
                                        </a>
                                    <nav class="main-menu navbar navbar-expand-md navbar-light col-12" role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <?php
                                        wp_nav_menu( array(
                                            'theme_location'    => 'the_yorkshire_refill_co_main_menu',
                                            'depth'             => 3,
                                            'container'         => 'div',
                                            'container_class'   => 'collapse navbar-collapse',
                                            'container_id'      => 'bs-example-navbar-collapse-1',
                                            'menu_class'        => 'nav navbar-nav',
                                            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                            'walker'            => new WP_Bootstrap_Navwalker(),
                                        ) );
                                        ?>
                                      
                                    </nav>
                                </div>
                            </div>
                         
                            
                        </div>
                        <div class="third-column col-1 float-right">
                            
                            <?php if(class_exists('WooCommerce')) : ?>
                                <div class="cart text-right">
                                    <a href="<?php echo wc_get_cart_url()?>"><span class="cart-icon"></span>
                                    <span class="items"><?php echo WC()->cart->get_cart_contents_count();?></span></a>
                                </div>
                             <?php endif;?>
                        </div>
                
                    </div>
                </div>
            </section>
        </header>
