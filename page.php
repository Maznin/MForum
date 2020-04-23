<?php get_header(); ?>

    <div class="container">

    <?php 
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post(); 
            // Display post content

            the_content();

        endwhile; 
    endif; 
    ?>


    </div>
    <!-- /.container -->            
<?php get_footer(); ?>
