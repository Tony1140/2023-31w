<?php

/**
 * Ajouter la feuille de style du thème
 *
 * @return void
 */
function ajouter_styles(): void
{
    wp_enqueue_style("31w-style-principal", get_template_directory_uri() . "/style.css", array(), filemtime(get_template_directory() . "/style.css"));
}

add_action("wp_enqueue_scripts", "ajouter_styles");
