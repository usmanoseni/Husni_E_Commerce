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





    