<?php
/*
Template Name: Services
*/
get_header();
?>

<main class="flex-1">
    <section class="w-full py-12 md:py-24 lg:py-32 bg-gray-100 dark:bg-gray-800">
        <div class="container px-4 md:px-6 mx-auto">
            <h1 class="text-3xl font-bold tracking-tighter sm:text-4xl md:text-5xl text-center mb-8">
                <?php echo esc_html(pll__(get_the_title())); ?>
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php
                $services = array(
                    array(
                        'title' => 'Custom Web Development',
                        'description' => 'We create bespoke websites tailored to your unique business needs, using cutting-edge technologies to ensure optimal performance and user experience.',
                        'price' => 'Starting from 500 SR',
                        'duration' => '5 - 15 days'
                    ),
                    array(
                        'title' => 'E-commerce Solutions',
                        'description' => 'Our e-commerce platforms are secure, scalable, and optimized for the Gulf market, helping you reach more customers and grow your online business.',
                        'price' => 'Starting from 1500 SR',
                        'duration' => '20 - 40 days'
                    ),
                    array(
                        'title' => 'Mobile App',
                        'description' => 'We design beautiful, intuitive interfaces that engage your audience and reflect the cultural nuances of the Gulf region.',
                        'price' => 'Starting from 2000 SR',
                        'duration' => '30 - 60 days'
                    ),
                    array(
                        'title' => 'Database Solutions',
                        'description' => 'Our robust data management systems ensure your business data is secure, accessible, and efficiently organized.',
                        'price' => 'Starting from 4000 SR',
                        'duration' => '5 - 10 days'
                    )
                );

                foreach ($services as $index => $service) :
                ?>
                    <div class="bg-white p-6 rounded-lg shadow-md dark:bg-gray-900">
                        <h2 class="text-2xl font-bold mb-4"><?php echo esc_html(pll__($service['title'])); ?></h2>
                        <p class="text-gray-600 dark:text-gray-300 mb-4"><?php echo esc_html(pll__($service['description'])); ?></p>
                        <p class="text-lg font-semibold text-primary mb-2"><?php echo esc_html(pll__($service['price'])); ?></p>
                        <p class="text-sm text-gray-500 mb-4"><?php echo esc_html(pll__('Duration: ' . $service['duration'])); ?></p>
                        <button onclick="openServicePopup('<?php echo esc_js($service['title']); ?>')" class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-white shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-primary">
                            <?php echo esc_html(pll__('Request Service')); ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<div id="servicePopupContainer" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <!-- Popup content will be loaded here -->
</div>

<script>
function openServicePopup(serviceTitle) {
    const popupContainer = document.getElementById('servicePopupContainer');
    popupContainer.classList.remove('hidden');
    popupContainer.classList.add('flex');

    // AJAX request to load popup content
    fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'action=load_service_popup&service=' + encodeURIComponent(serviceTitle)
    })
    .then(response => response.text())
    .then(html => {
        popupContainer.innerHTML = html;
    });
}

function closeServicePopup() {
    const popupContainer = document.getElementById('servicePopupContainer');
    popupContainer.classList.add('hidden');
    popupContainer.classList.remove('flex');
    popupContainer.innerHTML = '';
}

// Close popup when clicking outside
document.addEventListener('click', function(event) {
    const popupContainer = document.getElementById('servicePopupContainer');
    if (event.target === popupContainer) {
        closeServicePopup();
    }
});
</script>

<?php get_footer(); ?>