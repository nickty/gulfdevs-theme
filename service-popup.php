<div class="bg-white dark:bg-gray-800 p-6 rounded-lg max-w-md w-full relative">
    <button onclick="closeServicePopup()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    <h2 id="popupTitle" class="text-xl font-bold mb-4 text-gray-900 dark:text-white"><?php echo esc_html($_POST['service']); ?></h2>
    <?php
    echo do_shortcode('[contact-form-7 id="65b28b7" title="Service Request Form"]');
    ?>
</div>