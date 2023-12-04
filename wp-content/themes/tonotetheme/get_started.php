<?php

$head = isset($page_title) && $page_title == "For lawyers" ? "Level up your legal practice with ToNote" : "Getting started is easy";
$desc = isset($page_title) && $page_title == "For lawyers" ? "Want to learn more on how to level up your legal practice with ToNote" : "Contact us to find out more about our signature and <br> notary solutions for your personal or business needs.";
$btnContent = isset($page_title) && $page_title == "For lawyers" ? "Get our free resource" : "Request a demo";
// 
// Accelerate your workflow with e-signatures and remote notarization.
?>
<section class="section w-100 bg-half-100 blue-bg">
    <div class="container p-4">
        <div class="row row-style">
            <div class=" col-lg-7 col-md-6 col-12 order-0 order-lg-0 g-0 col-container">
                <div style="first-container">
                    <div style="first-sub-container">
                        <div class="product-title text-white my-2">
                            <?= $head ?>
                        </div>
                    </div>
                    <div class="prod-description text-light my-2">
                        <?= $desc ?>

                    </div>
                </div>

                <div class="second-container">
                    <a href="https://calendly.com/tonote-/tonote-demo" target="_blank" class="btn btn-light">
                        <?= $btnContent ?>
                    </a>
                </div>
            </div>

            <div class="col-lg-5 col-md-6 col-12 order-1 order-lg-0 g-0 d-flex justify-content-end">
                <img src="<?php bloginfo('template_directory'); ?>/assets/images/illustrator/phone-content.png"
                    style="height:600px;" class="lg-screen" alt="" />
            </div>

        </div>
    </div>
</section>