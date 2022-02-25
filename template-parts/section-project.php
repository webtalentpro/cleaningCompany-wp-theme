<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section ftco-no-pb">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-12 heading-section  text-center ftco-animate">
                <span class="subheading">Our Project</span>
                <h2>We have done many latest cleaning project</h2>
            </div>
        </div>
        <div class="row">
            <?php $args=array(
                'post_type'=> 'portfolio',
                'posts_per_page'=> 6,
                'order'=> 'ASC',
            );
            $query=new WP_Query($args);
            while($query->have_posts(  )){
                $query->the_post(  );
                ?>

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
                                <a href="<?php the_permalink(  );  ?>"><?php the_title()?></a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <?php } wp_reset_postdata(  ); ?>

        </div>
    </div>
</section>
