<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div class="wrap">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md d-flex align-items-center">
                        <p class="mb-0 phone">

                            <?php $config=get_option('cleaning_framework' )?>

                            <?php if($config['header-phone']){?>
                            <span class="mailus"><i class="fa fa-phone"></i></span>
                            <a href="#"> <?php echo $config['header-phone'] ?></a>
                           <?php } ?>
                           &nbsp;

                          <?php if($config['header-email']){?>
                            <span class="mailus"><i class="fa fa-envelope"></i></span>
                            <a href="#"><?php echo $config['header-email']; ?></a>
                            <?php } ?>
                        </p>
                    </div>
                    <div class="col-12 col-md d-flex justify-content-md-end">
                        <div class="social-media">
                            <p class="mb-0 d-flex">

                                <?php $header_icons=$config['header_social_group'];
                                foreach($header_icons as $icon){?>

                                <?php if($icon['header_social_icon']){?>

                                <a href="<?php echo $icon['header_social_url']; ?>" class="d-flex align-items-center justify-content-center">
                                    <span class="<?php echo $icon['header_social_icon']; ?>">
                                        <i class="sr-only">Facebook</i>
                                    </span>
                                </a>
                                <?php } }?>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav
            class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light"
            id="ftco-navbar">
            <div class="container">
                <?php $site_logo=$config['header_logo']; ?>
                <a class="navbar-brand" href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo $site_logo['url'];  ?>" >
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#ftco-nav"
                    aria-controls="ftco-nav"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                    Menu
                </button>
                <?php wp_nav_menu( array( 'menu' => 'primary_menu',
				'theme_location'=>'primary_menu', 
				'container'=> 'div', 
				'container_id'=>'ftco-nav',
                'container_class'=>'collapse navbar-collapse', 
				'menu_id'=>false, 
				'menu_class'=> 'navbar-nav ml-auto', 'depth'=> 2, 
				'fallback_cb'=>'bs4navwalker::fallback', 
				'walker'=> new bs4navwalker(), ) ); ?>
                                    
         
         
        </nav>