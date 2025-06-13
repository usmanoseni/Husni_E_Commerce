<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> www.husni_e-commerce/langingpage.com</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="stylesheet" href="./src/general.css">
</head>
<body class=" bg-slate-50 font-[roboto]">
    <div class=" lg:h-[350px] lg:w-[580px] md:h-[250px] md:w-[480px] h-[150px] w-[380px]  bg-fuchsia-500/25 rounded-full absolute right-3 bottom-3 blur-3xl z-1"></div>
    <div class="lg:h-[350px] lg:w-[580px] md:h-[250px] md:w-[480px] h-[150px] w-[380px]  bg-blue-500/25 rounded-full absolute left-3 top-3 blur-3xl z-1"></div>
    <nav class="bg-white/90 w-full h-14 fixed z-10 flex items-center justify-between px-10  top-0">
       <div class="flex items-center ">
         <img src="./icons/instagram-logo.svg" alt="Husni Logo" class="h-10 w-10">
         <div id="logo" class="text-2xl font-[merienda] font-extrabold tracking-tighter text-[primary]">Husni</div>
       </div>
        <div class="flex  gap-4">
                <button class="hidden md:block bg-blue-400 text-sm px-5 py-1 rounded-lg hover:transition-transform hover:duration-200 hover:bg-blue-500 active:bg-blue-600  cursor-pointer text-white "><a href="./login/login.php">Log in</a></button>
                <button class=" hidden md:block border-2 border-blue-400 px-4 py-1 rounded-lg hover:transition-transform hover:duration-200 hover:bg-blue-50 text-sm text-blue-950 cursor-pointer active:bg-blue-100"><a href="./login/sign_up.php">Create account</a></button>
               <div id="drop_down" class=" md:hidden hover:cursor-pointer hover:bg-blue-50 rounded-md hover:transition  hover:scale-100 hover:duration-200 p-2"> 
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="  size-7">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
                    </svg>
               </div>
            </div>
    </nav>
       <div id="drop_down_container" class="hidden  absolute  top-16 right-5 bg-white w-[150px] h-[94px] text-sm  rounded-md opacity-90 py-3 px-1 z-10 transition-discrete " >
            <div id="drop_down_content" class="pl-4 py-2 hover:bg-blue-50 rounded-sm active:bg-blue-100 focus:bg-blue-100  hover:cursor-pointer hover:transition  hover:scale-100 hover:duration-200 ">log in </div>
            <div id="drop_down_content" class="pl-4 py-2 hover:bg-blue-50 rounded-sm active:bg-blue-100 focus:bg-blue-100 hover: cursor-pointer hover:transition  hover:scale-100 duration-200">Create Account</div>
        </div>
    <div class="relative top-8 flex  h-[86vh] justify-between content-center font-[merriweather] px-6 md:px-12 gap-4 ">
        <div class="flex flex-col content-center justify-center w-full text-center lg:text-left">
            <div class="text-3xl  lg:text-4xl xl:text-5xl font-extrabold mb-2 lg:mb-4 xl:mb-6  bg-gradient-to-r bg-clip-text  from-pink-600 from-35% to-blue-950 to-50% text-transparent">Husni E-Commerce Website</div>
            <div class="text-3xl lg:text-4xl xl:text-5xl  font-extrabold ">Get what you desired at low prices</div>
            <div class=" text-md lg:text-lg xl:text-xl font-[roboto] mt-4 bg-gradient-to-r bg-clip-text  from-fuchsia-950 from-20% to-indigo-950 to-30% text-transparent">We are providing you with high reliable website to purchase your goods</div>
            <div class="flex gap-4 mt-6 justify-center  lg:justify-start font-[roboto] lg:ml-4 ">
                <button class="bg-blue-600 text-sm md:text-md lg:text-base px-6 md:px-8 lg:px-10 py-3 text-white rounded-md hover:cursor-pointer hover:bg-blue-600/90  active:bg-blue-700"><a href="./login/sign_up.php">Sign Up </a></button>
                <button class=" border-2 border-blue-600 text-sm md:text-md lg:text-base px-4 md:px-6 lg:px-8 rounded-md hover:cursor-pointer hover:bg-blue-600 hover:text-white  active:bg-blue-700"><a href="./login/login.php">Already with an Account</a></button>
            </div>
        </div>
        <div class=" hidden lg:flex lg:justify-center lg:items-center lg:content-center ">
            <img src="./images/Cart.svg" alt="" class=" w-98 h-98">
        </div>
    </div>
   <footer class="bg-white/90 fixed w-full h-14  bottom-0 z-10 flex items-center justify-between px-10">
        <p class="absolute left-1/2  -translate-x-1/2 text-xs md:text-sm  text-gray-600 whitespace-nowrap">
            © 2025 Husni E-Commerce. All rights reserved.
        </p>
        <div class="hidden md:flex gap-3 items-center ml-auto">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
            <img src="./icons/instagram-logo.svg" alt="Instagram logo" class="w-8 h-8 cursor-pointer transition-transform duration-200 hover:scale-110">
            </a>
            <a href="https://wa.me/your-number" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp">
            <img src="./icons/whatsapp-logo.png" alt="WhatsApp logo" class="w-8 h-8 cursor-pointer transition-transform duration-200 hover:scale-110">
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
            <img src="./icons/facebook-logo.png" alt="Facebook logo" class="w-8 h-8 cursor-pointer transition-transform duration-200 hover:scale-110">
            </a>
        </div>
    </footer>
    <script src="./js/index.js" defer></script>
</body>
</html>
