document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.querySelector('.login-form');
    
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Connexion...';
            submitBtn.disabled = true;
            
            // Supprimer les messages d'erreur précédents
            const existingError = document.querySelector('.error-message');
            if (existingError) {
                existingError.remove();
            }
            
            const formData = new FormData(this);
            formData.append('action', 'custom_login');
            
            fetch(ajaxurl, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Connexion réussie
                    const successMsg = document.createElement('div');
                    successMsg.className = 'success-message';
                    successMsg.textContent = 'Connexion réussie ! Redirection...';
                    loginForm.parentNode.insertBefore(successMsg, loginForm);
                    
                    // Redirection après 1 seconde
                    setTimeout(() => {
                        window.location.href = data.data.redirect_url;
                    }, 1000);
                } else {
                    // Erreur de connexion
                    const errorMsg = document.createElement('div');
                    errorMsg.className = 'error-message';
                    errorMsg.textContent = data.data.message || 'Identifiants incorrects';
                    loginForm.parentNode.insertBefore(errorMsg, loginForm);
                    
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                const errorMsg = document.createElement('div');
                errorMsg.className = 'error-message';
                errorMsg.textContent = 'Une erreur est survenue. Veuillez réessayer.';
                loginForm.parentNode.insertBefore(errorMsg, loginForm);
                
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }
});
