<?php 

get_header(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php 
            the_content(  );
              wp_link_pages( array(
               'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'cleaningcompany' ) . '</span>',
               'after'       => '</div>',
   
   
                 ) );
               ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer( ); ?>