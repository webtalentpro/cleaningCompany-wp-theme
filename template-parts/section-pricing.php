<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading mb-3">
                    <?php echo $config['plan_section_subtitle']; ?></span>
                <h2><?php echo $config['plan_section_title']; ?></h2>
            </div>
        </div>
        <div class="row">
            <?php if($plans=$config['plan_package_group']){ foreach ($plans as $plan) { ?>

            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="block-7">
                    <div class="text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="<?php echo $plan['package_icon'] ?>"></span>
                        </div>
                        <h4 class="heading-2"><?php echo $plan['package_title'] ?></h4>
                        <span class="price">
                            <sup>$</sup>
                            <span class="number"><?php echo $plan['package_price'] ?></span>
                        </span>

                        <ul class="pricing-text mb-5">
                            <li>
                                <?php echo $plan['package_feature'] ?>
                            </li>
                        </ul>

                        <a
                            href="<?php echo $plan['package_btn_link']['url'] ?>"
                            class="btn btn-primary px-4 py-3"><?php echo $plan['package_btn_text'] ?></a>
                    </div>
                </div>
            </div>

            <?php }} ?>

        </div>
    </div>
</section>