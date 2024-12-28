<?php
/**
 * The header for our theme
 *
 * @subpackage Multi Sports
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<a class="screen-reader-text skip-link" href="#skip-content"><?php esc_html_e( 'Skip to content', 'multi-sports' ); ?></a>

<div id="header">
	<div class="container-fluid">
		<div class="row m-0">
			<div class="col-lg-3 col-md-7">
				<div class="logo">
					<?php if ( has_custom_logo() ) : ?>
	            		<?php the_custom_logo(); ?>
		            <?php endif; ?>
	             	<?php if (get_theme_mod('multi_sports_show_site_title',true)) {?>
              			<?php $blog_info = get_bloginfo( 'name' ); ?>
		                <?php if ( ! empty( $blog_info ) ) : ?>
		                  	<?php if ( is_front_page() && is_home() ) : ?>
		                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		                  	<?php else : ?>
	                      		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
	                  		<?php endif; ?>
		                <?php endif; ?>
		            <?php }?>
		            <?php if (get_theme_mod('multi_sports_show_tagline',true)) {?>
		                <?php
	                  		$description = get_bloginfo( 'description', 'display' );
		                  	if ( $description || is_customize_preview() ) :
		                ?>
	                  	<p class="site-description">
	                    	<?php echo esc_attr($description); ?>
	                  	</p>
	              		<?php endif; ?>
              		<?php }?>
			    </div>
			    <?php if (has_nav_menu('primary')){ ?>
				    <div class="toggle-menu responsive-menu">
			            <button onclick="multi_sports_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','multi-sports'); ?></span></button>
			        </div>
			    <?php }?>
			</div>
			<div class="col-lg-9 col-md-5 p-0">
				<div class="menu-section">
					<div class="row m-0">
						<div class="col-lg-9 col-md-12">
							<?php if (has_nav_menu('primary')){ ?>
								<div id="sidelong-menu" class="nav sidenav">
					                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'multi-sports' ); ?>">
					                  	<?php
						                    wp_nav_menu( array( 
												'theme_location' => 'primary',
												'container_class' => 'main-menu-navigation clearfix' ,
												'menu_class' => 'clearfix',
												'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
												'fallback_cb' => 'wp_page_menu',
						                    ) ); 
					                  	?>
					                  	<a href="javascript:void(0)" class="closebtn responsive-menu" onclick="multi_sports_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','multi-sports'); ?></span></a>
					                </nav>
					            </div>
					        <?php }?>
				        </div>
				        <div class="col-lg-3 col-md-12">
				        	<div class="social-icons">
				        		<?php if (get_theme_mod('multi_sports_facebook') != '') { ?>
				        			<a href="<?php echo esc_url(get_theme_mod('multi_sports_facebook')); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e('Facebook', 'multi-sports'); ?></span></a>
				        		<?php }?>
				        		<?php if (get_theme_mod('multi_sports_twitter') != '') { ?>
				        			<a href="<?php echo esc_url(get_theme_mod('multi_sports_twitter')); ?>"><i class="fab fa-twitter"></i><span class="screen-reader-text"><?php esc_html_e('Twitter', 'multi-sports'); ?></span></a>
				        		<?php }?>
				        		<?php if (get_theme_mod('multi_sports_linkedin') != '') { ?>
				        			<a href="<?php echo esc_url(get_theme_mod('multi_sports_linkedin')); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e('Linkedin', 'multi-sports'); ?></span></a>
				        		<?php }?>
				        		<?php if (get_theme_mod('multi_sports_rss') != '') { ?>
				        			<a href="<?php echo esc_url(get_theme_mod('multi_sports_rss')); ?>"><i class="fas fa-rss"></i><span class="screen-reader-text"><?php esc_html_e('RSS', 'multi-sports'); ?></span></a>
				        		<?php }?>
				        		<?php if (get_theme_mod('multi_sports_youtube') != '') { ?>
				        			<a href="<?php echo esc_url(get_theme_mod('multi_sports_youtube')); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e('Youtube', 'multi-sports'); ?></span></a>
				        		<?php }?>
				        	</div>
				        </div>
			        </div>
		        </div>
			</div>
		</div>
	</div>
</div>

<?php if(is_singular()) {?>
	<div id="inner-pages-header">
		<div class="hex center">
			<div class="hex odd first one"></div>
			<div class="hex odd first three"></div>
			<div class="hex odd first five"></div>
			<div class="hex odd first seven"></div>
			<div class="hex odd first nine"></div> 
			<div class="hex odd first eleven"></div>
		</div>
	    <div class='header-content'>
		    <div class="container">	
		    	<div class="row">
		    		<div class="col-lg-6 col-md-6 align-self-start">
		    			<div class="max-box">
					      	<h1><?php single_post_title(); ?></h1>
						</div>
		    		</div>
		    		<div class="col-lg-6 col-md-6 align-self-center">
				      	<div class="theme-breadcrumb text-md-right">
							<?php multi_sports_breadcrumb(); ?>
						</div>
		    		</div>
		    	</div>
		    </div>
		</div>
	</div>
<?php } ?>