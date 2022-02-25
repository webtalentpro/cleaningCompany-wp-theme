<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section ftco-intro"
    style="background-image: url('<?php echo $config['video_image']['url'] ?>);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h2><?php echo $config['video_title']; ?></h2>
                <a href="<?php echo $config['video_link']['url']; ?>" class="icon-video d-flex align-items-center justify-content-center">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>
</section>