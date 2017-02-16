<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JoccaWeb</title>

    <!-- Bootstrap integration from their CDN -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- My custom CSS, dynamically read by Wordpress: (you always have to have a style.css in the siteroot) -->
    <link href="<?php bloginfo('template_directory');?>/css/joccatemp.css" rel="stylesheet">

    <!-- Google Fonts: -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
   	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
   	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   	<![endif]-->

    <!-- dynamic WP code added -->
    <?php wp_head();?>

</head>

<body>

    <div class="jumbotron">
        <!-- JoccaWeb "logo" 
        inserted Site Title and Tagline from WP Settings General: Same as the original JoccaWeb and Frontend. Also, if you click on the title, you go to the main blog page. -->
        <div class="container">
            <h1>
                <a href="<?php bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a>
            </h1>
            <p>
                <?php echo get_bloginfo( 'description' ); ?>
            </p>

            <!-- This is the most basic nav menu you can get. If for example the portfolio doesn't need to be on a separate page and you don't want to include it in the footer or header, you can just make an extra php file, say portfolio-section.php, to make up the building blocks of your one-page site (or with extra pages with other subjects): -->

            <?php wp_list_pages( '&title_li=' ); ?>

                <!-- A page replaces the contents of content.php, the rest of the site remains in view. A menu with relative links for one page must be made separately or in the sidebar perhaps. You can always make extra menus and lists in other sections.
                
                Note 1: I will hardly use the internal editor of Wordpress for html and css. A separate editor like Brackets works better for me and can be used in different projects.
                
                Note 2: the HTML of a WP Page needs to be edited in the Page section of the Dashboard, considering the auto-generation of it in content.php -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.jumbotron -->