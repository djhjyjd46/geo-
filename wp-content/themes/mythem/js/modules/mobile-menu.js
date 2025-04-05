document.addEventListener("DOMContentLoaded", () => {
    const phoneToggle = document.getElementById("phoneToggle");
    const phoneMenu = document.getElementById("phoneMenu");
    const menuToggle = document.getElementById("menuToggle");
    const mobileMenu = document.getElementById("mobileMenu");
    const body = document.body;

    function closeMenus() {
        phoneMenu.classList.remove("open");
        mobileMenu.classList.remove("open");
        phoneToggle.classList.remove("active");
        menuToggle.classList.remove("active");
        body.style.overflow = ""; // Разрешаем прокрутку
    }

    phoneToggle.addEventListener("click", () => {
        const isOpen = phoneMenu.classList.contains("open");
        closeMenus();
        if (!isOpen) {
            phoneMenu.classList.add("open");
            phoneToggle.classList.add("active");
            body.style.overflow = "hidden"; // Блокируем прокрутку
        }
    });

    menuToggle.addEventListener("click", () => {
        const isOpen = mobileMenu.classList.contains("open");
        closeMenus();
        if (!isOpen) {
            mobileMenu.classList.add("open");
            menuToggle.classList.add("active");
            body.style.overflow = "hidden"; // Блокируем прокрутку
        }
    });

    // Закрытие меню при клике на ссылку
    document.querySelectorAll(".mobile-menu a, .phone-menu a").forEach(link => {
        link.addEventListener("click", closeMenus);
    });
});