<?php get_header(); 
global $post;
$author_id = $post->post_author;
?>

<!-- END nav -->
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
                        <a href="<?php echo esc_url(home_url( )); ?>">Home
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </span>
                    <span>
                        Search Results
                        <i class="fa fa-chevron-right"></i>
                    </span>
                </p>
                <h1 class="mb-0 bread"><?php printf(__('Search Results: %s', 'cleaningcompany'), get_search_query(  ))?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row d-flex">
            <?php if(have_posts(  )) : ?>
            <?php while(have_posts(  )): the_post(  ); ?>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a
                        href="<?php the_permalink()?>"
                        class="block-20 rounded"
                        style="background-image: url('<?php echo the_post_thumbnail_url(  ); ?>');"></a>
                    <div class="text mt-3 px-4">
                        <div class="posted mb-3 d-flex">
                            <div class="img author">

                                <img src="<?php echo get_avatar_url( $author_id, ['size' => '51']); ?>"/>

                            </div>
                            <did class="desc pl-3">
                                <span>Posted by
                                    <?php the_author(); ?></span>
                                <span><?php the_time( 'd F Y' );?></span>
                            </div>
                            <h3 class="heading">
                                <a href="<?php the_permalink(  ); ?>"><?php the_title()?></a>
                            </h3>
                            <p>
                                <?php the_excerpt(  ); ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
                <?php endif; wp_reset_postdata(  ); ?>

            </div>

            <div class="row mt-5">
                <div class="col text-center">
                    <div class="block-27">
                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <?php the_posts_pagination( array( 'screen_reader_text'=> '', 'prev_text'=> '<i
                                class="fa fa-chevron-left" aria-hidden="true"></i>', 'next_text'=> '<i class="fa
                                fa-chevron-right" aria-hidden="true"></i>', ) ); ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>