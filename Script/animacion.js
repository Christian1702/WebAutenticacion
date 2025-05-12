const loginBtn = document.getElementById('btn-login');
        const registerBtn = document.getElementById('btn-register');
        const slider = document.querySelector('.forms-slider');

        loginBtn.addEventListener('click', () => {
            slider.style.transform = 'translateX(0%)';
            loginBtn.classList.add('active');
            registerBtn.classList.remove('active');
        });

        registerBtn.addEventListener('click', () => {
            slider.style.transform = 'translateX(-50%)';
            registerBtn.classList.add('active');
            loginBtn.classList.remove('active');
        });