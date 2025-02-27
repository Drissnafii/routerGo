
        function toggleForm() {
            const formTitle = document.getElementById('formTitle');
            const extraFields = document.getElementById('extraFields');
            const authForm = document.getElementById('authForm');
            const submitButton = authForm.querySelector('button');
            const toggleText = document.getElementById('toggleText');
            const toggleLink = document.querySelector('.form-toggle');

            if (formTitle.textContent === 'Connexion') {
                formTitle.textContent = 'Inscription';
                extraFields.classList.remove('d-none');
                submitButton.textContent = "S'inscrire";
                toggleText.textContent = "Déjà un compte ?";
                toggleLink.textContent = "Se connecter";
                authForm.setAttribute("action","/addUsers")

            } else {
                formTitle.textContent = 'Connexion';
                extraFields.classList.add('d-none');
                submitButton.textContent = "Se connecter";
                toggleText.textContent = "Pas encore de compte ?";
                toggleLink.textContent = "S'inscrire";
                // authForm.setAttribute("action","/donnes")
                authForm.setAttribute("action","/donnes")

            }
        }
    