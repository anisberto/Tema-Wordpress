<?php get_header(); ?>
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row">Slid</div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row">Serviços</div>
				</div>
			</section>
			<section class="meddle-area">
				<div class="container">
					<div class="row">
						<aside class="sidebar col-md-4">barra lateral</aside>
						<div class="news col-md-8">

							<?php 
							//Tamplets Tags
							if( have_posts() ):
								while ( have_posts() ): the_post();
							?>
							<p>Anisberto dos Reis do Nascimento</p>
							<?php 
							 	endwhile;
							 else:
							 ?>

							 <p>There are not yet to be posts</p>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row">Mapa</div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>