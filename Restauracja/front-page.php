<?php
get_header();
?>

	<main id="primary" class="site-main">

		<section class="container pb-5 pt-4">
			<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded" data-bs-ride="carousel">
				
				<div class="carousel-inner">
					<div class="carousel-item active" data-bs-interval="10000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/zdj/slide-1.jpg" class="d-block w-100" alt="..."></a>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/zdj/slide-2.jpg" class="d-block w-100" alt="..."></a>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/zdj/slide-3.jpg" class="d-block w-100" alt="..."></a>
					</div>
					<div class="carousel-item" data-bs-interval="2000">
						<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/zdj/slide-4.jpg" class="d-block w-100" alt="..."></a>
					</div>
				</div>
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"  data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>
			</div>
		</section>


		<section class="container popular-products">
			<h1 class="text-center pt-5">Popular produkty</h1>
			<p class="text-center">Oferujemy dużą ilość produktów o wysokiej jakość, <br> aby dbać o swoje zdrowie!</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products popularity columns=4 limit=4]' ); ?>
			</div>
		</section>


		<section class="categories pt-5 pb-5">
			<div class="container">

				<h1 class="text-center pt-5">Kategorie</h1>
				<p class="text-center">Oferujemy dużą ilość produktów o wysokiej jakość, <br> aby dbać o swoje zdrowie!</p>
			

			<div class="row pt-5">

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/zdj/oils.jpg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center green text-white">Naturalne kosmetyki </h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/zdj/tea.jpg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center green text-white">Herbaty</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/zdj/vitamins.jpg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center green text-white">Suplementy</h2>
					</a>
				</div>

			</div>

			<div class="row mb-3">

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/zdj/vege.jpg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center green text-white">Zdrowa żywność</h2>
					</a>
				</div>

				<div class="categories__col sale col-md-8 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<div class="bg-sale position-absolute top-0 bottom-0 end-0 start-0" style="z-index: 1;"></div>
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/zdj/ad.jpg" alt="..." loading="lazy"> 
						<h2 class="position-absolute top-50 start-0 end-0 mb-0 text-center text-white" style="z-index: 2;">Specjalna ofaerta</h2>
			
					</a>
				</div>
			</div>
			</div>

		</section>

		<section class="container pt-5 special-offers">
			<h1 class="text-center pt-5">Specjalne oferty</h1>
			<p class="text-center">Oferujemy dużą ilość produktów o wysokiej jakość, <br> aby dbać o swoje zdrowie!</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[sale_products columns=4 limit=4]' ); ?>
			</div>
		</section>
		<section class="container">
			<h1 class="text-center">Wpisy</h1>

			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article style="border:2px solid black;border-radius: 20px;margin: 20px;padding:20px;">
					<?php the_title('<h2>', '</h2>'); ?>
					<?php the_content(); ?>
					</article>

				<?php endwhile; ?>
			<?php endif; ?>
		</section>
	</main>

<?php
get_footer();
