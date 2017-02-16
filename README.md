# joccaweb-wp
My basic portfolio site turned into a WordPress theme.

The theme is placed in a WordPress 4.7.2 installation. It's a former basic version of www.joccaweb.nl.

It uses Bootstrap v3.3.7 ( http://getbootstrap.com ). As of yet no Sass/Less and Grunt/Gulp implemented.
Contents of bootstrap.css (unminified) have to be viewed through the Bootstrap site.

This a wordpress theme from scratch. See the WordPress tutorial on https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/. See also https://codex.wordpress.org/.

This theme minimally needed added blog functionality to make the conversion to WordPress useful. So it has an added blog section.
Therefore we will have to have index.php calling header.php, footer.php, sidebar.php and content.php. In the WordPress Codex you can find more about WordPress' html filestructure.
For having pages without the sidebar (and blog with the sidebar) pages.php has to be added as a 2nd index. Single.php is a 3d index, for getting 1 post per page.

See the comments in index.php for more information about the theme. The site still needs a few CSS adjustments but the conversion of my temp portf site to a WordPress theme is succesful. Now I can make any html-css site into a WordPress theme :)
