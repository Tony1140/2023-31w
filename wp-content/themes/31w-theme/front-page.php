<?php get_header(); ?>

<main>
    <code>
        <?php
            $fileName = $_SERVER["SCRIPT_FILENAME"];
            $fileName = filter_var($fileName, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $fileName = basename($fileName, ".php");

            echo($fileName);
        ?>
    </code>
    <h3>index.php</h3>
    <section class="blocflex">
        <?php
            while (have_posts())
            {
                the_post();

        ?>
        <article>
            <h3><a href="<?php echo(filter_var(get_the_permalink(), FILTER_SANITIZE_URL)); ?>"><?php echo(filter_var(get_the_title(), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></a></h3>
            <p><?php echo(filter_var(wp_trim_words(get_the_excerpt(), 4), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></p>
        </article>
        <?php } ?>
    </section>
</main>

<?php get_footer(); ?>
