<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style2.css" rel="stylesheet" type="text/css" media="screen,print"/>
	<?php wp_head(); ?>
	
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-96874480-1', 'auto');
	ga('send', 'pageview');
	
	</script>
	
</head>

<body <?php body_class(); ?>>
	
<div class="top" style="position:relative">
    <div class="intop">
        <div class="top_logo"></div>
        <div class="nav" style="margin-top: 21px;">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
				<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'menu_class'     => 'primary-menu',
						 ) );
					?>
				</nav><!-- .main-navigation -->
			<?php endif; ?>
        </div>
        <div class="langs_sw">
            <?php qtranxf_generateLanguageSelectCode(["type" => "text"]); ?>
        </div>
        <div class="clear"></div>
    </div>
</div>	
	
<div id="page" class="site" style="padding-top:100px">
	<div class="site-inner">
		<div id="content" class="site-content">
