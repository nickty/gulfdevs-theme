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
                <div class="max-w-md mx-auto">
                    <form class="space-y-6">
                        <div>
                            <label for="your-name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                <?php esc_html_e('Your Name', 'gulfdevs'); ?> <span class="text-red-500">*</span>
                            </label>
                            <div class="mt-1">
                                [text* your-name autocomplete:name class:w-full class:px-3 class:py-2 class:border class:border-gray-300 class:rounded-md class:shadow-sm class:focus:ring-primary class:focus:border-primary class:dark:border-gray-600 class:dark:bg-gray-700 class:dark:text-white]
                            </div>
                        </div>

                        <div>
                            <label for="your-email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                <?php esc_html_e('Your Email', 'gulfdevs'); ?> <span class="text-red-500">*</span>
                            </label>
                            <div class="mt-1">
                                [email* your-email autocomplete:email class:w-full class:px-3 class:py-2 class:border class:border-gray-300 class:rounded-md class:shadow-sm class:focus:ring-primary class:focus:border-primary class:dark:border-gray-600 class:dark:bg-gray-700 class:dark:text-white]
                            </div>
                        </div>

                        <div>
                            <label for="your-subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                <?php esc_html_e('Subject', 'gulfdevs'); ?> <span class="text-red-500">*</span>
                            </label>
                            <div class="mt-1">
                                [text* your-subject class:w-full class:px-3 class:py-2 class:border class:border-gray-300 class:rounded-md class:shadow-sm class:focus:ring-primary class:focus:border-primary class:dark:border-gray-600 class:dark:bg-gray-700 class:dark:text-white]
                            </div>
                        </div>

                        <div>
                            <label for="your-message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                <?php esc_html_e('Your Message', 'gulfdevs'); ?> <span class="text-gray-500">(<?php esc_html_e('optional', 'gulfdevs'); ?>)</span>
                            </label>
                            <div class="mt-1">
                                [textarea your-message class:w-full class:px-3 class:py-2 class:border class:border-gray-300 class:rounded-md class:shadow-sm class:focus:ring-primary class:focus:border-primary class:dark:border-gray-600 class:dark:bg-gray-700 class:dark:text-white class:h-32]
                            </div>
                        </div>

                        <div>
                            [submit class:w-full class:flex class:justify-center class:py-2 class:px-4 class:border class:border-transparent class:rounded-md class:shadow-sm class:text-sm class:font-medium class:text-white class:bg-primary class:hover:bg-primary-dark class:focus:outline-none class:focus:ring-2 class:focus:ring-offset-2 class:focus:ring-primary "<?php esc_attr_e('Submit', 'gulfdevs'); ?>"]
                        </div>
                    </form>
                </div>
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