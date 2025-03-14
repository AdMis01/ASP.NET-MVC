<?php?>

	<footer id="colophon" class="site-footer">

	<div class=" text-white pt-5 pb-5 green">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-2">
					<?php dynamic_sidebar( 'footer-widget-col-one' ); ?>
				</div>

				<div class="col-sm-6 col-md-2">
					<?php dynamic_sidebar( 'footer-widget-col-two' ); ?>
				</div>

				<div class="col-md-4 col-sm-12 ms-auto">
					<?php dynamic_sidebar( 'footer-widget-col-three' ); ?>
				</div>
			</div>
		</div>

	</div>


	<div class="container pt-2 pb-2">
		<div class="row d-flex align-items-center">
			<div class="col">
				<p>&copy; <?php bloginfo( 'name' );?> <?php echo date('Y'); ?> / Created by <a href="" target="_blank">Weronika Litowczenko</a>
			</div>
			<div class="col h-25 d-inline-block text-end">
				<img src="<?php echo get_template_directory_uri(); ?>/img/payment-methods.png" class="img-fluid" loading="lazy" alt="...">
			</div>
		</div>
	</div>



	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
