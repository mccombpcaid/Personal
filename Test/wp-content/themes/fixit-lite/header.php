 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Fixit Lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="header">
            <div class="header-inner">	
				<div class="logo">
					<?php fixit_lite_the_custom_logo(); ?>
						<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr(bloginfo( 'name' )); ?></a></h1>

					<?php $description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p><?php echo esc_html($description); ?></p>
					<?php endif; ?>
				</div>
                <?php if(get_theme_mod('email-txt') != '' || get_theme_mod('phone-txt') != '') { ?>
                    <div class="header-right">
                    	<?php if(get_theme_mod('phone-txt') != '') { ?>
                        <span><i class="fa fa-phone"></i><?php echo esc_attr(get_theme_mod('phone-txt')); ?></span>
                        <?php } ?>
                        <?php if(get_theme_mod('email-txt') != '') { ?>
                        <span><i class="fa fa-envelope"></i><a href="<?php echo esc_attr(esc_html('mailto:','fixit-lite').get_theme_mod('email-txt')); ?>"><?php echo esc_attr(get_theme_mod('email-txt')); ?></a></span>  
                        <?php } ?>          
                    </div><!-- header-right -->
				<?php } ?><div class="clear"></div> 				
            </div><!-- header-inner -->  
            <div class="navi-inner">
            		<div class="toggle">
						<a class="toggleMenu" href="#"><?php esc_html_e('Menu','fixit-lite'); ?></a>
				</div> 						
				<div class="main-nav">
						<?php wp_nav_menu( array('theme_location' => 'primary') ); ?>							
				</div><!-- main-nav -->	
                <?php if(get_theme_mod('quote-txt') != '') { ?>					
				<div class="quote-btn">
        			<a href="<?php echo esc_url(get_theme_mod('quote-link')); ?>"><?php echo esc_attr(get_theme_mod('quote-txt')); ?></a>
       		 	</div><!-- quote-btn -->
                <?php } ?><div class="clear"></div>
            </div><!-- navi-innner -->             
		</div><!-- header -->