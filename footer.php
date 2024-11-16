</main>

<footer class="flex flex-col gap-2 sm:flex-row py-6 w-full shrink-0 items-center px-4 md:px-6 border-t">
    <p class="text-xs text-muted-foreground">
        © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php esc_html_e('All rights reserved.', 'gulfdevs'); ?>
    </p>
    <nav class="sm:ml-auto flex gap-4 sm:gap-6">
        <a href="<?php echo esc_url(get_privacy_policy_url()); ?>" class="text-xs hover:underline underline-offset-4">
            <?php esc_html_e('Privacy Policy', 'gulfdevs'); ?>
        </a>
        <a href="<?php echo esc_url(home_url('/terms-of-service')); ?>" class="text-xs hover:underline underline-offset-4">
            <?php esc_html_e('Terms of Service', 'gulfdevs'); ?>
        </a>
    </nav>
</footer>

<?php wp_footer(); ?>
</body>
</html>