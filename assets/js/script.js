document.addEventListener('DOMContentLoaded', function() {
    const languageToggle = document.getElementById('language-toggle');
    if (languageToggle) {
        languageToggle.addEventListener('click', function() {
            const languageText = this.querySelector('.language-text');
            if (languageText.textContent === 'العربية') {
                languageText.textContent = 'English';
                document.documentElement.dir = 'rtl';
                document.documentElement.lang = 'ar';
            } else {
                languageText.textContent = 'العربية';
                document.documentElement.dir = 'ltr';
                document.documentElement.lang = 'en';
            }
            // You might want to trigger a page reload or use AJAX to fetch translated content here
        });
    }
});