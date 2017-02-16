<!-- blogpost html:
Content for the WordPress loop -->
    
<div class="blog-post">

    <!-- Now the title links to the single-page version of the post -->
    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

    <p class="blog-post-meta">
            
        <?php the_date(); ?> by
        <a href="#">
        <?php the_author(); ?>
        </a>
    </p>

    <!-- ?php the_content(); ? 
    The content is changed to the excerpt, so with more posts on one page, only the first 55 words of a post are shown. -->
    <?php the_excerpt(); ?>    
    
</div>
<!-- /.blog-post -->