<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package The Yorkshire Refill Company
 */

?>
<footer>
        <section class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="logo col-10 col-md-3 col-lg-4">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/png/MONOGRAM-WHITE.png" alt="The Yorkshire Refill Company Logo" />
                    </div>
                    <div class="get-around col-5 col-md-3 col-lg-2">
                        <h4>Get around</h4>
                        <?php 
                            wp_nav_menu( 
                                array(
                                'theme_location' => 'the_yorkshire_refill_co_get_around_menu'
                                )
                            ) 
                        ?>
                    </div>
                    <div class="follow-us col-5 col-md-2 col-lg-2">
                        <h4>Follow us</h4>
                        <?php 
                            wp_nav_menu( 
                                array(
                                'theme_location' => 'the_yorkshire_refill_co_follow_us_menu'
                                )
                            ) 
                        ?>
                    </div>
                    <div class="newsletter col-10 col-md-4 col-lg-4">
                        <div class="row">
                            <h4>Newsletter</h4>
                            <form>
                                <input type="input" placeholder="Your email address"></input>
                                <button>Subscribe</button>
                            </form>
                        </div>
                       
                    </div>
                </div>
                <div class="row">
                    <nav class="footer-menu">
                        <?php 
                            wp_nav_menu( 
                                array(
                                'theme_location' => 'the_yorkshire_refill_co_footer_menu'
                                )
                            ) 
                        ?>
                    </nav>
                </div>
            </div>
        </section>
        </footer>
    </div>
    </body>
</html>