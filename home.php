<?php
// File: archive.php
get_header();
?>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-8 text-center"><?php echo esc_html(get_the_archive_title()); ?></h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="aspect-w-16 aspect-h-9">
                        <?php the_post_thumbnail('medium_large', ['class' => 'object-cover w-full h-full']); ?>
                    </div>
                <?php endif; ?>
                <div class="p-6">
                    <h2 class="text-xl font-semibold mb-2">
                        <a href="<?php the_permalink(); ?>" class="text-primary hover:text-primary-dark transition-colors duration-200">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                        <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
                    </div>
                    <div class="text-gray-700 dark:text-gray-300 mb-4">
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="inline-block bg-primary text-white px-4 py-2 rounded hover:bg-primary-dark transition-colors duration-200">
                        Read More
                    </a>
                </div>
            </article>
        <?php endwhile; endif; ?>
    </div>

    <div class="mt-8">
        <?php the_posts_pagination([
            'prev_text' => '&laquo; Previous',
            'next_text' => 'Next &raquo;',
            'class' => 'flex justify-center space-x-4',
        ]); ?>
    </div>

    <div class="mt-16 bg-primary text-white p-8 rounded-lg text-center">
        <h2 class="text-2xl font-bold mb-4">Need Web Development Services?</h2>
        <p class="mb-6">Explore our range of services tailored for businesses in the Gulf region.</p>
        <a href="<?php echo esc_url(home_url('/services')); ?>" class="inline-block bg-white text-primary px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-200">
            View Our Services
        </a>
    </div>
</main>

<?php get_footer(); ?>