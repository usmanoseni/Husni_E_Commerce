/* the code behind hidden and unhidden password*/
const unhidden_icon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-blue-400 hover:cursor-pointer transition-all duration-150 hover:text-blue-400 focus:text-blue-400 active:text-blue-400" id="not_seen1">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
</svg>`;

const hidden_icon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 hover:cursor-pointer transition-all duration-150 hover:text-blue-400 focus:text-blue-400 active:text-blue-400">
<path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
</svg>`;


function Password1() {
    const hide_icon1 = document.getElementById("not_seen1");
    const password = document.getElementById("password1");
    const isVisible1 = password.type == "text";
    password.type = isVisible1 ? "password" : "text";
    hide_icon1.innerHTML = isVisible1 ? hidden_icon : unhidden_icon;
};

function Password2() {
    const hide_icon2 = document.getElementById("not_seen2");
    const password_con = document.getElementById("password2"); 
    const isVisible2 = password_con.type === "text";
    password_con.type = isVisible2 ? "password" : "text";
    hide_icon2.innerHTML = isVisible2 ? hidden_icon : unhidden_icon;
};
 
//code to check if the value in the password and confirm password fields are the same
const check_password = document.getElementById("password2");
check_password.addEventListener("input", ()=> {
    const password = document.getElementById("password1").value;
    const confirmPassword = document.getElementById("password2").value;
    const errorMessage = document.getElementById("error_message");

    if (password !== confirmPassword) {
        errorMessage.textContent = "Passwords do not match.";
        errorMessage.classList.remove("hidden");
    } else {
        errorMessage.textContent = "";
        errorMessage.classList.add("hidden");
    }
});
