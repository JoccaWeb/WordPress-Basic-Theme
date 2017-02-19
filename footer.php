<div class="gallery">
        
    <div class="container">

        <h1 class="work">Work</h1>

        <!-- Image gallery -->
        <div class="row">

            <div class="col-xs-6 col-md-3 col-xxs-12">

                <a href="#">
                    <!-- Note 1: uploading pictures to the Media Library of Wordpress is meant for attaching pictures 
                    to Posts or Pages. Outside of that I use my own img folder.
                    Note 2: Picture is dynamically loaded by Wordpress: -->
                    <img class="thumbnail img-responsive" src="<?php bloginfo('template_directory');?>/img/modal-clock3d.jpg" 
                         alt="Clock 3D"></a>

                <div class="caption">
                    <p>3D Clock</p>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-xxs-12">

                <a target="blank" href="mysck/index.html">
                    <img class="thumbnail img-responsive" src="<?php bloginfo('template_directory');?>/img/modal-csscode.jpg" 
                         alt="CSS Code"></a>

                <div class="caption">
                    <p>CSS Code</p>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-xxs-12">

                <a target="blank" href="img/joccaweb-old-widescreen.jpg">
                    <img class="thumbnail img-responsive" src="<?php bloginfo('template_directory');?>/img/modal-elephant.jpg" 
                         alt="Elephant"></a>

                <div class="caption">
                    <p>Elephant</p>
                </div>
            </div>

            <div class="col-xs-6 col-md-3 col-xxs-12">

                <a target="blank" href="aansluiter/index.html">
                    <img class="thumbnail img-responsive" src="<?php bloginfo('template_directory');?>
                                                               /img/modal-htmlscrabble.jpg" alt="HTML Scrabble"></a>

                <div class="caption">
                    <p>HTML Scrabble</p>
                </div>
            </div>

        </div>
        <!-- /.row -->   

    </div>
    <!-- /.container -->
</div>
<!-- /.portfolio -->


<!-- Actual footer, no background color, little text, only centering needed -->
<h2 class="bootstrap-link">This site uses  <a target="blank" href="http://getbootstrap.com/">Bootstrap</a> and is powered by 
<a target="blank" href="https://wordpress.org/">Wordpress</a>. 
Theme template designed by JoccaWeb.</h2>

<!-- Bootstrap JavaScript and custom JavaScript must go below jQuery to function. We can link to jQuery via Google’s URL 
because it reduces load on our live server, but you can download it if you want to work locally. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- From the Bootstrap CDN: -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- dynamic footer code from WordPress: -->
<?php wp_footer(); ?>
