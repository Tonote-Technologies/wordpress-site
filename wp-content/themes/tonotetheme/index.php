<?php
/* Template Name: ToNote Template */
get_header(); ?>
<style>
    /* Basic Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .pagination a,
    .pagination span {
        display: inline-block;
        padding: 8px 16px;
        margin: 0 4px;
        border: 1px solid #ccc;
        text-decoration: none;
        color: #333;
        background-color: #f8f8f8;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .pagination a:hover {
        background-color: #ddd;
    }

    .pagination .current {
        background-color: #0073ea;
        color: #fff;
    }

    /* Responsive Pagination Styling */

    @media screen and (max-width: 600px) {
        .pagination {
            flex-direction: column;
            align-items: center;
        }

        .pagination a,
        .pagination span {
            margin: 4px 0;
        }
    }
</style>
<section class="section w-100 bg-half-100 pt-5 pb-5 ">

    <div class="container mt-5 px-5">
        <div class="row">
            <?php
            $args = array(
                'posts_per_page' => 1,
                'order' => 'DESC',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    ?>

                    <div class="col-md-6 featured-post order-md-1 order-2  d-flex justify-content align-items-center">
                        <div class="p-5">
                            <div class="card-body">
                                <h5 class="card-title title truncate-text-2">
                                    <?php the_title(); ?>
                                </h5>
                                <div class="card-text body text-light py-2">
                                    <?php if (the_excerpt() ? the_excerpt() : wp_trim_words(get_the_excerpt(), 40))
                                        ; ?>
                                </div>
                                <p class="card-text"><small class="text-muted">
                                        <?php the_time('M d, Y h:i:sa'); ?>
                                    </small></p>
                                <div>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-light">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 p-0 order-md-2 order-1">
                        <?php if (get_the_post_thumbnail_url()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="w-100 rounded featured-img"
                                height="" alt="<?php the_title(); ?>" />
                        <?php } else { ?>
                            <img src="<?php bloginfo('template_directory'); ?>/assets/images/banner.jpg" height="500"
                                alt="<?php the_title(); ?>" class="w-100 rounded featured-img" />
                        <?php } ?>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            } else {
                echo 'No posts found';
            }
            ?>
        </div>
    </div>
</section>

<section class="d-none">
    <div class="container">
        <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">

            <?php
            // Get all categories
            $categories = get_categories();
            foreach ($categories as $category) {
                ?>
                <li class="nav-item" role="<?php echo esc_html($category->name); ?>">
                    <button class="nav-link active" id="<?php echo esc_html($category->name); ?>-tab" data-bs-toggle="tab"
                        data-bs-target="#<?php echo esc_html($category->name); ?>-tab-pane" type="button" role="tab"
                        aria-controls="<?php echo esc_html($category->name); ?>-tab-pane" aria-selected="true">
                        <?php echo esc_html($category->name); ?> (
                        <?php echo esc_html($category->count); ?>)
                    </button>

                </li>


            <?php } ?>
        </ul>

    </div>
</section>

