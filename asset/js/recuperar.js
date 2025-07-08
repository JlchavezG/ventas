document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("recoverForm");
    const emailInput = document.getElementById("email");
    const toggleTheme = document.getElementById("toggleTheme");

    // Validación
    form.addEventListener("submit", function (event) {
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add("was-validated");

        // Aquí podrías hacer un fetch o AJAX para enviar el correo a backend
        // Por ahora solo muestra alerta de éxito simulado
        if (form.checkValidity()) {
            event.preventDefault();
            alert("📧 Si el correo está registrado, recibirás instrucciones en breve.");
        }
    });

});