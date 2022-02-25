<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row d-flex no-gutters">
            <div class="col-md-6 d-flex">
                <?php if( $about_bg=$config['about_image']){ ?>
                <div
                    class="img d-flex align-items-center justify-content-center py-5 py-md-0"
                    style="background-image:url(<?php echo $about_bg['url'];?>)">
                    <?php } ?>
                    <div class="time-open-wrap">
                        <div class="desc p-4">
                            <h2><?php echo $config['about_card_title']; ?></h2>
                            <div class="opening-hours">
                                <h4>Opening Days:</h4>
                                <p class="pl-3">
                                    <?php echo $config['opening_days'];  ?>

                                </p>
                                <h4>Vacations:</h4>
                                <p class="pl-3">
                                    <?php echo $config['vacations_days'];  ?>

                                </p>
                            </div>
                        </div>
                        <div class="desc p-4 bg-secondary">
                            <h3 class="heading">For Emergency Cases</h3>
                            <span class="phone"><?php echo $config['about_emergency_phone'];?></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 pl-md-5 pt-md-5">
                <div class="row justify-content-start py-5">
                    <div class="col-md-12 heading-section ftco-animate">
                        <span class="subheading"><?php echo $config['about_right_subtitle'];?></span>

                        <h2 class="mb-4"><?php echo $config['about_right_title'];?></h2>

                        <p><?php echo $config['about_right_desc'];?></p>
                    </div>
                </div>
                <div class="row ftco-counter py-5" id="section-counter">

                    <?php $counters=$config['counter_items'];
				foreach($counters as $counter){?>
                    <div
                        class="col-md-6 col-lg-4 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18">
                            <div class="text">
                                <strong
                                    class="number"
                                    data-number="<?php echo $counter['counter_item_number']?>">0</strong>
                            </div>
                            <div class="text">
                                <span>
                                    <?php echo $counter['counter_item_subtitle']; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>