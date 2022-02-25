<footer class="footer ftco-section">
    <div class="container">
        <div class="row">
          <?php dynamic_sidebar( 'sidebar-2' ); ?>
          <?php dynamic_sidebar( 'sidebar-3' ); ?>
          <?php dynamic_sidebar( 'sidebar-4' ); ?>
          <?php dynamic_sidebar( 'sidebar-5' ); ?>

        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">

                <p class="copyright">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <?php $config=get_option('cleaning_framework' )?>
                  <?php echo $config['copyright_text']; ?>

              </p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px"><circle
        class="path-bg"
        cx="24"
        cy="24"
        r="22"
        fill="none"
        stroke-width="4"
        stroke="#eeeeee"/><circle
        class="path"
        cx="24"
        cy="24"
        r="22"
        fill="none"
        stroke-width="4"
        stroke-miterlimit="10"
        stroke="#F96D00"/></svg>
</div>
<?php wp_footer(); ?>
</body>
</html>