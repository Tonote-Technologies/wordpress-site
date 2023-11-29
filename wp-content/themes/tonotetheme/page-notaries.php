<?php $page_title = "Notaries";
get_header();

$hero = get_field('hero');
$about = get_field('about_section');
$notary_academy = get_field('notary_academy');

?>

<section class="section  banner-bg py-5 bg-light">
    <div class="container mt-60 my-5 text-center">
        <div class="h1-content">
            <?php echo $hero['main_title'] ?? "" ?>
        </div>

        <div class="container mt-60 lg-screen">
            <div class="col-lg-12 col-md-12">
                <a href="#" target="_blank">

                    <img src="<?php echo $hero['banner_image'] ?? "" ?>"
                        class="img-fluid animate__animated animate__zoomIn"
                        alt="<?php echo $hero['main_title'] ?? "" ?>">

                </a>
            </div>
        </div>
        <div class="container mt-60 sm-screen">
            <div class="col-lg-12 col-md-12">
                <a href="<?php site_url('notaries'); ?>" target="_blank">
                    <img src="<?php echo $hero['banner_image'] ?? "" ?>"
                        class="img-fluid animate__animated animate__zoomIn"
                        alt="<?php echo $hero['main_title'] ?? "" ?>">
                </a>
            </div>
        </div>
</section>

<section class="section border-bottom bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2 text-center">
                    <h2 class="text-light">
                        <?php echo $about['main_title'] ?? "" ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row text-light text-center">
            <p>
                <?php echo $about['sub_title'] ?? "" ?>
            </p>
            <div class="btn-route"><a href="<?php echo $about['link'] ?? "" ?>" class="btn btn-light my-2 fw-normal">
                    <?php echo $about['link_text'] ?? "" ?>
                </a></div>
        </div>
    </div>
</section>


<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mt-4 pt-2 order-1 order-lg-0">
                <div class="section-title ms-lg-2 p-2">
                    <p class="big-text">
                        <?php echo $notary_academy['main_title'] ?? "" ?>
                    </p>
                    <p class="small-text">
                        <?php echo $notary_academy['sub_text'] ?? "" ?>
                    </p>
                    <div class="route-link">
                        <a href="<?php echo $notary_academy['classroom_link'] ?? "" ?>"
                            class="btn btn-primary p-3"><span>
                                <?php echo $notary_academy['classroom_text'] ?? "" ?>
                            </span><span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M13.707 5.293l6 6a1 1 0 010 1.414l-6 6-1.414-1.414L16.586 13H4v-2h12.586l-4.293-4.293 1.414-1.414z"
                                        fill="currentColor"></path>
                                </svg></span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4 pt-2 order-0 order-lg-1">
                <div class="p-5"><img src="<?php echo $notary_academy['notary_image'] ?? "" ?>" class="img-fluid"
                        alt=""></div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 mt-4 pt-2">
                <div class="p-2"><img
                        src="<?php bloginfo('template_directory'); ?>/assets/images/illustrator/for-notary-2.png"
                        class="img-fluid" width="500" alt=""></div>
            </div>
            <div class="col-lg-6 col-md-6 mt-4 pt-2">
                <div class="section-title ms-lg-2 p-2">
                    <h1>Getting Started</h1>
                    <p>Boost your notary earnings by following these simple steps:</p>
                    <table class="table mytable">
                        <tbody>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td>Sign up for free and upload your credentials</td>
                            </tr>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td>Complete short e-notary training program</td>
                            </tr>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td>Complete your profile to attract the best clients</td>
                            </tr>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td>Set your notary schedule and filter through requests</td>
                            </tr>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td> Host real-time notary sessions , via in-built video conferencing tool </td>
                            </tr>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td>Get paid per notary transaction</td>
                            </tr>
                            <tr>
                                <td><img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/orange-marker.png"
                                        width="15"></td>
                                <td> Access all notarised documents and recorded sessions at any time </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


<?php include('get_started.php') ?>
<?php get_footer() ?>