<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body <?php body_class('min-h-screen flex flex-col'); ?>>
<?php wp_body_open(); ?>

<header class="px-4 lg:px-6 h-16 flex items-center justify-between border-b">
    <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center justify-center">
        <span class="text-2xl font-bold bg-gradient-to-r from-primary to-primary-foreground bg-clip-text text-transparent">
            <?php bloginfo('name'); ?>
        </span>
    </a>
    <nav class="flex gap-4 sm:gap-6">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container' => false,
            'menu_class' => 'flex gap-4 sm:gap-6',
            'fallback_cb' => false,
        ));
        ?>
        <button id="language-toggle" class="flex items-center gap-2 text-sm font-medium">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4"><circle cx="12" cy="12" r="10"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/><path d="M2 12h20"/></svg>
            <span class="language-text">العربية</span>
        </button>
    </nav>
</header>

<main class="flex-1">