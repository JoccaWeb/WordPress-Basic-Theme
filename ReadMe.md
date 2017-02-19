This WordPress Theme template uses Bootstrap v3.3.7 and assumes intermediate knowledge of HTML, CSS and basic knowledge of PHP. 

See http://getbootstrap.com (no Sass/Less and Grunt/Gulp).
The contents of bootstrap.css (unminified) can be viewed by downloading the Bootstrap files from the site.

This a wordpress theme from scratch. I converted a handmade HTML-CSS site to this theme. See the WordPress tutorial on https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/. This tutorial offers a nice step by step explanation.
See also https://codex.wordpress.org/ for more information about WordPress theme development.

I have the index.php file calling header.php, footer.php, sidebar.php and content.php. Pages (non-blog entries) wil be auto-generated in content.php, see header.php.
For having pages without the sidebar (and the blog entries with the sidebar) pages.php is added as a 2nd index. Single.php is a 3d index, for getting one post per page.
You can add new php files if you want to have new sections in the layout of the site, but you have to put in code that that makes them custom template files. See https://codex.wordpress.org/Theme_Development#Template_Files_List.

The conversion of my html-css site to a WordPress theme is succesful. Now I can make any html-css combination into a WordPress theme :)
