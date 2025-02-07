const menu = document.getElementById("menu_div");
const account_div = document.getElementById("account");
const login_form = document.getElementById("login-form");
const navbar_dropdown = document.getElementById("navbar_dropdown");
const register_span = document.getElementById("register-span");
const register_form = document.getElementById("register-form");
const close_register = document.getElementById("close_register");
const navbar_sidebar = document.getElementById("navbar-sidebar");
const checkRoomNav = document.getElementById("checkRoomNav");
const booking1 = document.getElementById("booking1");
const booking2 = document.getElementById("booking2");
const close_checkRoomNav = document.getElementById("close_checkRoomNav");

account_div.addEventListener("click", () => {
    login_form.classList.toggle("active");
});

account_div.addEventListener("click", () => {
    navbar_dropdown.classList.toggle("active");
});

register_span.addEventListener("click", () => {
    register_form.classList.add("active");
});

menu.addEventListener("click", () => {
    navbar_sidebar.classList.toggle("active");
});

close_register.addEventListener("click", () => {
    register_form.classList.remove("active");
});

booking1.addEventListener("click", () => {
    checkRoomNav.classList.toggle("active");
});

booking2.addEventListener("click", () => {
    checkRoomNav.classList.add("active");
});

close_checkRoomNav.addEventListener("click", () => {
    checkRoomNav.classList.remove("active");
});