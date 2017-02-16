<!-- My Wordpress Responsive Theme Template

This template is based on my temporary basic portfolio site. It minimally needed added blog functionality to make 
the conversion to WordPress useful. So this theme has an added blog section in comparison with the original temp portfolio site.

Therefore we will have to have index.php calling header.php, footer.php, sidebar.php and content.php. 
Pages (non-blog entries) wil be auto-generated in content.php, see header.php.
For having pages without the sidebar (and blog with the sidebar) pages.php has to be added as a 2nd index. 
Single.php is a 3d index, for getting 1 post per page.
You can always add new sections in the html, but not new php files. For example, work.php would result in an 
undefined function call (get_work) in php. So the work section has to be put on top of the html code in footer.php.
Update: You can add new php files, but you have to put code in them that makes them a custom template file. 
See https://codex.wordpress.org/Theme_Development#Template_Files_List

The logo and slogan wil be in the header. See header.php for the nav menu.
So we'll create a new content- and sidebar section (and page.php).

In other site-conversion projects it's possible that you have to replace or re-edit blog-entry or blog-entry-like sections/code.

Notes about the Theme screenshot from the WordPress Codex: 
The screenshot of the theme (see Dashboard - Appearance - Themes) should be in the root of the theme site folder 
and should be named screenshot.png. 
The recommended image size is exactly 1200x900 (Jocca: or another size that's close but with the same width-height ratio. 
Otherwise the screenhot wil not align in the screenshot holder shown at the Details page of the theme). 
The screenshot will only be shown as 387x290, but the over double-sized image allows for high-resolution 
viewing on HiDPI displays.

Favicon: Dashboard - Appearance - Customize - Site Identity - Site Icon

The site still needs a few CSS adjustments but the conversion of my temp portf site to a WordPress theme is succesful. 
Now I can make any html-css combination into a WordPress theme :)
-->

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

                <!-- pagination added; Settings > Reading and change Blog pages show at most to 1 you can check whether it works.-->
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
