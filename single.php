<?php get_header(); 
global $post;
$author_id = $post->post_author;

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
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> </div>
                <div class="col-lg-8 ftco-animate">
                    <p>
                        <img src="<?php echo the_post_thumbnail_url( ) ?>" class="img-fluid">
                    </p>
                    <h2 class="mb-3"><?php the_title(); ?></h2>

                    <?php the_content();?>

                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <?php wp_tag_cloud(  );?>

                        </div>
                    </div>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-4">
                            <img
                                src="<?php echo get_avatar_url( $author_id, ['size'=>' 71'] ); ?>"
                                alt="Image placeholder"
                                class="img-fluid mb-4">
                        </div>
                        <div class="desc">
                            <h3><?php echo get_the_author_meta('display_name', $author_id ); ?></h3>
                            <p><?php echo get_the_author_meta( 'description', $author_id ); ?></p>
                        </div>
                    </div>

                    <div class="comment-form-wrap pt-5">
                        <?php if(comments_open( ) || get_comments_number( )) : comments_template( );
                        endif; ?>
                    </div>
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