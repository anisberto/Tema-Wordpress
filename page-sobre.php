<?php get_header(); ?>
	<div class="content-area">
		<main>
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
							<p>Pagina de descrição do site.</p>
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
		</main>
	</div>
<?php get_footer(); ?>