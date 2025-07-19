<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../src/general.css">
</head>
<body class=" bg-slate-50 font-[roboto]" >
    <?php include './components/nav.php' ?>
    <div class="w-full flex flex-col justify-center items-center bg-white z-20 relative top-14 px-6 pb-3">
       <div class="flex items-center  gap-4 md:gap-8 w-full  justify-center ">
            <div class="flex md:w-[70%] items-center justify-center md:justify-end w-full">
           <div class=" md:hidden hover:bg-blue-50 transition-all duration-200 h-10 w-10 mr-5 rounded-full flex items-center justify-center hover:cursor-pointer">
                 <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 ">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
           </div>
                <input type="text" placeholder="Search product, brand and categories"  class="h-9 md:h-10  w-5/6 sm:w-4/5   md:w-4/6  border-2 border-gray-400 rounded-bl-full rounded-tl-full text-gray-600 border-r-0 outline-none  px-3  md:px-4 text-sm md:text-base">
                <div class="bg-gray-50 h-9 w-10  md:h-10 md:w-12 rounded-br-full rounded-tr-full flex items-center justify-center border-2 border-gray-400 hover:cursor-pointer hover:bg-gray-100 focus:hover:bg-gray-100 active:hover:bg-gray-100">
                    <img src="../icons/search.png" alt="" class="md:size-5 size-4 ">
                </div>
           </div>
            <div class="flex items-center sm:gap-2 md:gap-4  md:w-[30%] ">
                <div class="flex items-center justify-center gap-1 hover:cursor-pointer ">
                    <div class="relative">
                        <div class="hover:bg-blue-50 md:hover:bg-transparent transition-all duration-200 h-10 w-10 md:h-10 md:w-10 rounded-full flex items-center justify-center ">
                        <img src="../icons/cart.png" alt="" class="size-5 relative ">
                    </div>
                    <div class="absolute top-0.5 left-5 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5">3</div>
                    </div>
                    <a href="#"><div class="hidden md:block text-sm hover:text-blue-400 active:text-blue-500 focus:text-blue-500  text-nowrap transition-all duration-200 ">My Cart</div></a>
                </div>
                <div class="hidden md:flex items-center justify-center gap-1 hover:cursor-pointer">
                    <a href="#"><img src="../icons/settings.png" alt="" class="size-5 " ></a>
                    <a href="#"><div class="text-sm  hover:text-blue-400 active:text-blue-500 focus:text-blue-500 text-nowrap  transition-all duration-200 ">Settings</div></a>
                </div>
                <div class="hidden md:flex items-center justify-center gap-1 hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>
                    <a href="#"><div class="text-sm  hover:text-blue-400 active:text-blue-500 focus:text-blue-500 text-nowrap transition-all duration-200 ">Get help</div></a>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 sm:ml-0.5 md:ml-1">
                    <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                    </svg>
                </div>
            
            </div>
       </div>
       <div class="flex items-center justify-between w-[92%]  mt-3 md:mt-4 gap-2 px-0 ">
            <div class="flex flex-none  h-8 w-8 bg-gradient-to-tl from-blue-400/10 to-fuchsia-400/10  border border-blue-500 justify-center items-center rounded-full hover:cursor-pointer  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                </svg>
            </div>
            <div  id="" class="scroll_bar flex  grow-1 w-full wrap-anywhere overflow-x-auto scrollbar-hide gap-0.5 justify-center items-center ">
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap " >Phone and Tablets </div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap" >Home Appliances </div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Computer and Accessories</div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Women's Fashion</div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Men's Fashion</div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Kid's Fashion</div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap" >Health and Beauty </div>
                <div class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 px-5 py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap" >Electrionics </div>
            </div>
            <div class="flex flex-none  h-8 w-8 bg-gradient-to-tl from-blue-400/10 to-fuchsia-400/10  border border-blue-500 justify-center items-center rounded-full hover:cursor-pointer  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
       </div>
    </div>
</body>
</html>