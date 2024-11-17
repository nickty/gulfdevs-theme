<?php get_header(); ?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php esc_html_e('Our Blog', 'gulfdevs'); ?>
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <article class="bg-white rounded-lg shadow-md overflow-hidden dark:bg-gray-900">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-48 object-cover" />
                            <?php endif; ?>
                            <div class="p-6">
                                <h2 class="text-xl font-bold mb-2">
                                    <a href="<?php the_permalink(); ?>" class="hover:underline">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <p class="text-gray-600 dark:text-gray-300 mb-4"><?php the_excerpt(); ?></p>
                                <a href="<?php the_permalink(); ?>" class="text-primary hover:underline">
                                    <?php esc_html_e('Read More', 'gulfdevs'); ?>
                                </a>
                            </div>
                        </article>
                <?php
                    endwhile;
                else :
                    esc_html_e('No posts found.', 'gulfdevs');
                endif;
                ?>
            </div>
            <div class="mt-8 text-center">
                <?php the_posts_pagination(); ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>