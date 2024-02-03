const menu_btn = document.getElementById("menu-btn");
const sidebar = document.getElementById("sidebar");
const close_btn = document.querySelector(".close-icon");

menu_btn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});

close_btn.addEventListener("click", () => {
    sidebar.classList.toggle("close");
});


// Start darkmode
const dark_mode = document.getElementById("dark-mode");
const light = document.querySelector(".light");
const dark = document.querySelector(".dark");

dark_mode.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");

    if (document.body.classList.contains("dark-theme")) {
        dark.style.display = "none";
        light.style.display = "inline";
    } else {
        dark.style.display = "inline";
        light.style.display = "none";
    }

});