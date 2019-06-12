<?php
/*
Template Name: Pillar
*/
get_header(); ?>

<div id="pagepiling">
	<div class="section">
			<div class="thing">
				<div class="tagline">
					<h1><?php bloginfo( 'name' ); ?></h1>
					<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
					<a role="button" class="download large button sites-button hide-for-small-only" href="https://github.com/olefredrik/foundationpress">Download FoundationPress</a>
				</div>

				<div class="watch">
					<span id="stargazers"><a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a></span>
					<span id="twitter"><a href="https://twitter.com/olefredrik">@olefredrik</a></span>
				</div>
			</div>
		
		<img class="responsive-img" src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/p1-video-still.jpg" alt="responsive" />
		<?php /* get_template_part( 'template-parts/featured-image' );*/  ?>
	</div>

	<div class="section">
		<!-- <div class="hero-video">
			<div class="hero-video-container">
				<div id="muteYouTubeVideoPlayer"></div>
			</div>
		</div> -->
		<?php get_template_part( 'template-parts/video' ); ?>
  	</div>

	<div class="section">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<section class="intro" role="main">
				<div class="fp-intro">

					<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
						<div class="entry-content">
							<?php the_content(); ?>
						</div>
						<footer>
							<?php
								wp_link_pages(
									array(
										'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
										'after'  => '</p></nav>',
									)
								);
							?>
							<p><?php the_tags(); ?></p>
						</footer>
						<?php do_action( 'foundationpress_page_before_comments' ); ?>
						<?php comments_template(); ?>
						<?php do_action( 'foundationpress_page_after_comments' ); ?>
					</div>

				</div>

			</section>
		<?php endwhile; ?>
		<?php do_action( 'foundationpress_after_content' ); ?>
	</div>

	<div class="section">
		<section class="benefits">
			<header>
				<h2>Build Foundation based sites, powered by WordPress</h2>
				<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
			</header>

			<div class="semantic">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/semantic.svg" alt="semantic">
				<h3>Semantic</h3>
				<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
			</div>

			<div class="responsive">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/responsive.svg" alt="responsive">
				<h3>Responsive</h3>
				<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>
			</div>

			<div class="customizable">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/customizable.svg" alt="customizable">
				<h3>Customizable</h3>
				<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

			</div>

			<div class="professional">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/professional.svg" alt="professional">
				<h3>Professional</h3>
				<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
			</div>

			<div class="why-foundation">
				<a href="/kitchen-sink">See what's in Foundation out of the box →</a>
			</div>
		</section>
	</div>

	<div class="section pp-scrollable">
		<div class="parallax">
			<div class="content content1">
				<h1>#1 Scale</h1>
				<div class="hello">Fires on page load</div>
			</div>

			<div class="content content2">
				<h1>#2 Split Text</h1>
				<div class="message">GreenSock Rocks!</div>
			</div>

			<div class="content content3">
				<h1>#3 Beware of Dog</h1>
				<div class="dog">
					<div class="woof"></div>
				</div>
			</div>

			<div class="content content4">
				<h1>#4 Fancy Div</h1>
				<div class="box">I'm Fancy</div>
			</div>

			<!-- <div class="content content5">
				<h1>#5 Morphin' Time</h1>
				<svg id="morphIt" xmlns="http://www.w3.org/2000/svg" width="400" height="300" viewBox="0 0 400 300">
					<path id="star" d="M200,33.21,238,110.1l84.85,12.33-61.4,59.85,14.5,84.51L200,226.89l-75.9,39.9,14.5-84.51L77.2,122.43l84.85-12.33Z" fill="#ffffff"/>
					<path id="circle" d="M302.5,150A102.5,102.5,0,1,1,200,47.5,102.5,102.5,0,0,1,302.5,150Z" fill="#fcee21"/>
					<path id="triangle" d="M319.65,253.62H80.35L200,46.38Z" fill="#fcee21"/>
				</svg>
			</div>

			<div class="content content6">
				<h1>#6 DrawSVG</h1>
				<svg id="drawIt" xmlns="http://www.w3.org/2000/svg" width="400" height="100" viewBox="0 0 400 100">
					<g stroke="white" stroke-width="2" fill="transparent">
						<path d="M42.83,128.61c-1.27,0-4.16.08-5.44.08H28.64a27.61,27.61,0,0,1-.51-5.61,28.44,28.44,0,0,1,.51-5.7H70.71a19.45,19.45,0,0,1,.69,5.19c0,4.51-2.21,6.12-7.15,6.12H61.79c-1.28,0-4.08-.08-5.36-.08h-.08c0,2.38.08,4,.08,6.29v40.54a39.7,39.7,0,0,1-6.8.52,39.13,39.13,0,0,1-6.8-.52Z" transform="translate(0 -99)"/>
						<path d="M109.47,157.42c0-2.38.09-4,.09-6.29-1.19,0-3.06.09-4.25.09H95.45c-1.19,0-3-.09-4.25-.09,0,2.3.08,3.91.08,6.29v18a38.5,38.5,0,0,1-6.8.52,40.36,40.36,0,0,1-6.8-.52V117.38a41.32,41.32,0,0,1,6.8-.51,39.41,39.41,0,0,1,6.8.51v16.24c0,2.38-.08,4-.08,6.29,1.27,0,3.06-.08,4.25-.08h9.86c1.19,0,3.06.08,4.25.08,0-2.29-.09-3.91-.09-6.29V117.38a45.66,45.66,0,0,1,13.61,0v58.06a37.4,37.4,0,0,1-6.64.52,41,41,0,0,1-7-.52Z" transform="translate(0 -99)"/>
						<path d="M175,169.15c-.68,4.25-3.74,6.55-8.67,6.55H143.73c-4.85,0-7.82-3.06-7.82-7.91V118l.59-.6h36.64a26,26,0,0,1,.51,5.36,19.52,19.52,0,0,1-1.19,6H149.25c0,2.29.09,3.91.09,6.12v5.95c2.21-.09,4.59-.09,5.78-.09h13a20.21,20.21,0,0,1,0,11.05H149.34v6.46c0,2.21-.09,3.83-.09,6.12v.09c2-.09,3.91-.17,6.29-.17h19.72A35.52,35.52,0,0,1,175,169.15Z" transform="translate(0 -99)"/>
						<path d="M242.41,169.15c-.68,4.25-3.74,6.55-8.67,6.55H211.13c-4.85,0-7.82-3.06-7.82-7.91V118l.59-.6h36.64a25.37,25.37,0,0,1,.51,5.36,19.24,19.24,0,0,1-1.19,6h-23.2c0,2.29.08,3.91.08,6.12v5.95c2.21-.09,4.59-.09,5.78-.09h13a20.46,20.46,0,0,1,0,11.05H216.74v6.46c0,2.21-.08,3.83-.08,6.12v.09c2-.09,3.91-.17,6.29-.17h19.72A34.16,34.16,0,0,1,242.41,169.15Z" transform="translate(0 -99)"/>
						<path d="M298.34,117.38v57.81a49.56,49.56,0,0,1-8.24.77,59.84,59.84,0,0,1-7.91-.52L268.85,145c-2-4.33-3.66-8.75-4.85-12l-.25.08c.59,7.23,1,18.36,1,25.42v16.91a33.54,33.54,0,0,1-6.21.52,36,36,0,0,1-6.46-.52v-57.8a46.83,46.83,0,0,1,8.07-.77,60.11,60.11,0,0,1,7.83.51l13.17,30.35c2.13,5,4.08,9.78,5.27,12.92l.34-.17c-.68-7.9-1-19.21-1-25.07V125c0-6,2.38-8.25,7.57-8.25h4.42Z" transform="translate(0 -99)"/>
						<path d="M348.83,171.7C344.92,174.76,338,176,333.28,176c-7.4,0-14-.18-21.43-.35l-.59-.59V117.81l.59-.6c7.32-.25,14-.34,21.43-.34,4.67,0,11.64,1.19,15.55,4.26,8,6.29,9.52,15.38,9.52,25.24S356.91,165.41,348.83,171.7Zm-15.64-44.2c-2.89,0-5.35,0-8.41-.08v38c3.06-.08,5.52-.08,8.41-.08,9.78,0,11.22-10.29,11.22-19S343,127.5,333.19,127.5Z" transform="translate(0 -99)"/>
					</g>
				</svg>
			</div> -->
				</div>
			<div class="trigger">Trigger</div>
		
	<!-- <div class="parallax">

			<div class="trigger">Trigger</div>
			<img class="scene" data-modifier="30" src="https://s.electerious.com/parallaxscene/p0.png">
			<img class="scene" data-modifier="18" src="https://s.electerious.com/parallaxscene/p1.png">
			<img class="scene" data-modifier="12" src="https://s.electerious.com/parallaxscene/p2.png">
			<img class="scene" data-modifier="8" src="https://s.electerious.com/parallaxscene/p3.png">
			<img class="scene" data-modifier="6" src="https://s.electerious.com/parallaxscene/p4.png">
			<img class="scene" data-modifier="0" src="https://s.electerious.com/parallaxscene/p6.png">

			<div class="container">
				<div class="box easeBox" data-timing="sineInOut"></div>
				<div class="box easeBox" data-timing="backInOut"></div>
				<div class="box easeBox" data-timing="circIn"></div>
				<div class="box easeBox" data-timing="quintOut"></div>
				<div class="box easeBox" data-timing="expoIn"></div>
			</div>

			<div class="container">
				<div class="box rotateBox">rotate</div>
				<div class="box fadeBox">fade</div>
			</div>

			<div class="container">
				<div class="box referenceBox">reference</div>
				<div class="box directBox">direct</div>
			</div>
		</div> -->
	</div>
</div>

<!-- This is our intersection trigger -->
<div class="trigger">Trigger</div>

<?php get_footer(); ?>

