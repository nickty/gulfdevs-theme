<?php get_header(); ?>

<section class="w-full py-12 md:py-24 lg:py-32 xl:py-48 bg-gradient-to-b from-primary/5 via-primary/10 to-transparent">
    <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center space-y-4 text-center">
            <div class="space-y-2">
                <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                    <?php echo esc_html(get_theme_mod('hero_title', 'Innovative Web Solutions for the Gulf Region')); ?>
                </h1>
                <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl">
                    <?php echo esc_html(get_theme_mod('hero_subtitle', 'Your trusted partner in creating exceptional digital experiences')); ?>
                </p>
            </div>
            <div class="space-x-4">
                <a href="#services" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 bg-primary text-primary-foreground hover:bg-primary/90 h-10 px-4 py-2">
                    <?php esc_html_e('Explore Our Services', 'gulfdevs'); ?>
                </a>
                <a href="#contact" class="inline-flex items-center justify-center rounded-md text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 border border-input bg-background hover:bg-accent hover:text-accent-foreground h-10 px-4 py-2">
                    <?php esc_html_e('Contact Us', 'gulfdevs'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<section id="services" class="w-full py-12 md:py-24 lg:py-32">
    <div class="container px-4 md:px-6">
        <div class="flex flex-col items-center justify-center space-y-4 text-center">
            <div class="space-y-2">
                <h2 class="text-3xl font-bold tracking-tighter md:text-4xl/tight">
                    <?php esc_html_e('Our Services', 'gulfdevs'); ?>
                </h2>
                <p class="mx-auto max-w-[700px] text-muted-foreground md:text-xl">
                    <?php esc_html_e('Comprehensive web development solutions tailored for the Gulf market', 'gulfdevs'); ?>
                </p>
            </div>
        </div>
        <div class="mx-auto grid max-w-5xl items-center gap-6 py-12 lg:grid-cols-2 lg:gap-12">
            <?php
            $services = array(
                array(
                    'title' => __('Custom Web Development', 'gulfdevs'),
                    'description' => __('Bespoke websites and applications built with cutting-edge technology', 'gulfdevs'),
                ),
                array(
                    'title' => __('E-commerce Solutions', 'gulfdevs'),
                    'description' => __('Secure and scalable online stores optimized for the Gulf market', 'gulfdevs'),
                ),
                array(
                    'title' => __('UI/UX Design', 'gulfdevs'),
                    'description' => __('Beautiful, culturally appropriate designs that engage your audience', 'gulfdevs'),
                ),
                array(
                    'title' => __('Database Solutions', 'gulfdevs'),
                    'description' => __('Robust data management systems for your business needs', 'gulfdevs'),
                ),
            );

            foreach ($services as $service) :
            ?>
                <div class="relative overflow-hidden rounded-lg border bg-background p-2">
                    <div class="flex h-[180px] flex-col justify-between rounded-md p-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-12 w-12 fill-current"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
                        <div class="space-y-2">
                            <h3 class="font-bold"><?php echo esc_html($service['title']); ?></h3>
                            <p class="text-sm text-muted-foreground">
                                <?php echo esc_html($service['description']); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>