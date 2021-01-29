<?php get_header(); ?>

    <section class="full bg-dark my-5 py-6 h-100">
        <div class="container-fluid">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <object type="image/svg+xml" data="<?php echo get_template_directory_uri(). '/dist/svg/' ?>wordpress-logo.svg">
                        </object>
                    </div>
                    <div class="col-lg-7">
                        <div class="pre-title mb-3 text-uppercase">WordPress Developer</div>
                        <h2 class="mb-4 lh-base text-wrap">I’m a Developer &amp; Designer with a like for WordPress &amp; WooCommerce.</h2>
                        <p class="fw-light lh-lg text-wrap w-75">
                            A flexible approach to your business needs and responsive communication will allow me to deliver your projects on time and to budget.
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();
            the_content();
        }
    } ?>

    <!-- Approach -->
    <section class="mt-5 py-5 background--light">
        <div class="container-fluid py-5">
            <div class="container">
                <!-- Approach: Intro -->
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <img src="<?php echo get_template_directory_uri() ?>/dist/img/agile-methodology.png" alt="">
                    </div>
                    <div class="col-lg-7">
                        <h2 class="mb-4 lh-base text-wrap">Agile approach for complex solutions</h2>
                        <p class="fw-light w-lg-75 mb-4 lh-lg text-wrap">
                            You’ll find premium WordPress & WooCommerce plugins sold here along with a few free ones. Some tutorials and some Laravel work. Also some developer resources I use consistantly.
                        </p>
                        <p class="fw-light w-lg-75 lh-lg">
                            I am currently in full-time employment, but working on premium WordPress plugins at my side business Maxigon.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid py-6">
            <div class="container">
                <!-- Approach: Freelance -->
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <h2 class="mb-4 lh-base text-wrap">Freelance Contracter with strong Client relationship</h2>
                        <p class="fw-light mb-4 lh-lg text-wrap">
                            You’ll find premium WordPress & WooCommerce plugins sold here along with a few free ones. Some tutorials and some Laravel work. Also some developer resources I use consistantly.
                        </p>
                        <p class="fw-light lh-lg">
                            I am currently in full-time employment, but working on premium WordPress plugins at my side business Maxigon.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        image
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
