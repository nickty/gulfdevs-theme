document.addEventListener('DOMContentLoaded', function() {
    // Get all Contact Form 7 forms on the page
    const forms = document.querySelectorAll('.wpcf7-form');
    
    forms.forEach(form => {
        // Remove the default form submission handler
        form.removeEventListener('submit', form.onsubmit);
        
        // Add our custom submission handler
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            
            const formData = new FormData(form);
            const submitButton = form.querySelector('input[type="submit"]');
            
            // Disable submit button during submission
            if (submitButton) {
                submitButton.disabled = true;
            }
            
            // Get the form ID from the _wpcf7 hidden input
            const formId = form.querySelector('input[name="_wpcf7"]').value;
            
            fetch(wpcf7.api.getRoute('/contact-form-7/v1/contact-forms/' + formId + '/feedback'), {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                // Re-enable submit button
                if (submitButton) {
                    submitButton.disabled = false;
                }
                
                // Handle the response
                if (data.status === 'mail_sent') {
                    // Success message
                    const messageDiv = form.querySelector('.wpcf7-response-output');
                    if (messageDiv) {
                        messageDiv.innerHTML = data.message;
                        messageDiv.classList.add('wpcf7-mail-sent-ok');
                    }
                    
                    // Reset form
                    form.reset();
                    
                    // Close modal if it exists
                    const modal = form.closest('.modal');
                    if (modal) {
                        setTimeout(() => {
                            modal.style.display = 'none';
                        }, 2000);
                    }
                } else {
                    // Error message
                    const messageDiv = form.querySelector('.wpcf7-response-output');
                    if (messageDiv) {
                        messageDiv.innerHTML = data.message;
                        messageDiv.classList.add('wpcf7-validation-errors');
                    }
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Re-enable submit button
                if (submitButton) {
                    submitButton.disabled = false;
                }
                
                // Show error message
                const messageDiv = form.querySelector('.wpcf7-response-output');
                if (messageDiv) {
                    messageDiv.innerHTML = 'There was an error submitting the form. Please try again.';
                    messageDiv.classList.add('wpcf7-validation-errors');
                }
            });
        });
    });
});