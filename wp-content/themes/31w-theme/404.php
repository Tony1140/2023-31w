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
    <h1>Erreur 404 - La page n'existe pas</h1>
</main>
