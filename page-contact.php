<?php
/*
Template Name: Contact
*/
get_header();
?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md dark:bg-gray-900 border border-primary/20">
                <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8 text-primary">
                    <?php echo esc_html(pll__(get_the_title())); ?>
                </h1>
                <p class="text-center text-gray-600 dark:text-gray-300 mb-8">
                    <?php echo esc_html(pll__('Get in touch with us for any inquiries or to discuss your project.')); ?>
                </p>
                <div class="space-y-6">
                    <?php echo do_shortcode('[contact-form-7 id="65b28b7" title="Contact form 1"]'); ?>
                </div>
            </div>
            <div class="mt-12 text-center">
                <h2 class="text-2xl font-bold mb-4 text-primary"><?php echo esc_html(pll__('Our Office')); ?></h2>
                <p class="text-gray-600 dark:text-gray-300">
                    <?php echo esc_html(pll__('Remote Office')); ?><br>
                    <?php echo esc_html(pll__('Email: info@gulfdevs.com')); ?>
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>