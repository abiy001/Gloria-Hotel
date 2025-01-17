const account_div = document.getElementById("account");
const login_form = document.getElementById("login-form");
const navbar_dropdown = document.getElementById("navbar_dropdown");
const register_span = document.getElementById("register-span");
const register_form = document.getElementById("register-form");
const close_register = document.getElementById("close_register");

account_div.addEventListener("click", () => {
    login_form.classList.toggle("active");
});

account_div.addEventListener("click", () => {
    navbar_dropdown.classList.toggle("active");
});

register_span.addEventListener("click", () => {
    register_form.classList.add("active");
});

close_register.addEventListener("click", () => {
    register_form.classList.remove("active");
});