<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/images/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/images/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/images/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/images/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/materialize.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/stylechild.css">
<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>
	<div class="navbar-fixed">
		<nav>
			<header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>">
				<div class="container">
					<div class="row hide-on-med-and-down" style="margin:0;">
						<div class="col s12">
							<div class="col l2 hide-on-med-and-down">
								<?php storefront_site_title_or_logo(); ?>
							</div>
							<div class="col hide-on-med-and-down l8 push-l1">
								<?php do_action( 'storefront_header' ); ?>
							</div>
							<div class="col hide-on-med-and-down l1 right">
								<ul id="site-header-cart" class="site-header-cart menu">
									<li class="<?php echo esc_attr( $class ); ?>">
										<?php storefront_cart_link(); ?>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<div class="row" style="margin:0;">
					<div class="col s12 hide-on-large-only">
						<div class="col s9">
							<?php storefront_site_title_or_logo(); ?>
						</div>
						<div class="col s1 right">
							<main class="hide-on-large-only">
								<a class="black-text toggle-overlay"><i class="small material-icons">menu</i></a>
							</main>	

							<aside>
								<div class="outer-close toggle-overlay">
								  <a class="white-text right close"><i class="margin-clear small material-icons" style="margin:20px;">clear</i></a>
								</div>
								<nav class="primary-navigation mobile-menu" role="navigation" aria-label="<?php esc_html_e( 'Primary Navigation', 'storefront' ); ?>">
							        <ul>
								    <?php
									    wp_nav_menu(
										    array(
											    'theme_location'	=> 'primary',
											    'fallback_cb'		=> '',
										    )
									    );
								    ?>
							        </ul>
								</nav>
							</aside>
						</div>
					</div>
				</div>
			</header>
		</nav>
	</div>
	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">
		<?php do_action( 'storefront_content_top' ); ?>