<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <?php
        $blogInfoUrl = get_bloginfo("url");
        $blogInfoUrl = filter_var($blogInfoUrl, FILTER_SANITIZE_URL);
        $blogInfoUrl = filter_SSL($blogInfoUrl);
    ?>
    <h1><a href="<?php echo($blogInfoUrl); ?>"><?php echo(filter_var(get_bloginfo("name"), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></a></h1>
    <h2><?php echo(filter_var(get_bloginfo("description"), FILTER_SANITIZE_FULL_SPECIAL_CHARS)); ?></h2>
</header>