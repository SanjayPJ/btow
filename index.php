<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package testtheme
 */

get_header();
?>

    <section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
		<h1 class="page-title">Blog</h1>
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
		    			<input name="s" type="text" placeholder="Search the blog..." id="sidebar-search" value="<?php echo htmlspecialchars($_GET["s"]); ?>">
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

<?php
get_footer();
