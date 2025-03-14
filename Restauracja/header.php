<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zdrowie' ); ?></a>


	<div class="announcement-bar pt-2 pb-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12 d-flex justify-content-center">
					<h2>Restauracja</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 d-flex justify-content-center">
					<ul class="announcement-bar__list">
						<li>
							<i class="bi bi-truck rounded-circle"></i>FREE EU SHIPPING
						</li>

						<li>
							<i class="bi bi-clock-history rounded-circle"></i>30 DAYS MONEYBACK GUARANTEE
						</li>

						<li>
							<i class="bi bi-person rounded-circle"></i>24/7 CUSTOMER SUPPORT
						</li>
					</ul>
				</div>
				<div class="col-md-4">
					<div class="container pt-2 pb-2">
						<div class="row align-items-center">
									<div class="col cart d-flex justify-content-center justify-content-md-end align-items-center pt-2">
										<a href="<?php echo wc_get_cart_url(); ?>"><i class="bi bi-bag-dash p-2"></i></a>
										<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'View your shopping cart' ); ?>"><?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> – <?php echo WC()->cart->get_cart_total(); ?></a>
									</div>
								</div>
							</div>					
				</div>

			</div>
		</div>


	</div>





	<header id="masthead" class="site-header">

		

		<nav id="site-navigation" class="main-navigation green">
			<div class="container d-flex justify-content-center green">

			<div class="row">
				<div class="col-12 d-flex justify-content-center">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
						<i class="bi bi-list"></i>
						<?php esc_html_e( 'Primary Menu', 'zdrowie' ); ?>
					</button>
				</div>

				<div class="col-12 text-center">
					<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu'
							)
						);
					?>
				</div>

			</div>
			</div>
		</nav>
	</header>
