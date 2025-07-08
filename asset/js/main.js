document.addEventListener("DOMContentLoaded", () => {
// Cargar tema guardado
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