<?php get_header();
/* Template Name: Home-page */
?>
<?php $config=get_option('cleaning_framework' )?>
<!-- END nav -->
<?php $hero_bg=$config['hero_banner_bg'];?>
<div class="hero-wrap js-fullheight"
    style="background-image: url(<?php echo $hero_bg['url'];	?>);"
    data-stellar-background-ratio="0.5">

    <div class="overlay"></div>
    <div class="container">
        <div
            class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
            data-scrollax-parent="true">
            <div class="col-md-6 ftco-animate">

                <h2 class="subheading"><?php echo $config['hero_subtitle']; ?></h2>
                <h1 class="mb-4"><?php echo $config['hero_title']; ?></h1>
                <?php if($config['hero_btn_text']){?>
                <p>
                    <a
                        href="<?php echo $config['hero_btn_link']['url']; ?>"
                        class="btn btn-primary mr-md-4 py-2 px-4">
                        <?php echo $config['hero_btn_text']; ?>
                        <span class="ion-ios-arrow-forward"></span>
                    </a>
                </p>
                <?php } ?>
            </div>
        </div>
    </div>
</div>

<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex justify-content-center">
            <div class="col-md-12">
                <div class="wrap-appointment bg-white d-md-flex pl-md-4 pb-5 pb-md-0">
                    <?php echo do_shortcode( '[contact-form-7 id="1049" title="Appointment form"]' ); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part( 'template-parts/section', 'about' ); ?>
<?php get_template_part( 'template-parts/section', 'service' ); ?>
<?php get_template_part( 'template-parts/section', 'team' ); ?>
<?php get_template_part( 'template-parts/section', 'testimonial' ); ?>
<?php get_template_part( 'template-parts/section', 'project' ); ?>
<?php get_template_part( 'template-parts/section', 'blog' ); ?>
<?php get_template_part( 'template-parts/section', 'video' ); ?>
<?php get_template_part( 'template-parts/section', 'pricing' ); ?>

<?php get_footer( ); ?>