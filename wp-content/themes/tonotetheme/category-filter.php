<div class="col-12 col-lg-9">
    <h4 class="mb-4">
        <?php the_archive_title(); ?>
    </h4>
    <div class="list-group d-flex flex-row overflow-auto py-2">
        <a href="#" class="list-group-item list-group-item-action active rounded-pill" aria-current="true"
            data-id="all">All</a>
        <?php
        // Get all categories
        $categories = get_categories();
        foreach ($categories as $category) {
            ?>
            <a href="#" class="list-group-item list-group-item-action rounded-pill"
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

                    <div class="col-md-9 order-md-1"><a class="text-dark title-link" href="readmore.php?id=4">


                            <a href="<?php the_permalink(); ?>" rel="bookmark">

                                <h5 class="header">
                                    <?php the_title(); ?>
                                </h5>
                            </a>
                            <p class="text-muted">
                                Posted By
                                <?php the_author(); ?> on <small>
                                    <?php the_time('M d, Y h:i:sa'); ?>
                                </small>
                                <a href="#">
                                    <?php echo get_the_category_list(','); ?>
                                </a>
                            </p>
                            <p class="line-clamp" style="text-align: justify;">
                                <?php wp_trim_words(get_the_excerpt(), 30); ?>
                        </a><small class=" ms-1 text-muted ">3 min read</small>
                    </div>

                    <div class="col-md-3 order-md-2 mb-3 mb-md-0">
                        <?php if (has_post_thumbnail()) { ?>
                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()) ?>" class="img-fluid rounded" height=""
                                alt="<?php the_title(); ?>" />
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

<?php
// Fetch and display posts based on the selected category
if (isset($_GET['category_id'])) {
    $category_id = intval($_GET['category_id']);
    $args = array(
        'cat' => $category_id,
        'posts_per_page' => -1,
    );
} else {
    $args = array(
        'posts_per_page' => -1,
    );
}

$custom_query = new WP_Query($args);

if ($custom_query->have_posts()):
    while ($custom_query->have_posts()):
        $custom_query->the_post();
        ?>
        <div class="row mb-4 py-4 " style="border-bottom: 1px solid #a49f9f9c">
            <!-- Your post content here -->
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
else:
    echo 'No posts found';
endif;
?>