<?php $config=get_option('cleaning_framework' )?>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-5 mb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">News &amp; Blog</span>
                <h2>Latest News</h2>
            </div>
        </div>
        <div class="row d-flex">
			<?php $args=array(
				'post_type'=> 'post',
				'posts_per_page'=>3,
				'order'=> 'ASC'
			);
			$query=new WP_Query($args);
			while($query->have_posts(  )){
				$query->the_post(  );
				?>
            <div class="col-md-6 col-lg-4 d-flex ftco-animate">
                <div class="blog-entry align-self-stretch">
                    <a
                        href="blog-single.html"
                        class="block-20 rounded"
                        style="background-image: url(<?php echo the_post_thumbnail_url( ) ?>)"></a>
                    <div class="text mt-3 px-4">
                        <div class="posted mb-3 d-flex">
							<?php global $post; $author_id = $post->post_author; ?>
                            <div
                                class="img author"
                                style="background-image: url(<?php echo get_avatar_url($author_id )?>)"></div>
                            <div class="desc pl-3">
                                <span>Posted by <?php the_author(); ?></span>
                                <span><?php the_time('d F Y'); ?></span>
                            </div>
                        </div>
                        <h3 class="heading">
                            <a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p>
                            <?php the_excerpt(  )?></p>
                    </div>
                </div>
            </div>
			<?php } wp_reset_postdata(  ); ?>
		
        </div>
    </div>
</section>
