<?php get_header(); ?>

<main>
    <h3>index.php</h3>

    <?php
        while (have_posts())
        {
            the_post();
        }
    ?>
    <h1><a href="<?php echo(filter_SSL(filter_var(get_the_permalink(), FILTER_SANITIZE_URL))); ?>"><?php echo(filter_var(get_the_title(), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></a></h1>
    <?php echo(filter_var(wp_trim_words(get_the_excerpt(), 4), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?>
</main>

<?php get_footer(); ?>
