<?php get_header(); 
/* Template Name: Contact-page */
?>
<?php $config=get_option('cleaning_framework' )?>
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

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row mb-5">
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        <span>Address:</span>
                                        <?php echo $config['contact_addr']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        <span>Phone:</span>
                                        <a href="tel:<?php echo $config['contact_phone']; ?>"><?php echo $config['contact_phone']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        <span>Email:</span>
                                        <a href="mailto:<?php echo $config['contact_email']; ?>"><?php echo $config['contact_email']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                    <p>
                                        <span>Website</span>
                                        <a href="<?php echo $config['contact_web']; ?>"><?php echo $config['contact_web']; ?></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-md-7">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Contact Us</h3>
                                <div id="form-message-warning" class="mb-4"></div>
                                <div id="form-message-success" class="mb-4">
                                    Your message was sent, thank you!
                                </div>
                                                                                                                                                                                                                                                                                                                                         <?php echo do_shortcode( '[contact-form-7 id="1048" title="cleaningcompany contact form"]'); ?>
                               
                            </div>
                        </div>
                        <div class="col-md-5 d-flex align-items-stretch">
                            <div
                                class="info-wrap w-100 p-5 img"
                                style="background-image: url(<?php echo esc_url(get_template_directory_uri())?>/images/about.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div id="map" class="map"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>