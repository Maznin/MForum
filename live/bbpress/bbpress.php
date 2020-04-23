<?php get_header(); ?>

    <div class="container my-4">
        <h1>MFORUM TITLE</h1>
    </div>

        <div class="forum-container">

            <div class="container-fluid">
            
                <div class="row">

                    <div class="col-9">
                    
                        <?php if ( have_posts() ) { ?>
                            
                            <?php while ( have_posts() ) { 
                                the_post(); ?>

                                    <div class="entry-content">

                                        <?php the_content(); ?>
                                        
                                    </div>

                            <?php } ?> 
                            
                        <?php } ?> 

                    </div>
                    <!-- /.col -->  

                    <div class="col-3">
                                
                        <?php get_sidebar(); ?>            
                    
                    </div>                  
                    
                
                </div>
                <!-- /.row -->                    
            </div>
            <!-- /.container-fluid -->      
        </div>
        <!-- /.forum-container -->                                 

<?php get_footer(); ?>