<?php get_header(); ?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php echo esc_html(pll__('Our Blog')); ?>
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <article class="bg-white rounded-lg shadow-md overflow-hidden dark:bg-gray-900">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium_large'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover">
                        <?php endif; ?>
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-primary hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-primary hover:underline">
                                <?php echo esc_html(pll__('Read More')); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                    </article>
                <?php endwhile; endif; ?>
            </div>
            <div class="mt-8 flex justify-center">
                <?php the_posts_pagination(array(
                    'mid_size' => 2,
                    'prev_text' => esc_html(pll__('Previous')),
                    'next_text' => esc_html(pll__('Next')),
                )); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>