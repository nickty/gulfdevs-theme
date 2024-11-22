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
                        <button onclick="openPopup(<?php echo $index; ?>)" class="inline-flex h-10 items-center justify-center rounded-md bg-primary px-8 text-sm font-medium text-white shadow transition-colors hover:bg-primary/90 focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-primary">
                            <?php echo esc_html(pll__('Request Service')); ?>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<!-- Popup -->
<div id="servicePopup" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white p-8 rounded-lg max-w-md w-full">
        <h2 id="popupTitle" class="text-2xl font-bold mb-4"></h2>
        <form id="serviceForm" class="space-y-4">
            <input type="hidden" id="serviceType" name="serviceType">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50">
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-primary focus:ring focus:ring-primary focus:ring-opacity-50"></textarea>
            </div>
            <div class="flex justify-end space-x-4">
                <button type="button" onclick="closePopup()" class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-md hover:bg-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                    Send Request
                </button>
            </div>
        </form>
    </div>
</div>

<script>
function openPopup(index) {
    const services = <?php echo json_encode($services); ?>;
    const service = services[index];
    document.getElementById('popupTitle').textContent = service.title;
    document.getElementById('serviceType').value = service.title;
    document.getElementById('servicePopup').classList.remove('hidden');
    document.getElementById('servicePopup').classList.add('flex');
}

function closePopup() {
    document.getElementById('servicePopup').classList.add('hidden');
    document.getElementById('servicePopup').classList.remove('flex');
}

document.getElementById('serviceForm').addEventListener('submit', function(e) {
    e.preventDefault();
    // Here you would typically send the form data to your server
    // For this example, we'll just log it to the console
    console.log('Form submitted:', {
        serviceType: document.getElementById('serviceType').value,
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        message: document.getElementById('message').value
    });
    alert('Thank you for your request. We will contact you soon.');
    closePopup();
});
</script>

<?php get_footer(); ?>