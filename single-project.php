<?php get_header(); 


?>
<section
    class="hero-wrap hero-wrap-2"
    style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs mb-2">
                    <span class="mr-2">
                        <a href="<?php echo esc_url(home_url() ); ?>">Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </span>

                    <span>
                        <?php single_post_title(  ); ?>
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </p>
                <h1 class="mb-0 bread"><?php single_post_title(  ); ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-degree-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ftco-animate">
                <p>
                    <img src="<?php echo the_post_thumbnail_url( ) ?>" class="img-fluid">
                </p>
                <h2 class="mb-3"><?php the_title(); ?></h2>

                <?php the_content();?>

            </div>

            <!-- .col-md-8 -->
            <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
                <div class="sidebar-box">

                    <?php get_search_form(  ); ?>                    
                </div>

                <?php get_sidebar()?>
            </div>

     

    </div>
</div>
</section>

<?php get_footer(); ?>