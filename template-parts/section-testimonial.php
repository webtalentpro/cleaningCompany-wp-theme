<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section testimony-section ftco-bg-dark">
    <div class="container">
        <div class="row justify-content-center pb-4 mb-3">
            <div
                class="col-md-7 heading-section heading-section-white text-center ftco-animate">
                <span class="subheading"><?php echo $config['testi_section_subtitle']?></span>
                <h2><?php echo $config['testi_section_title']?></h2>
            </div>
        </div>
        <div class="row ftco-animate">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel ftco-owl">
                    <?php if($testimonials=$config['testi_items']){ foreach($testimonials as
                    $testimonial){?>

                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <span class="fa fa-quote-right"></span>
                            </div>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4">
                                    <div
                                        class="user-img"
                                        style="background-image: url(<?php echo $testimonial['testi_per_img']['url'] ?>)"></div>
                                    <div class="pl-3">
                                        <p class="name"><?php echo $testimonial['testi_per_name']?></p>
                                        <span class="position"><?php echo $testimonial['testi_per_deg']?></span>
                                    </div>
                                </div>
                                <p class="mb-1">
								<?php echo $testimonial['testi_per_desc']?></p>
                            </div>
                        </div>
                    </div>

					<?php }}?>
                </div>

            </div>
        </div>
    </div>
</section>