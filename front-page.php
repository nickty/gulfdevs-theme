<?php get_header(); ?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 xl:py-48 bg-gradient-to-b from-primary/5 via-primary/10 to-transparent">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="flex flex-col items-center space-y-4 text-center">
                <div class="space-y-2">
                    <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl lg:text-6xl/none">
                        <?php echo esc_html(pll__(get_theme_mod('hero_title', 'Innovative Web Solutions for the Gulf'))); ?>
                    </h1>
                    <p class="mx-auto max-w-[700px] text-gray-500 md:text-xl dark:text-gray-400">
                        <?php echo esc_html(pll__(get_theme_mod('hero_subtitle', 'Empowering businesses with cutting-edge technology'))); ?>
                    </p>
                </div>
                <div class="space-x-4">
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('services'))); ?>" class="inline-flex h-11 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-white shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-primary">
                        <?php esc_html_e(pll__(get_theme_mod('explore_services', 'Explore Our Services'))); ?>
                    </a>
                    <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="inline-flex h-11 items-center justify-center rounded-md border border-gray-200 bg-white px-8 text-sm font-medium shadow-sm transition-colors hover:bg-gray-100 hover:text-gray-900 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-gray-950 dark:border-gray-800 dark:bg-gray-950 dark:hover:bg-gray-800 dark:hover:text-gray-50 dark:focus-visible:ring-gray-300">
                        <?php esc_html_e(pll__(get_theme_mod('contact_us', 'Contact Us'))); ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <h2 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php esc_html_e(pll__(get_theme_mod('our_services', 'Our Services'))); ?>
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php
                $services = array(
                    array('title' => 'Custom Web Development', 'description' => 'Tailored websites built with cutting-edge technology'),
                    array('title' => 'E-commerce Solutions', 'description' => 'Secure and scalable online stores'),
                    array('title' => 'UI/UX Design', 'description' => 'Beautiful, user-friendly interfaces'),
                    array('title' => 'Database Solutions', 'description' => 'Robust data management systems')
                );

                foreach ($services as $service) :
                ?>
                    <div class="flex flex-col items-center text-center p-4 bg-white rounded-lg shadow-md dark:bg-gray-900">
                        <h3 class="text-xl font-bold mb-2"><?php echo esc_html(pll__($service['title'])); ?></h3>
                        <p class="text-gray-500 dark:text-gray-400"><?php echo esc_html(pll__($service['description'])); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="w-full py-12 md:py-24 lg:py-32 bg-primary text-white">
        <div class="container px-4 md:px-6 mx-auto text-center">
            <blockquote class="text-2xl italic mb-4">
                <?php echo esc_html(pll__(get_theme_mod('testimonial_quote', 'GulfDevs transformed our online presence. Their understanding of local markets is unparalleled.'))); ?>
            </blockquote>
            <p class="text-lg">
                - <?php echo esc_html(pll__(get_theme_mod('testimonial_author', 'Ahmed Al-Mansour, CEO of Gulf Innovations'))); ?>
            </p>
        </div>
    </section>
</main>

<?php get_footer(); ?>