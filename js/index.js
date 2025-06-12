/* the code for thhe drop down menu  in the nav bar*/
const drop_down = document.getElementById("drop_down");
const drop_down_container = document.getElementById("drop_down_container");
const drop_down_content = document.querySelectorAll("#drop_down_content");
let hold = 1
const icon1 = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-7">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" /> </svg>`;
  const icon2 = `  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="  size-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" /></svg>`;

drop_down.addEventListener("click", () => {
    if (hold == 1) {
        console.log("clicked");
        drop_down.innerHTML = icon1;
        drop_down_container.classList.toggle("hidden");
        hold = 0;
    } else {   
        drop_down.innerHTML = icon2;
        drop_down_container.classList.toggle("hidden");
        hold = 1;
    }
});

// the code for clicking the content in the drop_downa_container
drop_down_content.forEach( item => {
        item.addEventListener("click", () => {
        drop_down_container.classList.toggle("hidden");
        drop_down.innerHTML = icon1;
        hold = 1;
}) }
);
/* the code behind hidden and unhidden password*/

document.addEventListener("DOMContentLoaded", () => {
    const hide_icons = document.querySelectorAll(".not_seen");
    const password = document.getElementById("password");
    const password_con = document.getElementById("password1");

    const unhidden_icon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-blue-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>`;
    const hidden_icon = ` <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 hover:cursor-pointer transition-all duration-150 hover:text-blue-400 focus:text-blue-400 active:text-blue-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" /></svg>`;

    hide_icons.forEach(element => {
        element.addEventListener("click", () => {
            let Parent_id = element.closest("div[id^='password_container']").id;
            if (Parent_id === "password_container1") {
                password.type = password.type === "password" ? "text" : "password";
                element.innerHTML = password.type === "password" ? hidden_icon : unhidden_icon;
            } else if (Parent_id === "password_container2") {
                password_con.type = password_con.type === "password" ? "text" : "password";
                element.innerHTML = password_con.type === "password" ? hidden_icon : unhidden_icon;
            }
        })
    })
});










    