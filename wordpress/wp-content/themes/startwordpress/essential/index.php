<!-- index.php - Displays the primary blog roll page. Like many other pages (e.g. author.php, page.php, search.php, etc.) in incorporates the header.php, sidebar.php and footer.php files to display the entire site. -->


<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">
			<!-- The Loop - ESSENTIAL TO WORDPRESS - All of your content is generated through a loop -->
			<?php       
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
			?>

		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>