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
                        <span class="text-primary" id="changingText">documents</span>.
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
                        <a href="https://calendly.com/tonote-/tonote-demo" target="blank"
                            class="btn btn-outline-light mt-2 me-2">Request a Demo</a>
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
                <div class="mt-5">
                    <div class="pt-2">

                        <img src="<?php echo $hero['banner_image'] ?? ''; ?>"
                            class="img-fluid animate__animated animate__zoomIn" />

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const changingTextElement = document.getElementById('changingText');
        const textArray = ['Documents', 'Agreements', 'Forms'];
        let currentIndex = 0;

        function changeText() {
            changingTextElement.textContent = textArray[currentIndex];
            currentIndex = (currentIndex + 1) % textArray.length;
        }

        // Change text every 3 seconds (3000 milliseconds)
        setInterval(changeText, 3000);
    });

</script>