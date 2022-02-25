<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading"><?php echo $config['service_section_subtitle'];?></span>
                <h2><?php echo $config['service_section_title'];?></h2>
            </div>
        </div>
        <div class="row">
            <?php if($services=$config['service_items_group']){ foreach($services as
            $service){?>

            <div class="col-md-6 col-lg-4 services ftco-animate">
                <div class="d-block d-flex">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="<?php echo $service['service_item_icon']?>"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading"><?php echo $service['service_item_title']?></h3>
                        <p><?php echo $service['service_item_desc']?>
                        </p>

                    </div>
                </div>
            </div>
            <?php }} ?>

        </div>
    </div>
</section>