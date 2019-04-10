<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package testtheme
 */

get_header();
?>
    <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'testtheme' ), '<span>"' . get_search_query() . '"</span>' );
					?></h1>
	</section>

	    <!-- BLOG CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <main id="content" class="col-sm-8" role="main">

		    	<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		    	
		    </main><!-- content -->
		    
		    <!-- SIDEBAR
			================================================== -->
		    <aside class="col-sm-4">


		    	<div class="widget">
		    		<h4>Join our Mailing List</h4>
		    		<p>Keep up-to-date with the latest news, and we'll <strong>send you something special as a thank you!</strong></p>
		    		<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						Click here to subscribe
					</button>
		    	</div><!-- widget -->
		    	
		    	<div class="widget">
		    		<form role="form" class="search-form" method="GET" action="<?php echo get_home_url(); ?>">
		    			<label for="sidebar-search" class="sr-only">Search the blog</label>
		    			<input name="s" type="text" placeholder="Search the blog..." value="<?php echo htmlspecialchars($_GET["s"]); ?>" id="sidebar-search">
		    		</form>
		    	</div><!-- widget -->
		    	
		    	<div class="widget">
		    		<h4>About Bootstrap to Wordpress</h4>
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    	</div><!-- widget -->

		    	<?php get_sidebar(); ?>
		    	
		    </aside>
	    
	    </div><!-- primary -->
    </div><!-- container -->
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'testtheme' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
