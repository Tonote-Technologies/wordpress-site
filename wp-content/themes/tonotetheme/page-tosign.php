<?php get_header(); ?>

<section class="section  banner-bg py-5 bg-light">
    <div class="container mt-60 my-5">
        <div class="row align-items-center justify-content-start p-0">
            <div class="col-lg-6 col-md-12 col-12 col-xl-6">
                <div class="title-heading me-lg-4 animate__animated animate__slideInLeft">
                    <h1 class="mb-3 hero-header lg-screen">
                        Document Signing Made Easy
                    </h1>
                    <h1 class="mb-3 hero-header sm-screen">
                        Document Signing Made Easy.
                    </h1>
                    <p class="para-desc">
                        Sign Documents online in just a few clicks
                    </p>

                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-12 col-xl-6">
                <div class="mt-4">
                    <div class="">
                        <?php include('dropzone.php') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="section-title mb-4 pb-2 text-center">
                    <div class="title2" style="display: inline-block;"> Welcome to ToSign </div>
                    <div class="text-center text-light">
                        Your one-stop tool for document signings and management. Elevate your workflow with our secure
                        platform, and quickly sign and share your documents with teammates. Join thousands of satisfied
                        users who trust ToSign for a seamless and legally binding signing experience
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/tosign-banner.png"
                    class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>


<section class="section upload-document">
    <div class="container">
        <h2 class="text-center mb-5">Simple Steps for Signing a Document</h2>
        <div class="row">
            <div class="col-lg-6  my-5">
                <div
                    style="width: 100%; height: 100%; border-radius: 24px; overflow: hidden; flex-direction: column; justify-content: center; align-items: flex-start; gap: 32px; display: inline-flex">
                    <div
                        style="width: 72px; height: 72px; padding: 24px; background: #003BB3; border-radius: 200px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div
                            style="color: white; font-size: 32px; font-family: Poppins; font-weight: 300; line-height: 30px; word-wrap: break-word">
                            01</div>
                    </div>
                    <div
                        style="width: 464px; height: 124px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                        <div
                            style="align-self: stretch; color: black; font-size: 36px; font-family: Inter; font-weight: 600; line-height: 44px; word-wrap: break-word">
                            Upload Your Document</div>
                        <div class=""
                            style="width: 464px; color: #343A47; font-size: 20px; font-family: Inter; font-weight: 400; line-height: 30px; word-wrap: break-word">
                            Easily upload your document in one of our supported formats, such as PDF, Word, or others
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class=" py-3"
                    style="width: 100%; height: 100%; position: relative; background: #E5EBF7; border-radius: 16px">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/image-1.png"
                        class="img-fluid" />
                </div>
            </div>

        </div>
    </div>
</section>

<!-- <div class="text-center border">
    <div
        style="width: 100%; height: 100%; transform: rotate(24.74deg); transform-origin: 0 0; border: 2px #B3B9C6 dotted">
    </div>
</div> -->

<section class="section add-participant">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ps-5 py-3 pe-0"
                    style="width: 100%; height: 100%; position: relative; background: #FBF4EA; border-radius: 16px">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/image-2.png"
                        class="img-fluid" />
                </div>

            </div>
            <div class="col-lg-6  my-5">
                <div
                    style="width: 100%; height: 100%; border-radius: 24px; overflow: hidden; flex-direction: column; justify-content: center; align-items: flex-start; gap: 32px; display: inline-flex">
                    <div
                        style="width: 72px; height: 72px; padding: 24px; background: #DB922B; border-radius: 200px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div
                            style="color: white; font-size: 32px; font-family: Poppins; font-weight: 300; line-height: 30px; word-wrap: break-word">
                            02</div>
                    </div>

                    <div class=""
                        style="width: 464px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                        <div
                            style="align-self: stretch; color: black; font-size: 36px; font-family: Inter; font-weight: 600; line-height: 44px; word-wrap: break-word">
                            Add Participants and annotate tools</div>
                        <div
                            style="width: 464px; color: #343A47; font-size: 20px; font-family: Inter; font-weight: 400; line-height: 30px; word-wrap: break-word">
                            Ensure security and compliance by verifying your identity using a valid ID card
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<section class="section submit-document">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  my-5">
                <div
                    style="width: 100%; height: 100%; border-radius: 24px; overflow: hidden; flex-direction: column; justify-content: center; align-items: flex-start; gap: 32px; display: inline-flex">
                    <div
                        style="width: 72px; height: 72px; padding: 24px; background: #6790E9; border-radius: 200px; justify-content: center; align-items: center; gap: 10px; display: inline-flex">
                        <div
                            style="color: white; font-size: 32px; font-family: Poppins; font-weight: 300; line-height: 30px; word-wrap: break-word">
                            03</div>
                    </div>

                    <div
                        style="width: 464px; height: 124px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 20px; display: flex">
                        <div
                            style="align-self: stretch; color: black; font-size: 36px; font-family: Inter; font-weight: 600; line-height: 44px; word-wrap: break-word">
                            Send / Submit Document </div>
                        <div class=""
                            style="width: 464px; color: #343A47; font-size: 20px; font-family: Inter; font-weight: 400; line-height: 30px; word-wrap: break-word">
                            Schedule a convenient signing session or start an immediate session to sign your document
                            effortlessly
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class=" py-3"
                    style="width: 100%; height: 100%; position: relative; background: #E5EBF7; border-radius: 16px">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banners/image-3.png"
                        class="img-fluid" />
                </div>
            </div>

        </div>
    </div>
</section>
<section class=""
    style="width: 100%; height: 100%; padding-left: 32px; padding-right: 32px; padding-top: 60px; padding-bottom: 60px; background: #F6F9FF; flex-direction: column; justify-content: flex-start; align-items: center; gap: 73px; display: inline-flex">
    <div class="container">
        <h2 class="text-center mb-5">Simple Steps for Signing a Document</h2>
        <div class="row">
            <div class="col-lg-4">
                <div class="text-center my-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/icon-lock-1.png" width="90" />
                </div>
                <div
                    style="width: 100%; text-align: center; color: #101828; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 30px; word-wrap: break-word">
                    Secure and Legally Binding Signatures</div>
                <div
                    style="width: 100%; text-align: center; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                    With the Evidence Act and our encryption technology, your documents are safe and legally binding.
                </div>
            </div>
            <div class="col-lg-4">
                <!-- icon-file -->
                <div class="text-center my-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/icon-step.png" width="90" />
                </div>
                <div
                    style="width: 100%; text-align: center; color: #101828; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 30px; word-wrap: break-word">
                    Simple Three-Step Process</div>
                <div
                    style="width: 100%; text-align: center; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                    Sign documents in minutes with just a few clicks
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text-center my-3">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/icon/icon-file-1.png" width="90" />
                </div>
                <div
                    style="width: 100%; text-align: center; color: #101828; font-size: 20px; font-family: Inter; font-weight: 600; line-height: 30px; word-wrap: break-word">
                    Support for Multiple File Formats</div>
                <div
                    style="width: 100%; text-align: center; color: #475467; font-size: 16px; font-family: Inter; font-weight: 400; line-height: 24px; word-wrap: break-word">
                    Easily upload documents in popular formats such as PDF, Word, and more.
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("get_started.php") ?>
<?php get_footer(); ?>