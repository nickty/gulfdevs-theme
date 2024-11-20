<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png" type="image/png">

    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col'); ?>>
<?php wp_body_open(); ?>

<header class="px-3 lg:px-6 h-16 flex items-center justify-between border-b">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center justify-center">
        <span class="text-2xl font-bold bg-gradient-to-r from-primary to-primary-foreground bg-clip-text text-transparent">
            <?php bloginfo('name'); ?>
        </span>
    </a>
    <nav class="flex gap-4 sm:gap-6 items-center">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex gap-4 sm:gap-6',
            'fallback_cb' => false,
        ));
        ?>
        <?php
        if (function_exists('pll_the_languages')) {
            $args = array(
                'show_flags' => 1,
                'show_names' => 0,
                'hide_if_empty' => 0,
                'dropdown' => 1,
            );
            ?>
            <div class="language-switcher">
                <?php pll_the_languages($args); ?>
            </div>
        <?php } ?>
    </nav>
</header>

<main class="flex-1">