<section>
    <div class="container my-5 px-5">
        <div class="row">
            <!-- Article Section (full width on small screens) -->
            <div class="col-12 col-lg-9">
                <h4 class="mb-4">Other Articles
                    <?php //the_archive_title(); ?>
                </h4>
                <div class="list-group d-flex flex-row overflow-auto py-2" id="categoryList">
                    <a href="<?php echo site_url('blog'); ?>"
                        class="list-group-item list-group-item-action active rounded-pill" aria-current="true"
                        data-id="all">All</a>
                    <?php
                    // Get all categories
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        ?>
                        <a href="<?php echo esc_html($category->slug); ?>"
                            class="list-group-item list-group-item-action rounded-pill"
                            data-id="<?php echo esc_attr($category->term_id); ?>">
                            <?php echo esc_html($category->name); ?> (
                            <?php echo esc_html($category->count); ?>)
                        </a>
                    <?php } ?>
                </div>

                <div id="articleList" class="bg-white mt-3 pb-1 container">
                    <?php

                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            ?>
                            <div class="row mb-4 py-4 " style="border-bottom: 1px solid #a49f9f9c">
                                <div class="col-md-9 order-md-1">
                                    <a class="text-dark title-link" href="#">
                                        <a class="text-dark title-link"
                                            href="<?php the_permalink(); ?>?category=<?php echo esc_attr(get_first_category_slug()); ?>"
                                            rel="bookmark">
                                            <h5 class="header">
                                                <?php the_title(); ?>
                                            </h5>
                                        </a>
                                        <p class="text-muted">
                                            Posted By
                                            <?php the_author(); ?> on <small>
                                                <?php the_time('M d, Y h:i:sa'); ?>
                                            </small>
                                            <?php echo get_the_category_list(','); ?>

                                        </p>
                                        <p class="line-clamp" style="text-align: justify;">
                                            <?php if (the_excerpt() ? the_excerpt() : wp_trim_words(get_the_excerpt(), 40))
                                                ; ?>
                                    </a><small class=" ms-1 text-muted ">3 min read</small>
                                </div>

                                <div class="col-md-3 order-md-2 mb-3 mb-md-0">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="img-fluid rounded"
                                            height="" alt="<?php the_title(); ?>" />
                                    <?php } else { ?>
                                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/thumbnail.png" alt=""
                                            class="<?php the_title(); ?>" />
                                    <?php } ?>
                                </div>
                            </div>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                        echo 'No posts found';
                    endif;
                    ?>
                    <div class="d-flex justify-content-end">
                        <div class="pagination">
                            <?php echo paginate_links(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php //get_template_part('category-filter'); ?>
            <div class="col-12 col-lg-3 mb-4 mb-lg-0">
                <div class="">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title text-center border-bottom text-uppercase"><strong>Newsletter</strong>
                            </div>
                            <p class="card-text" style="font-size:14px; text-align: justify;">Subscribe to our monthly
                                newsletter to stay updated on the latest news and events.</p>
                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email"
                                        placeholder="Enter your email address">
                                </div>
                                <div class="">
                                    <button type="submit" class="w-100 btn btn-primary rounded-pill">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title  text-center border-bottom text-uppercase">
                                <strong>Follow us on social media</strong>
                            </div>
                            <p class="card-text" style="font-size:14px; text-decoration: justify; text-align: justify;">
                                Stay connected with us on social media and be the first to know about our latest news
                                and updates.
                            </p>
                            <div class="d-flex justify-content-between border-top pt-2">
                                <a href="https://www.instagram.com/mytonote/" class="btn btn-sm "><i
                                        class="fab fa-instagram"></i> </a>
                                <a href="https://twitter.com/gettonote?s=11" class="btn btn-sm "><i
                                        class="fab fa-twitter"></i> </a>
                                <a href="https://www.linkedin.com/company/gettonote" class="btn "><i
                                        class="fab fa-linkedin"></i> </a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="px-4 border card d-none">
                <h4 class="">Related Article</h4>
                <div class="row mb-4 py-4 " style="border-bottom: 1px solid #a49f9f9c">
                    <div class="col-lg-12 col-md-3 order-md-1 mb-3 mb-md-0">
                        <img src="/tonote-landing/uploads/thumb_09052023100450sign.jpg"
                            class="img-fluid rounded shadow-4-strong">
                    </div>
                    <div class="col-lg-12 col-md-9 order-md-2">
                        <a class="text-dark title-link" href="readmore.php?id=21">
                            <h6 class="mt-2 text-truncate header">Things to note when notarizing a document</h6>
                            <p class="text-muted"><small>9th May, 2023 09:31:am</small></p>
                            <p class="line-clamp">It's important to note that the specific requirements for notarizing a
                                document can vary depending on the jurisdiction and the type of document being
                                notarized. It's always a good idea to consult with a notary public or legal professional
                                if you have</p>
                        </a>
                        <a class="category-label  text-muted">ThingsToNote</a>
                        <small class="ms-1 text-muted">3 min read</small>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>