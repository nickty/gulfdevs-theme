<div class="bg-white p-8 rounded-lg max-w-md w-full relative">
    <button onclick="closeServicePopup()" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
    </button>
    <h2 id="popupTitle" class="text-2xl font-bold mb-4"><?php echo esc_html($_POST['service']); ?></h2>
    <?php
    // Replace 'CONTACT_FORM_7_ID' with your actual Contact Form 7 ID
    echo do_shortcode('[contact-form-7 id="49ba171" title="For services"]');
    ?>
</div>