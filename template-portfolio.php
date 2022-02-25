<?php get_header(); 
/* Template Name: project-page */

?>
<section
    class="hero-wrap hero-wrap-2"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <?php get_template_part( 'inc/bread', 'cam' ); ?>
        </div>
    </div>
</section>

<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section pb-5">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section  text-center ftco-animate">
                <span class="subheading">Our Project</span>
                <h2>We have done many latest cleaning project</h2>
            </div>
        </div>
        <div class="row">
            <?php $args=array( $paged = (get_query_var('paged')) ? get_query_var('paged') :
            1, 'post_type'=> 'portfolio', 'posts_per_page'=>3, 'order'=> 'ASC', 'paged'=>
            $paged, ); $query=new WP_Query($args); while($query->have_posts( )){
            $query->the_post( ); ?>

            <div class="col-md-4 col-lg-4 col-sm-6 ftco-animate">
                <div
                    class="work img d-flex align-items-center"
                    style="background-image: url(<?php echo the_post_thumbnail_url(  )?>)">
                    <a
                        href="<?php the_permalink(  ) ?>"
                        class="icon image-popup d-flex justify-content-center align-items-center">
                        <span class="fa fa-expand"></span>
                    </a>
                    <div class="desc w-100 px-4 text-center pt-5 mt-5">
                        <div class="text w-100 mb-3 mt-4">
                            <h2>
                                <a href="<?php the_permalink(  );  ?>">
                                    <?php the_title()?>
                                </a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">

                                <?php echo paginate_links( array( 'total' => $query->max_num_pages,
                                'prev_text'=>'<i class="fa fa-chevron-left" aria-hidden="true"></i>',
                                'next_text'=>'<i class="fa fa-chevron-right" aria-hidden="true"></i>', ) ); ?>
                                <?php  wp_reset_postdata(); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php get_footer() ?>