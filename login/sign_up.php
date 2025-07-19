<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> www.husni_e-commerce/Signup_page.com</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="stylesheet" href="../src/general.css">
</head>
<body class="bg-slate-50 font-[roboto] flex items-center justify-center place-items-center h-[100vh] ">
    <div class="lg:h-[350px] lg:w-[580px] md:h-[250px] md:w-[480px] h-[150px] w-[380px] bg-fuchsia-500/25 rounded-full absolute right-3 bottom-3 blur-3xl z-1"></div>
    <div class="lg:h-[350px] lg:w-[580px] md:h-[250px] md:w-[480px] h-[150px] w-[380px] bg-blue-500/25 rounded-full absolute left-3 top-3 blur-3xl z-1"></div>
    <div class="relative flex top-0 left-0 bg-white/90  w-[335px] z-20 rounded-2xl shadow-2xl flex-col gap-3 !py-6 !px-3">
        <form action="#" method="post">
            <div class="flex justify-center gap-1 align-middle items-center text-xl font-bold text-center">Sign up <span class="text-violet-600 text-3xl ">!</span></div>
            <div class="flex gap-0.5 content-center justify-center w-full !mt-4 ">
                <div id="dot" class="w-2 h-2 bg-blue-400 rounded-full"></div>
               <div id="dot" class="w-2 h-2 bg-amber-400 rounded-full"></div>
               <div id="dot" class="w-2 h-2 bg-fuchsia-400 rounded-full"></div>
            </div>
            <div class="flex flex-col !mt-4  gap-3.5">
                <div class="relative h-10 w-full">
                    <input type="text" id="username" name="username" placeholder=" " autocomplete="off" required class="peer relative h-full w-full border border-gray-400 bg-transparent !px-3 !pt-4 !pb-1.5 text-sm font-semibold text-gray-600 placeholder-transparent focus:border-blue-500 focus:outline-none outline-none transition-all duration-200 rounded-md" />
                    <label for="username" class="absolute left-3 -top-2.5 text-sm text-gray-500  transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-focus:-top-2.5 bg-white !px-1 peer-focus:text-sm peer-focus:text-blue-500 peer-focus:border-none cursor-text "> Full name </label>
                </div>
                <div class="relative h-10 w-full">
                    <input type="email" id="usermail" name="usermail" placeholder=" " autocomplete="off" required class="peer relative h-full w-full border border-gray-400 bg-transparent !pt-4 !pb-1.5 text-sm font-semibold text-gray-600 placeholder-transparent focus:border-blue-500 focus:outline-none outline-none transition-all duration-200 rounded-md" />
                    <label for="usermail" class="absolute left-3 -top-2.5 text-sm text-gray-500  transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-focus:-top-2.5 bg-white !px-1 peer-focus:text-sm peer-focus:text-blue-500 peer-focus:border-none cursor-text "> Enter your email </label>
                </div>
                <div id="password_container1" class="relative h-10 w-full">
                    <input type="password" id="password1" name="password" placeholder=" " autocomplete="off" required class="peer relative h-full w-full border border-gray-400 bg-transparent !pt-4 !pb-1.5 text-sm font-semibold text-gray-600 placeholder-transparent focus:border-blue-500 focus:outline-none outline-none transition-all duration-200 rounded-md" />
                    <label for="password1" class="absolute left-3 -top-2.5 text-sm text-gray-500  transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-focus:-top-2.5 bg-white !px-1 peer-focus:text-sm peer-focus:text-blue-500 peer-focus:border-none cursor-text "> Password</label>
                   <div id="not_seen1"  class=" absolute right-3 top-3"  onclick="Password1()">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 hover:cursor-pointer transition-all duration-150 hover:text-blue-400 focus:text-blue-400 active:text-blue-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                        </svg>
                   </div>
                </div>
             <div class="flex flex-col gap-0.5">
                   <div id="password_container2" class="relative h-10 w-full">
                    <input type="password" id="password2" name="password" placeholder=" " autocomplete="off" required class="peer relative h-full w-full border border-gray-400 bg-transparent !pt-4 !pb-1.5 text-sm font-semibold text-gray-600 placeholder-transparent focus:border-blue-500 focus:outline-none outline-none transition-all duration-200 rounded-md" />
                    <label for="password2" class="absolute left-3 -top-2.5 text-sm text-gray-500  transition-all duration-200 peer-placeholder-shown:top-3 peer-placeholder-shown:text-sm peer-placeholder-shown:text-gray-400 peer-focus:-top-2.5 bg-white !px-1 peer-focus:text-sm peer-focus:text-blue-500 peer-focus:border-none cursor-text ">Confirm password</label>
                     <div id="not_seen2"  class=" absolute right-3 top-3" onclick="Password2()" >
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500 hover:cursor-pointer transition-all duration-150 hover:text-blue-400 focus:text-blue-400 active:text-blue-400">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                    </svg>
                   </div>
                </div>
                <div id="error_message" class="hidden text-xs text-red-500 !ml-2" > password on march</div>
             </div>

            </div>
            <button class="relative w-full bg-blue-400 text-sm !px-10 !py-2.5 !mt-3 rounded-md content-center hover:transition-transform hover:duration-200  hover:bg-blue-500 active:bg-blue-600  cursor-pointer text-white "><a href="#">Sign up</a></button>
            
           <!-- <div id="line" class=" w-full bg-blue-400"></div> -->
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-full text-gray-700 hover:text-blue-600 ">
            <div class="flex items-center justify-center gap-2  text-sm border border-gray-800 !py-0.5 rounded-md !mt-3.5">
                    <img src="../icons/google-logo.svg" alt="Instagram logo" class="w-8 h-8 cursor-pointer transition-transform duration-200 hover:scale-100">
                    <span>Continue with Google</span>
            </div>
              </a>
              <div class="text-sm !mt-2.5 !ml-3 text-gray-600 font-semibold">Already with an account ? <span class="hover:text-blue-400  transition-all duration-200 text-fuchsia-700 focus:text-blue-400 active:text-blue-400 "><a href="../login/login.php">login</a></span></div>
        </form>
    </div>
    <script src="../js/signUp.js" defer></script>
</body>
</html>