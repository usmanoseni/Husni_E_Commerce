const categories_drop_down = document.getElementById("categories_drop_down");
const categories_drop_down_button = document.getElementById("categories_drop_down_button");
const categories_drop_down_content = document.querySelectorAll("#categories_drop_down_content");
// Toggle the categories drop-down button
categories_drop_down_button.addEventListener("click", () => {
    categories_drop_down.classList.toggle("hidden");
});

//toggle the container of the categories drop_down
categories_drop_down_content.forEach(item => {
    item.addEventListener("click", ()=> {
        categories_drop_down.classList.toggle("hidden");
    })
})

/*The code for operating the search bar */
const Search = document.getElementById("search1");
Search.addEventListener("input", () => {
    const Search_drop_down = document.getElementById("Search_drop_down1");
    const cancel_search = document.getElementById("cancel_search1");
    if (Search.value.trim() !== "") {
        Search_drop_down.classList.remove("hidden");
        cancel_search.classList.remove("hidden");
    } 
    else if (Search.value.trim()  === "") {
        Search_drop_down.classList.add("hidden");
        cancel_search.classList.add("hidden");
    }
});

const Search2= document.getElementById("search2");
Search2.addEventListener("input", () => {
    const Search_drop_down2 = document.getElementById("Search_drop_down2");
    const cancel_search2 = document.getElementById("cancel_search2");
    if (Search2.value.trim() !== "") {
        Search_drop_down2.classList.remove("hidden");
        cancel_search2.classList.remove("hidden");
    }
    else if (Search2.value.trim()  === "") {
        Search_drop_down2.classList.add("hidden");
        cancel_search2.classList.add("hidden");
    }
});

// the code for clicking a categories item
const categories_items = document.querySelectorAll("#categories_item");
categories_items.forEach((item) => {
    item.addEventListener("click", () => {
        categories_items.forEach(pervious => {
           pervious.classList.add("hover:text-blue-600", "hover:bg-blue-50", "active:border", "active:border-blue-500", "text-gray-800");
            pervious.classList.remove("text-blue-600", "bg-blue-50", "border", "border-blue-500");
        })
        item.classList.remove("hover:text-blue-600", "hover:bg-blue-50", "active:border", "active:border-blue-500", "text-gray-800");
        item.classList.add("text-blue-600", "bg-blue-50", "border", "border-blue-500");
    });
});
