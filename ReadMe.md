This WordPress Theme template uses Bootstrap v3.3.7 and assumes intermediate knowledge of HTML, CSS and basic knowledge of PHP. 

See http://getbootstrap.com (no Sass/Less and Grunt/Gulp).
The contents of bootstrap.css (unminified) can be viewed by downloading the Bootstrap files from the site.

This a wordpress theme from scratch. See the WordPress tutorial on https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/. This tutorial offers a nice step by step explanation.
See also https://codex.wordpress.org/ for more information about WordPress theme development.

I converted a handmade HTML-CSS site to this theme.

I have the index.php file calling header.php, footer.php, sidebar.php and content.php. Pages (non-blog entries) wil be auto-generated in content.php, see header.php.
For having pages without the sidebar (and blog with the sidebar) pages.php has is added as a 2nd index. Single.php is a 3d index, for getting one post per page.
You can always add new sections in the html, but not new php files. For example, work.php would result in an undefined function call (get_work) in php. So the work section has to be put on top of the html code in footer.php.
Update: You can add new php files, but you have to put code in them that makes them a custom template file. See https://codex.wordpress.org/Theme_Development#Template_Files_List

The logo and slogan wil be in the header. See header.php for the nav menu.

Notes about the Theme screenshot from the WordPress Codex: 
The screenshot of the theme (see Dashboard - Appearance - Themes) should be in the root of the theme site folder and should be named screenshot.png. 
The recommended image size is 1200x900, or another size that's close but with the same width-height ratio. Otherwise the screenhot wil not align in the screenshot holder shown at the Details page of the theme. The screenshot will only be shown as 387x290, but the over double-sized image allows for high-resolution viewing on HiDPI displays.

Favicon: Dashboard - Appearance - Customize - Site Identity - Site Icon

The conversion of my html-css site to a WordPress theme is succesful. Now I can make any html-css combination into a WordPress theme :)