<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Ti Sistema</title>
	<?php wp_head(); ?>
</head>
<!-- <body <?php //body_class(); ?>> faz a chamada das demais classes -->
<body ?php body_class(); ?>
	<header>
		<section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-9  col-md-10 col-sm-7 col-6 ">icones sociais</div>
					<div class="search col-xl-3 col-md-2 col-sm-5 col-6 text-right">pesquisa</div>
				</div>
			</div>
		</section>
		<section class="menu-area">
			<div class="container">
				<div class="row">
					<section class="logo col-md-2 col-12 text-center">logo</section>
					<nav class="main-menu col-md-10 text-right">
						<?php wp_nav_menu(
							array(
								'theme_location' => 'main-menu'
							)); 
						?>
					</nav>
				</div>
			</div>
		</section>
	</header>