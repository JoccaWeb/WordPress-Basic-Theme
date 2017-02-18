<!-- A Wordpress Responsive Theme Template -->

<?php get_header(); ?>

<!-- blog layout with Bootstrap grid: -->
<div class="blogspace">
        
    <div class="container">

        <div class="col-sm-8 blog-main">

            <!-- Calling the WordPress Loop -->
            <?php 
                if ( have_posts() ) : while ( have_posts() ) : the_post();
                get_template_part( 'content', get_post_format() );

                endwhile; ?>

                <!-- Pagination added: In the WordPress Dashboard go to Settings > Reading and change Blog pages show at most to 1 you can check whether it works. -->
                <nav>
                    <ul class="pager">
                        <li>
                                <?php next_posts_link( 'Previous' ); ?>
                        </li>
                        <li>
                                <?php previous_posts_link( 'Next' ); ?>
                        </li>
                    </ul>
                </nav>

            <?php endif; ?>

        </div>
        <!-- /.blog-main -->

        <?php get_sidebar(); ?>

    </div>
    <!-- /.container -->
</div>
<!-- /.blogspace -->

<?php get_footer(); ?>