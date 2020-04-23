<?php get_header(); ?>

    <div class="forum-boxed">

        <div class="forum-container ">

            <div class="container-fluid">
            
                <div class="row">

                    <div class="col-8 offset-md-1">
                    
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
        
    </div>

<?php get_footer(); ?>