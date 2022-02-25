<?php get_header(); 
/* Template Name: Pricing */
?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_url(get_template_directory_uri())?>/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
		<?php get_template_part( 'inc/bread', 'cam' ); ?>
        </div>
      </div>
    </section>
	<?php get_template_part( 'template-parts/section', 'pricing' ); ?>



<?php get_footer(); ?>