<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-3 pr-md-4 pb-lg-0 pb-4">
                <div class="heading-section ftco-animate text-center text-lg-left">
                    <?php if($config['team_sec_subtitle']){?>
                    <span class="subheading"><?php echo $config['team_sec_subtitle']?></span>
                    <?php } ?>

                    <?php if($config['team_sec_title']){?>
                    <h2><?php echo $config['team_sec_title']?></h2>
                    <?php } ?>

                    <?php if($config['team_sec_desc']){?>
                    <p><?php echo $config['team_sec_desc']?></p>
                    <?php } ?>

                    <?php if($config['team_sec_btn_text']){?>
                    <p>
                        <a
                            href="<?php echo $config['team_sec_btn_link']['url']?>"
                            class="btn btn-secondary"><?php echo $config['team_sec_btn_text']?></a>
                    </p>
                    <?php } ?>
                </div>
            </div>
            <?php if($teams=$config['team_list']){
			foreach($teams as $team){?>

            <div class="col-md-4 col-lg-3 ftco-animate d-flex">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">

                        <div
                            class="img align-self-stretch"
                            style="background-image: url(<?php echo $team['team_member_image']['url'] ;?>)"></div>
                    </div>
                    <div class="text pt-3 px-3 pb-4 text-center">
                        <h3><?php echo $team['team_member_name'];?></h3>
                        <span class="position mb-2"><?php echo $team['team_member_job_title'];?></span>
                        <div class="faded">
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate">
                                    <a
                                        href="<?php echo $team['team_socail_facebook_link']['url'];?>"
                                        class="d-flex align-items-center justify-content-center">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>

                                <li class="ftco-animate">
                                    <a
                                        href="<?php echo $team['team_socail_twitter_link']['url'];?>"
                                        class="d-flex align-items-center justify-content-center">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>

                                <li class="ftco-animate">
                                    <a
                                        href="<?php echo $team['team_socail_linkedin_link']['url'];?>"
                                        class="d-flex align-items-center justify-content-center">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <?php }} ?>

        </div>
    </div>
</section>