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

add_theme_support("html5", [
    "search_form",
    "gallery",
    "caption"
]);

add_theme_support("title-tag");

add_theme_support("custom-logo", [
    "height" => 150,
    "width" => 150
]);

/**
 * Enregistrer les menus du header et du footer
 *
 * @return void
 */
function enregistrement_des_menus(): void
{
    register_nav_menus([
        "menu_entete" => "Menu entête",
        "menu_footer" => "Menu pied de page"
    ]);
}

add_action("after_setup_theme", "enregistrement_des_menus", 0);

function cidweb_modifie_requete_principal(WP_Query $query): void
{
    if ($query->is_home() && $query->is_main_query() && !is_admin())
    {
        $query->set("category_name", "note_wp");
        $query->set("orderby", "title");
        $query->set("order", "ASC");
    }
}

add_action("pre_get_posts", "cidweb_modifie_requete_principal");