<?php
$hero = get_field('hero');
// print_r($hero); ?>
<section class="section w-100 bg-half-100 pb-0 d-table banner-bg">
    <div class="container">
        <div class="row align-items-center justify-content-start p-0">
            <div class="col-lg-6 col-md-12 col-12 col-xl-6">
                <div class="title-heading me-lg-4 animate__animated animate__slideInLeft">
                    <h1 class="mb-3 hero-header lg-screen">
                        <?php echo $hero['main_title'] ?? ''; ?>

                        <span class="text-primary">documents</span>.
                    </h1>
                    <h1 class="mb-3 hero-header sm-screen">
                        <?php echo $hero['main_title'] ?? ''; ?>
                        <span class="text-primary">documents</span>.
                    </h1>
                    <p class="para-desc">
                        <?php echo $hero['small_title'] ?? ''; ?>
                    </p>
                    <div class="mt-4 lg-screen">
                        <a href="<?php echo $hero['link'] ?? ''; ?>" target="blank"
                            class="btn btn-primary mt-2 me-2">Get
                            Started</a>
                    </div>
                    <div class="mt-4 sm-screen">
                        <a href="<?php echo $hero['link'] ?? ''; ?>" target="blank"
                            class="btn btn-primary mt-2 me-2 w-100">
                            <?php echo $hero['link_text'] ?? ''; ?>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 col-xl-6">
                <div class="mt-4">
                    <div class="">

                        <img src="<?php echo $hero['banner_image'] ?? ''; ?>"
                            class="img-fluid lg-screen animate__animated animate__zoomIn" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>