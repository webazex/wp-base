<?php
if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
            'page_title' => 'Налаштування теми',
            'menu_title' => 'Налаштування теми',
            'menu_slug' => 'settings-theme',
            'capability' => 'manage_options',
            'redirect' => true
        )
    );
    acf_add_options_sub_page(array(
        'page_title' => 'Налаштування header',
        'menu_title' => 'Налаштування header',
        'menu_slug' => 'settings-theme-h',
        'parent_slug' => 'settings-theme',
        'redirect' => false
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Налаштування footer',
        'menu_title' => 'Налаштування footer',
        'menu_slug' => 'settings-theme-f',
        'parent_slug' => 'settings-theme',
        'redirect' => false
    ));
    acf_add_options_sub_page(array(
        'page_title' => 'Соцмережі',
        'menu_title' => 'Соцмережі',
        'menu_slug' => 'settings-theme-socials',
        'parent_slug' => 'settings-theme',
        'redirect' => false
    ));
}