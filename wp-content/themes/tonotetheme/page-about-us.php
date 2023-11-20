<?php
/**
 * The template for displaying About page
 *
 * @link http://localhost/tonote_wordpress/about-us/
 *
 */
get_header(); ?>
<section class="section  banner-bg py-5 bg-light">
    <div class="container mt-60 my-5 text-center">
        <div class="h1-content">
            We are on a mission to simplify the way people agree and foster trust.</div>

        <div class="container mt-60 lg-screen">
            <div class="col-lg-12 col-md-12">
                <a href="https://gettonote.com/page/signup.php" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/about.png"
                        class="img-fluid animate__animated animate__zoomIn" alt="">
                </a>
            </div>
        </div>
        <div class="container mt-60 sm-screen">
            <div class="col-lg-12 col-md-12">
                <a href="https://gettonote.com/page/signup.php" target="_blank">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/about.png"
                        class="img-fluid animate__animated animate__zoomIn" alt="">
                </a>
            </div>
        </div>
</section>

<section class="section  py-5">
    <div class="container mt-60 ">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <h3 class="counter-text">2000+</h3>
                <div class="counter-text-head">
                    Transaction Closed</div>
                <div class="counter-text-desc">
                    Our platform has been used to sign over 2,000 docs and close amazing deals.</div>
            </div>
            <div class="col-lg-3 col-md-12">
                <h3 class="counter-text">10k</h3>
                <div class="counter-text-head">Notary publics</div>
                <div class="counter-text-desc">Our platform have onboarded over 10k notary publics that are readily
                    available for your doc notarizations.</div>
            </div>
            <div class="col-lg-3 col-md-12">
                <h3 class="counter-text">5k</h3>
                <div class="counter-text-head">Global usage</div>
                <div class="counter-text-desc">Our platform is being used by over 5k users.</div>
            </div>
            <div class="col-lg-3 col-md-12">
                <h3 class="counter-text">200+</h3>
                <div class="counter-text-head">5-star reviews</div>
                <div class="counter-text-desc">We’re proud of our 5-star rating with over 200 reviews.</div>
            </div>
        </div>
    </div>
</section>

<section class="section w-100 bg-half-100">
    <div class="container ">
        <div class="row row-style">
            <div class="col-lg-6 col-md-6 col-12 order-1 order-lg-0 g-0 image-aside">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/about-illustrator.png"
                    class="img-fluid lg-screen" alt="">

            </div>

            <div class=" col-lg-6 col-md-6 col-12 order-0 order-lg-0 g-0 col-container">
                <div style="first-container">
                    <div style="first-sub-container">

                        <div class="product-title my-2">
                            THE COMPANY</div>
                    </div>
                    <div class="prod-description my-2">
                        Imagine a world where every transaction and document shared can be trusted.
                        <br>
                        <br>
                        ToNote was founded with a mission to simplify the way people agree and foster trust.
                        <br>
                        <br>
                        The result - Trust made easy.
                    </div>
                </div>

                <div class="second-container">
                    <div class="btn btn-outline-dark">Read more</div>

                </div>
            </div>


        </div>
    </div>
</section>

<?php include(get_theme_file_path('/get_started.php')); ?>
<?php get_footer(); ?>