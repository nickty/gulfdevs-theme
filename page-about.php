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
                <?php echo esc_html(pll__(get_the_title())); ?>
            </h1>
            <div class="max-w-3xl mx-auto">
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-8 text-center">
                    <?php echo esc_html(pll__('GulfDevs is a leading web development company specializing in creating innovative digital solutions for businesses across the Gulf region.')); ?>
                </p>
                <div class="bg-white p-8 rounded-lg shadow-md dark:bg-gray-900 mb-8">
                    <h2 class="text-2xl font-bold mb-4"><?php echo esc_html(pll__('Our Mission')); ?></h2>
                    <p class="text-gray-600 dark:text-gray-300">
                        <?php echo esc_html(pll__('To empower Gulf businesses with cutting-edge web technologies, bridging the gap between traditional values and digital innovation.')); ?>
                    </p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-md dark:bg-gray-900">
                    <h2 class="text-2xl font-bold mb-4"><?php echo esc_html(pll__('Our Values')); ?></h2>
                    <ul class="list-disc list-inside text-gray-600 dark:text-gray-300">
                        <li><?php echo esc_html(pll__('Innovation in technology')); ?></li>
                        <li><?php echo esc_html(pll__('Cultural sensitivity and understanding')); ?></li>
                        <li><?php echo esc_html(pll__('Commitment to quality')); ?></li>
                        <li><?php echo esc_html(pll__('Customer-centric approach')); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>