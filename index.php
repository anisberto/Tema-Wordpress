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
						</div>          
							<?php 
							if( have_posts() ):
								while ( have_posts() ): the_post();
							?>
							<article>
								<h2><?php the_title(); ?></h2>
								<p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
								<p>Categories: <?php the_category( ' ' ); ?></p>
								<p><?php the_tags('Tags: ', ','); ?></p>
								<?php the_content(); ?>
							</article>
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