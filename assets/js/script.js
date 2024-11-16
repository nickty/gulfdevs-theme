document.addEventListener('DOMContentLoaded', (event) => {
    const languageToggle = document.getElementById('language-toggle');
    const languageText = languageToggle.querySelector('.language-text');
    let isArabic = false;

    languageToggle.addEventListener('click', () => {
        isArabic = !isArabic;
        if (isArabic) {
            document.documentElement.dir = 'rtl';
            document.documentElement.lang = 'ar';
            languageText.textContent = 'English';
        } else {
            document.documentElement.dir = 'ltr';
            document.documentElement.lang = 'en';
            languageText.textContent = 'العربية';
        }
        // You might want to trigger a page reload or use AJAX to fetch translated content here
    });
});