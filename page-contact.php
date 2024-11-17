<?php
/*
Template Name: Contact
*/
get_header();
?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php the_title(); ?>
            </h1>
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md dark:bg-gray-900">
                <p class="text-center text-gray-600 dark:text-gray-300 mb-8">
                    <?php esc_html_e('Get in touch with us for any inquiries or to discuss your project.', 'gulfdevs'); ?>
                </p>
                <?php echo do_shortcode('[contact-form-7 id="CONTACT_FORM_ID" title="Contact form 1"]'); ?>
            </div>
            <div class="mt-12 text-center">
                <h2 class="text-2xl font-bold mb-4"><?php esc_html_e('Our Office', 'gulfdevs'); ?></h2>
                <p class="text-gray-600 dark:text-gray-300">
                    <?php esc_html_e('123 Gulf Tower, Dubai Internet City', 'gulfdevs'); ?><br>
                    <?php esc_html_e('Dubai, United Arab Emirates', 'gulfdevs'); ?><br>
                    <?php esc_html_e('Phone: +971 4 123 4567', 'gulfdevs'); ?><br>
                    <?php esc_html_e('Email: info@gulfdevs.com', 'gulfdevs'); ?>
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>