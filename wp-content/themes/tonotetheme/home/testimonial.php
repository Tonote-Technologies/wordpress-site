<?php $testimonial = get_field('testimonial'); ?>
<?php if (have_rows('testimonial')): ?>
    <section class="section-slide">
        <div class="container-fluid bg-light ">
            <h2 class="text-center">See what our users are saying</h2>
            <div class="container py-4">
                <div class="row align-items-center">
                    <div class="col-lg-1 col-sm-12">Clients Testimonials</div>
                    <div class="col-lg-11 col-sm-12">
                        <section class="testimonial-wrap">
                            <?php foreach ($testimonial as $row) { ?>
                                <div class="card m-2 border py-4 px-2">
                                    <div class="card-wrap">
                                        <div class="card-body ">
                                            <p class="">
                                                <?php echo $row['testimony'] ?>
                                            </p>
                                            <p class="py-2 text-primary">
                                                <?php echo $row['customer_name'] ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>