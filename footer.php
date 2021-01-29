<div class="container-fluid background--dark">
    <footer class="text-light">
        <div class="container py-3">
            <div class="row py-5">
                <div class="col-lg-4">
                    <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_1' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_2' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_3' ); ?>
                    <?php endif; ?>
                </div>
                <div class="col-lg-4">
                    <?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
                        <?php dynamic_sidebar( 'footer_4' ); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <span class="">
                        &copy; <?php echo date('Y'); ?> <?php echo get_bloginfo('name'); ?>
                    </span>
                </div>
            </div>
        </div>
    </footer>
</div>
</body>
</html>
