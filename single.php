<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package testtheme
 */

get_header();
?>
    <!-- MAIN CONTENT
	================================================== -->
    <div class="container">
	    <div class="row" id="primary">
	    
		    <div id="content" class="col-sm-8">
		    	
		    	<article class="post">
		    		<header>
		    			<h1>Blog title here</h1>
		    			<div class="post-details">
		    				<i class="fa fa-user"></i> Brad Hussey
		    				<i class="fa fa-clock-o"></i> <time>August 7, 2014</time>
		    				<i class="fa fa-folder"></i> Posted in <a href="">Tutorials</a>, <a href="">Coding</a>
		    				<i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">yadda yadda</a>
		    				
			    			<div class="post-comments-badge"><a href=""><i class="fa fa-comments"></i> 4</a></div>
		    			</div><!-- post-details -->
		    		</header>
		    		<div class="post-image">
		    			<img src="assets/img/hero-bg.jpg">
		    		</div><!-- post-image -->
		    		<div class="post-body">
		    			<p>Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Curabitur blandit tempus porttitor. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Curabitur blandit tempus porttitor.</p>

						<p>Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Sed posuere consectetur est at lobortis.</p>
						
						<h3>Subtitle</h3>
						<p>Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur.</p>
						
						<h4>Another subtitle</h4>
						<p>Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Maecenas sed diam eget risus varius blandit sit amet non magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
		    		</div><!-- post-body -->
		    	</article><!-- post -->
		    	
		    	<div id="comments">
		    		<div class="comments-wrap">
			    		<h3>4 comments</h3>
			    		
			    		<!-- These comments will have an image and more information when we use WordPress -->
			    		
			    		<ol class="comments-list">
			    			<li class="comment">
			    				<h4>John Smith <small>&bull; Aug 12, 2014</small></h4>
			    				<div class="comment-body">
			    					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
	
									<p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
			    				</div><!-- comment-body -->
			    				
			    				<ol class="children">
			    					<li class="comment">
			    						<h4>Chris McCooper <small>&bull; Aug 12, 2014</small></h4>
					    				<div class="comment-body">
					    					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
										</div><!-- comment-body -->
										
										<ol class="children">
					    					<li class="comment">
					    						<h4>Johnny Dee <small>&bull; Aug 12, 2014</small></h4>
							    				<div class="comment-body">
							    					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
												</div><!-- comment-body -->
					    					</li>
					    				</ol>
										
			    					</li>
			    				</ol>
			    			</li>
			    			
			    			<li class="comment">
			    				<h4>Jane Smith <small>&bull; Aug 9, 2014</small></h4>
			    				<div class="comment-body">
			    					<p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
			    				</div><!-- comment-body -->
			    			</li>
			    		</ol><!-- comments-list -->
			    		
			    		<div id="leave-comment">
			    			<h3>Leave a comment</h3>
			    			
							<form>
								<p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
								<p class="comment-form-author">
									<label>Name *</label>
									<input id="author" type="text">
								</p>
								<p class="comment-form-email">
									<label for="email">Email *</label>
									<input id="email"  type="email">
								</p>
								<p class="comment-form-url">
									<label for="url">Website</label>
									<input id="url"  type="url">
								</p>
								<p class="comment-form-comment">
									<label for="comment">Comment</label>
									<textarea id="comment" cols="45" rows="8"></textarea>
								</p>
								<p class="form-submit">
									<input name="submit" type="submit" id="submit" value="Post Comment">
								</p>
							</form>
			    			
			    		</div><!-- leave-comment -->
			    		
			    	</div><!-- comments -->
		    	</div><!-- comments-wrap -->
		    </div><!-- content -->
		    
		    
		    <!-- SIDEBAR
			================================================== -->
		    <aside class="col-sm-4">
		    	
		    	<div class="widget">
		    		<h4>Join our Mailing List</h4>
		    		<p>Keep up-to-date with the latest news, and we'll <strong>send you a discount for the course!</strong></p>
		    		<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						Click here to subscribe
					</button>
		    	</div><!-- widget -->
		    	
		    	<div class="widget">
		    		<form role="form" class="search-form">
		    			<input type="text" placeholder="Search the blog...">
		    		</form>
		    	</div><!-- widget -->
		    	
		    	<div class="widget">
		    		<h4>About Bootstrap to Wordpress</h4>
		    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		    	</div><!-- widget -->
		    	
		    	<div class="widget">
		    		<h4>Recent Posts</h4>
		    		<ul>
		    			<li><a href="">Blog post #1</a></li>
		    			<li><a href="">Blog post #2</a></li>
		    			<li><a href="">Blog post #3</a></li>
		    			<li><a href="">Blog post #4</a></li>
		    			<li><a href="">Blog post #5</a></li>
		    		</ul>
		    	</div><!-- widget -->
		    	
		    	<div class="widget">
		    		<h4>Categories</h4>
		    		<ul>
		    			<li><a href="">Category #1</a></li>
		    			<li><a href="">Category #2</a></li>
		    			<li><a href="">Category #3</a></li>
		    			<li><a href="">Category #4</a></li>
		    			<li><a href="">Category #5</a></li>
		    			<li><a href="">Category #6</a></li>
		    		</ul>
		    	</div><!-- widget -->
		    	
		    </aside>
	    
	    </div><!-- primary -->
    </div><!-- container -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
