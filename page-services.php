<?php
/*
Template Name: Services
*/
get_header();
?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php the_title(); ?>
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php
                $services = array(
                    array(
                        'title' => __('Custom Web Development', 'gulfdevs'),
                        'description' => __('We create bespoke websites tailored to your unique business needs, using cutting-edge technologies to ensure optimal performance and user experience.', 'gulfdevs')
                    ),
                    array(
                        'title' => __('E-commerce Solutions', 'gulfdevs'),
                        'description' => __('Our e-commerce platforms are secure, scalable, and optimized for the Gulf market, helping you reach more customers and grow your online business.', 'gulfdevs')
                    ),
                    array(
                        'title' => __('UI/UX Design', 'gulfdevs'),
                        'description' => __('We design beautiful, intuitive interfaces that engage your audience and reflect the cultural nuances of the Gulf region.', 'gulfdevs')
                    ),
                    array(
                        'title' => __('Database Solutions', 'gulfdevs'),
                        'description' => __('Our robust data management systems ensure your business data is secure, accessible, and efficiently organized.', 'gulfdevs')
                    )
                );

                foreach ($services as $service) :
                ?>
                    <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-900">
                        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html($service['title']); ?></h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-4"><?php echo esc_html($service['description']); ?></p>
                        <a href="<?php echo esc_url(get_permalink(get_page_by_path('contact'))); ?>" class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-white shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-primary">
                            <?php esc_html_e('Learn More', 'gulfdevs'); ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>