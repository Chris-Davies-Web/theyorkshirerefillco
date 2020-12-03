<?php 

/*
Template Name: Home Page
*/

get_header(); ?>

		<div class="content-area home">
			<main>
				<section class="hero">
					<div class="container">	
						<div class="row">
							<div class="col-12 col-md-6">
								<img src="<?php echo get_theme_mod('set_hero_image'); ?>" />
							</div>
							<div class="col-12 col-md-6">
								<div class="copy-container">
									<h1><?php echo get_theme_mod('set_hero_text'); ?></h1>
									<div class="cta cta-primary">
										<a href='<?php echo get_theme_mod('set_hero_cta_url'); ?>'><?php echo get_theme_mod('set_hero_cta_text'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="how-we-work">
					<div class="container">	
						<div class="row">
							<h2><?php echo get_theme_mod('set_how_we_work_header'); ?></h2>
						</div>
						
						<div class="row">
							<div class="col-6 col-lg-3">
								<p>STEP 1</p>
								<img src="<?php echo get_theme_mod('set_how_we_work_image_step_1'); ?>" />
								<h5><?php echo get_theme_mod('set_how_we_work_step_title1'); ?></h5>
								<p class="description">
								<?php echo get_theme_mod('set_how_we_work_step_description1'); ?>
								</p>
							</div>
							<div class="col-6 col-lg-3">
								<p>STEP 2</p>
								<img src="<?php echo get_theme_mod('set_how_we_work_image_step_2'); ?>" />
								<h5><?php echo get_theme_mod('set_how_we_work_step_title2'); ?></h5>
								<p class="description">
								<?php echo get_theme_mod('set_how_we_work_step_description2'); ?>
								</p>
							</div>
							<div class="col-6 col-lg-3">
								<p>STEP 3</p>
								<img src="<?php echo get_theme_mod('set_how_we_work_image_step_3'); ?>" />
								<h5><?php echo get_theme_mod('set_how_we_work_step_title3'); ?></h5>
								<p class="description">
								<?php echo get_theme_mod('set_how_we_work_step_description3'); ?>
								</p>
							</div>
							<div class="col-6 col-lg-3">
								<p>STEP 4</p>
								<img src="<?php echo get_theme_mod('set_how_we_work_image_step_4'); ?>" />
								<h5><?php echo get_theme_mod('set_how_we_work_step_title4'); ?></h5>
								<p class="description">
								<?php echo get_theme_mod('set_how_we_work_step_description4'); ?>
								</p>
							</div>
						</div> 
						
						<div class="row">
							<div class="cta cta-secondary">
								<a href='<?php echo get_theme_mod('set_how_we_work_CTA_url'); ?>'><?php echo get_theme_mod('set_how_we_work_CTA_copy'); ?></a>
							</div>
						</div>
					</div>
				</section>
				<?php 
				/*----------------------------------------------------------------------------------------------*/
				// We'll only show these sections if WooCommerce is ative
				if( class_exists( 'WooCommerce' ) ): 
				?>

						<section class="popular-products">
							<?php 

							// Getting data from Customizer to display the Popular Products section
							$popular_limit		= get_theme_mod( 'set_popular_max_num', 4 );
							$popular_col 		= get_theme_mod( 'set_popular_max_col', 4 );
							// $arrivals_limit		= get_theme_mod( 'set_new_arrivals_max_num', 4 );
							// $arrivals_col		= get_theme_mod( 'set_new_arrivals_max_col', 4 );

							?>
							<div class="container">
								<div class="section-title">
									<h2><?php echo get_theme_mod( 'set_popular_title', 'Popular products' ); ?></h2>
								</div>
								<?php echo do_shortcode( '[products limit=" ' . $popular_limit . ' " columns=" ' . $popular_col . ' " orderby="popularity"]' ); ?>
							</div> 
						</section>
					
						<?php 

						// Getting data from Customizer to display the Deal of the Week section
						// $showdeal			= get_theme_mod( 'set_deal_show', 0 );
						// $deal 				= get_theme_mod( 'set_deal' );
						// $currency			= get_woocommerce_currency_symbol();
						// $regular			= get_post_meta( $deal, '_regular_price', true );
						// $sale 				= get_post_meta( $deal, '_sale_price', true );

						// We'll only show this section if the user chooses to do so and if some deal product is set
						//if( $showdeal == 1 && ( !empty( $deal ) ) ):
							
						?>
						<!-- <section class="deal-of-the-week">
							<div class="container">
								<div class="section-title">
									<h2><?php //echo get_theme_mod( 'set_deal_title', 'Deal of the Week' ); ?></h2>
								</div>
								<div class="row d-flex align-items-center">
									<div class="deal-img col-md-6 col-12 ml-auto text-center">
										<?php //echo get_the_post_thumbnail( $deal, 'large', array( 'class' => 'img-fluid' ) ); ?>
									</div>
									<div class="deal-desc col-md-4 col-12 mr-auto text-center">
										<?php //if( !empty( $sale ) ): ?>
											<span class="discount">
                                                <?php 
                                                   // $discount_percentage = absint( 100 - ( ( $sale/$regular ) * 100 ) );echo $discount_percentage . '% OFF'; 
                                                ?>
											</span>
										<?php //endif; ?>
										<h3>
											<a href="<?php //echo get_permalink( $deal ); ?>"><?php //echo get_the_title( $deal ); ?></a>
										</h3>
										<p><?php //echo get_the_excerpt( $deal ); ?></p>
										<div class="prices">
											<span class="regular">
												<?php 
												// echo $currency;
												// echo $regular;
												?>
											</span>
											<?php// if( !empty( $sale ) ): ?>
												<span class="sale">
													<?php 
													//echo $currency;
													//echo $sale;
													?>										
												</span>
											<?php //endif; ?>
										</div>
										<a href="<?php// echo esc_url( '?add-to-cart=' . $deal ); ?>" class="add-to-cart">Add to Cart</a>
									</div>
								</div>
							</div> 
							DEAL OF THE WEEK
						</section> -->
						<?php // endif; ?><!-- End $showdeal/$deal verification -->
						
				<?php endif; ?>
				<!---------------------------------------------------------------------------------------------->
				<!-- End class_exists for WooCommerce -->

				<section class="about-me">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-6">
								<img src="<?php echo get_theme_mod('set_about_me_image'); ?>"/>
							</div>
							<div class="col-12 col-md-6">
							<div>
							<p>
							<?php echo get_theme_mod('set_about_me_description'); ?>
							<p>
							</div>
								<div class="cta cta-tertiary">
									<a href='<?php echo get_theme_mod('set_about_me_cta_url'); ?>'><?php echo get_theme_mod('set_about_me_cta_text'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="sustainable-living">
					<div class="container">
						<div class="row">
							<a href="">
								<img src="" />
							</a>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>