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

//     const unhidden_icon = `<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 text-blue-400">
//                                         <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>`;
//     const hidden_icon = ` <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 hover:cursor-pointer transition-all duration-150 hover:text-blue-400 focus:text-blue-400 active:text-blue-400">
//                                         <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" /></svg>`;


// the problem appeared to be one of two things
/*
1. either the addEventListener function was not working because i tried using several methods to troubleshoot the triggers like adding a console.log and an alert function to a lay function like i did below to trigger when the icon is clicked and i also tried using the add event listener which didnt work at all evry time i tried
2. the getElementByClassName returned an array of elements that were not properly handled and thats why the function didnt work

ill advise that you write a clean code by
1. replacing the svg imports inline by actually downloading the svg and not try to import them using absolute path because in a cindition of slow internet, it could mess up
2. add proper indentation for each line to increase readability and try to reduce the excessive usage of the <div> tag, learn to use <section, article, footer, header> etc
3. for now keep using this event trigger types like the use of regular function till we figure out whats happening to the event listener

i also noticed that for the passwords: both the first entry and the confirm password, i have to click in the empty spaces before the input box is active unlike the first two that even when i click on the placeholder, the input box is active
*/ 
 function password() {
    let password1 = document.getElementById('password1')
    let passtype = password1.getAttribute('type')

    // alert('password1 ' + passtype)

    if (passtype === 'password') {
        password1.setAttribute('type', 'text')
    } else {
        password1.setAttribute('type', 'password')
    }
}

function confirmPassword() {
    let password2 = document.getElementById('password2')
    let passtype = password2.getAttribute('type')

    // alert('password2 ' + passtype)

    if (passtype === 'password') {
        password2.setAttribute('type', 'text')
    } else {
        password2.setAttribute('type', 'password')
    }
}







    