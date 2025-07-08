document.addEventListener("DOMContentLoaded", () => {
    const toggleSidebar = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const toggleTheme = document.getElementById("toggleTheme");

    // Sidebar toggle
    toggleSidebar.addEventListener("click", () => {
        sidebar.classList.toggle("collapsed");
    });

    // Modo oscuro
    const savedTheme = localStorage.getItem("theme");
    if (savedTheme === "dark") {
        document.body.classList.add("dark");
        toggleTheme.textContent = "☀️";
    }

    toggleTheme.addEventListener("click", () => {
        const isDark = document.body.classList.toggle("dark");
        localStorage.setItem("theme", isDark ? "dark" : "light");
        toggleTheme.textContent = isDark ? "☀️" : "🌙";
    });
});