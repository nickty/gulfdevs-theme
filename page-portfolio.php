<?php
/*
Template Name: Portfolio
*/
get_header();
?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php echo esc_html(pll__(get_the_title())); ?>
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
                $portfolio_items = array(
                    array(
                        'title' => 'Gulf E-commerce Platform',
                        'description' => 'A scalable e-commerce solution for a leading retailer in the UAE.',
                        'image' => get_template_directory_uri() . '/assets/images/ecommerce.png'
                    ),
                    array(
                        'title' => 'Saudi Tourism Portal',
                        'description' => 'An interactive website showcasing Saudi Arabia\'s tourist attractions.',
                        'image' => get_template_directory_uri() . '/assets/images/tourism.png'
                    ),
                    array(
                        'title' => 'Qatari Financial Dashboard',
                        'description' => 'A secure, real-time financial data visualization tool for a Qatari bank.',
                        'image' => get_template_directory_uri() . '/assets/images/finance.png'
                    )
                );

                foreach ($portfolio_items as $item) :
                ?>
                    <div class="bg-white rounded-lg shadow-md overflow-hidden dark:bg-gray-900">
                        <img src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr(pll__($item['title'])); ?>" class="w-full h-48 object-cover" />
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2"><?php echo esc_html(pll__($item['title'])); ?></h2>
                            <p class="text-gray-600 dark:text-gray-300 mb-4"><?php echo esc_html(pll__($item['description'])); ?></p>
                            <a href="#" class="text-primary hover:underline"><?php echo esc_html(pll__('View Case Study')); ?></a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>