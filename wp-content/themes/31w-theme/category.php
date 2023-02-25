<?php get_header(); ?>

<main class="site__main">
    <section class="blocflex">
        <?php
            $category = get_queried_object();
            $args = [
                "category_name" => $category->slug,
                "orderby" => "title",
                "order" => "ASC"
            ];
            $query = new WP_Query($args);
            while ($query->have_posts())
            {
                $query->the_post();
        ?>
        <article>
            <h5><a href="<?php echo(filter_var(get_the_permalink(), FILTER_SANITIZE_URL)); ?>"><?php echo(filter_var(get_the_title(), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></a></h5>
            <?php echo(filter_var(wp_trim_words(get_the_excerpt(), 4), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?>
        </article>
        <?php } wp_reset_postdata(); ?>
    </section>
</main>

<?php get_footer(); ?>
