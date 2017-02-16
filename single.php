<?php get_header(); ?>

    <!-- single.php is an individual post page. It’s an exact duplicate of page.php, except 'content' is changed to 'content-single'
    This is done to give a post a whole page to itself. -->

    <!-- div class="row" This row was neccesary in the Bootstrap Blog Example i think... -->
        
        <div class="blogspace">
        
    <div class="container">

        <div class="col-sm-12">

            <!-- The WordPress Loop -->
           <?php 
           if ( have_posts() ) : while ( have_posts() ) : the_post();
	get_template_part( 'content-single', get_post_format() );

	if ( comments_open() || get_comments_number() ) :
	  comments_template();
	endif;

endwhile; endif; 
            ?>

        </div>
        <!-- /.blog-main -->

        <!-- removed sidebar -->

    </div>
    <!-- /.container -->
</div>

<?php get_footer(); ?>