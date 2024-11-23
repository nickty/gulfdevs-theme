<?php
// File: single.php
get_header();
?>

<main class="container mx-auto px-4 py-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="max-w-3xl mx-auto">
            <header class="mb-8">
                <h1 class="text-4xl font-bold mb-4"><?php the_title(); ?></h1>
                <div class="text-sm text-gray-600 dark:text-gray-400 mb-4">
                    <?php echo get_the_date(); ?> | <?php the_category(', '); ?>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="aspect-w-16 aspect-h-9 mb-8">
                        <?php the_post_thumbnail('large', ['class' => 'object-cover w-full h-full rounded-lg']); ?>
                    </div>
                <?php endif; ?>
            </header>

            <div class="prose dark:prose-invert max-w-none mb-12">
                <?php the_content(); ?>
            </div>

            <div class="mb-8">
                <?php
                wp_link_pages([
                    'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'gulfdevs') . '</span>',
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after' => '</span>',
                    'pagelink' => '<span class="screen-reader-text">' . __('Page', 'gulfdevs') . ' </span>%',
                    'separator' => '<span class="screen-reader-text">, </span>',
                ]);
                ?>
            </div>

            <footer class="border-t border-gray-200 dark:border-gray-700 pt-8">
                <?php
                the_post_navigation([
                    'prev_text' => '<span class="text-sm">&larr; Previous Post:</span> <span class="text-primary hover:text-primary-dark">%title</span>',
                    'next_text' => '<span class="text-sm">Next Post: &rarr;</span> <span class="text-primary hover:text-primary-dark">%title</span>',
                ]);
                ?>
            </footer>
        </article>

        <?php
        // If comments are open or we have at least one comment, load up the comment template.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>

        <div class="mt-16 bg-primary text-white p-8 rounded-lg text-center max-w-3xl mx-auto">
            <h2 class="text-2xl font-bold mb-4">Interested in Our Web Development Services?</h2>
            <p class="mb-6">Let's discuss how we can help your business grow in the Gulf region.</p>
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="inline-block bg-white text-primary px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition-colors duration-200">
                Explore Our Services
            </a>
        </div>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>