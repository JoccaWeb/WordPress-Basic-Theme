<?php get_header(); ?>

<!-- The pages layout, WP recognizes page.php to respond to page navigation.
I removed Bootstrap's div class="row", see explanation in single.php -->
    
<div class="blogspace">
        
    <div class="container">

	<div class="col-sm-12">

        	<!-- The WordPress Loop -->
        	<?php 
        		if ( have_posts() ) : while ( have_posts() ) : the_post();  	
            		get_template_part( 'content-single', get_post_format() );  
		        endwhile; endif; 
        	?>

    	</div>
        <!-- /.blog-main -->

        <!-- removed sidebar -->

    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>
