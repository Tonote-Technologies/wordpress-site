<?php
/* Template Name: Single Post Template */
get_header(); ?>

<section class="section w-100 bg-half-100">

    <div class="container mt-lg-1 mt-5 px-5">

        <div class="row">
            <?php while (have_posts()) {
                the_post(); ?>
                <div class="col-12 py-lg-1 py-4 ">
                    <div class="">
                        <a href="<?php echo site_url('blog') ?>" class="btn btn-sm btn-outline-primary">&lt;&lt; Back</a>
                    </div>

                </div>
            <?php } ?>
            <!-- Article Section (full width on small screens) -->
            <div class="col-12 col-lg-9 card">
                <h4 class="mb-1 pt-2 border-bottom">

                    <?php the_title(); ?>
                </h4>
                <div class="d-flex justify-content-between">
                    <div class="text-muted mb-2">
                        Posted by |
                        <?php the_author(); ?><small> | Aug 23, 2023</small>
                    </div>


                    <div class="social-share ">
                        <button class="btn btn-sm  py-0" id="openModalButton">Share <iconify-icon
                                icon="uil:share"></iconify-icon></button>
                        <button class="btn btn-sm btn-outline-primary py-0 d-none share-button"
                            data-platform="facebook">
                            <iconify-icon icon="brandico:facebook"></iconify-icon>
                        </button>
                        <button class="btn btn-sm btn-outline-primary py-0 d-none share-button" data-platform="twitter">
                            <iconify-icon icon="entypo-social:twitter"></iconify-icon>
                        </button>
                        <button class="btn btn-sm btn-outline-primary py-0 d-none share-button"
                            data-platform="instagram">
                            <iconify-icon icon="fontisto:instagram"></iconify-icon>
                        </button>
                    </div>

                </div>
                <div class="p-1">
                    <?php if (get_the_post_thumbnail_url()) { ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="w-100 rounded featured-img"
                            height="" alt="<?php the_title(); ?>" />
                    <?php } else { ?>
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner.jpg" height="500"
                            alt="<?php the_title(); ?>" class="w-100 rounded featured-img" />
                    <?php } ?>
                </div>

                <div class="blog-content py-4">
                    <p id="isPasted">
                        <?php echo the_content(); ?>
                    </p>
                </div>
                <div class="form-control">
                    <?php echo comment_form(); ?>
                </div>
            </div>

            <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                <div class="px-4 border card" style="overflow-y: auto; max-height: 700px;">
                    <h4 class="pt-2 border-bottom">Related Article</h4>
                    <div class="row mb-4 pt-1 pb-4 " style="border-bottom: 1px solid #a49f9f9c">
                        <?php
                        $cat_slug = 'legal'; // Default category slug, set to an actual category slug or leave empty for all posts
                        
                        if (isset($_GET['category']) && !empty($_GET['category'])) {
                            $cat_slug = sanitize_text_field($_GET['category']);
                        }

                        $args = array(
                            'category_name' => $cat_slug,
                            'posts_per_page' => -1, // Use -1 to display all posts
                        );

                        $custom_query = new WP_Query($args);

                        if ($custom_query->have_posts()):
                            ?>
                            <div class="col-lg-12 col-md-3 order-md-1 mb-3 mb-md-0">


                                <?php if (get_the_post_thumbnail_url()) { ?>
                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>"
                                        class="img-fluid rounded shadow-4-strong" height="" alt="<?php the_title(); ?>" />
                                <?php } else { ?>
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner.jpg" height="500"
                                        alt="<?php the_title(); ?>" class="img-fluid rounded shadow-4-strong" />
                                <?php } ?>
                            </div>

                            <div class="col-lg-12 col-md-9 order-md-2">
                                <?php
                                while ($custom_query->have_posts()):
                                    $custom_query->the_post();
                                    ?>
                                    <a id="post-<?php the_ID(); ?>" class="text-dark title-link" href="<?php the_permalink() ?>"
                                        <?php post_class('single-post'); ?>>

                                        <h6 class="mt-2 text-truncate header">
                                            <?php the_title(); ?>
                                        </h6>
                                        <p class="text-muted"><small>
                                                <?php the_author(); ?> |
                                                <?php the_date(); ?>
                                            </small></p>
                                        <p class="line-clamp">
                                            <?php if (the_excerpt() ? wp_trim_words(the_excerpt(), 20) : wp_trim_words(get_the_excerpt(), 20))
                                                ; ?>
                                        </p>
                                    </a>
                                    <?php
                                endwhile;
                                ?>
                            </div>
                            <?php
                            wp_reset_postdata(); // Reset the query
                        else:
                            echo 'No posts found';
                        endif;
                        ?>












                        <!-- <div class="col-lg-12 col-md-3 order-md-1 mb-3 mb-md-0">
                            <img src="/page//uploads/main_08082023091828elevatecustomer.jpeg"
                                class="img-fluid rounded shadow-4-strong">
                        </div>
                        <div class="col-lg-12 col-md-9 order-md-2">
                            <a class="text-dark title-link" href="readmore.php?id=21">
                                <h6 class="mt-2 text-truncate header">Elevate Customer Experience: 5 Ways Electronic
                                    Signatures Can Transform Your Business</h6>
                                <p class="text-muted"><small>Aug 08, 2023</small></p>
                                <p class="line-clamp"> Discover five game-changing ways to improve customer experience
                                    by adopting electronic signatures. Streamline operations, boost efficiency, and
                                    build trust with secure and eco-friendly practices.</p>
                            </a>
                            <a class="category-label  text-muted">Electronic signatures</a>
                            <small class="ms-1 text-muted">3 min read</small>
                        </div> -->
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>
<script>
    $("#submit").addClass('btn btn-primary');
    $("#comment").addClass('form-control');
    $("label").addClass('w-100');

</script>