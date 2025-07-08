document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("loginForm");
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("password");
    const showPassword = document.getElementById("showPassword");
    const rememberCheckbox = document.getElementById("rememberEmail");
    const toggleTheme = document.getElementById("toggleTheme");

    // Validación
    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add("was-validated");

        // Guardar email si se seleccionó
        if (rememberCheckbox.checked) {
            localStorage.setItem("rememberedEmail", emailInput.value);
        } else {
            localStorage.removeItem("rememberedEmail");
        }
    });

    // Mostrar/Ocultar contraseña
    showPassword.addEventListener("change", function () {
        passwordInput.type = this.checked ? "text" : "password";
    });

    // Cargar email guardado
    const rememberedEmail = localStorage.getItem("rememberedEmail");
    if (rememberedEmail) {
        emailInput.value = rememberedEmail;
        rememberCheckbox.checked = true;
    }

    // Aplicar tema guardado
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        toggleTheme.textContent = "☀️";
    }

    // Cambiar tema
    toggleTheme.addEventListener("click", () => {
        const isDark = document.body.classList.toggle("dark");
        localStorage.setItem("theme", isDark ? "dark" : "light");
        toggleTheme.textContent = isDark ? "☀️" : "🌙";
    });
});