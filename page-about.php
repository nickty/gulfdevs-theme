<?php
/*
Template Name: About Us
*/
get_header();
?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php the_title(); ?>
            </h1>
            <div class="max-w-3xl mx-auto">
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 text-center">
                    <?php esc_html_e('GulfDevs is a leading web development company specializing in creating innovative digital solutions for businesses across the Gulf region.', 'gulfdevs'); ?>
                </p>
                <div class="bg-white p-8 rounded-lg shadow-md dark:bg-gray-900 mb-8">
                    <h2 class="text-2xl font-bold mb-4"><?php esc_html_e('Our Mission', 'gulfdevs'); ?></h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        <?php esc_html_e('To empower Gulf businesses with cutting-edge web technologies, bridging the gap between traditional values and digital innovation.', 'gulfdevs'); ?>
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md dark:bg-gray-900">
                    <h2 class="text-2xl font-bold mb-4"><?php esc_html_e('Our Values', 'gulfdevs'); ?></h2>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                        <li><?php esc_html_e('Innovation in technology', 'gulfdevs'); ?></li>
                        <li><?php esc_html_e('Cultural sensitivity and understanding', 'gulfdevs'); ?></li>
                        <li><?php esc_html_e('Commitment to quality', 'gulfdevs'); ?></li>
                        <li><?php esc_html_e('Customer-centric approach', 'gulfdevs'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>