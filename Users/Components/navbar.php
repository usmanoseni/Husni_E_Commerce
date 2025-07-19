<?php echo <<<HTML
    <div class=" fixed top-0 bg-linear-to-tl from-fuchsia-700 to-blue-700 flex w-full justify-center items-center h-11 gap-2">
        <img src="../icons/party-popper.png" alt="" class="size-6 md:size-7">
        <div class=" text-white text-xs font-semibold ">Welcome to Husni E-commerce website </div>
    </div>
    <nav class=" flex flex-col fixed h-28  z-10 top-11 bg-white w-full  items-center justify-between ">
        <div class="w-[98%] flex justify-center  gap-2  !mt-1  items-center h-14">
            <div class="flex justify-between items-center !px-4 md:!px-8 w-full h-full  ">
                <div class="flex items-center ">
                    <img src="../icons/instagram-logo.svg" alt="Husni Logo" class="h-10 w-10">
                    <div id="logo" class="text-2xl font-[merienda] font-extrabold tracking-tighter text-[primary]">Husni</div>
                </div>
                <div class="flex justify-center items-center gap-6 ">
                    <div class="hidden relative md:flex justify-center items-center ">
                        <input type="text" placeholder="Search product, brand and categories"  id="search1" class=" h-9 md:h-10 md:min-w-[19rem] lg:min-w-[33rem] xl:min-w-[36rem] border-2 border-gray-400 rounded-bl-full rounded-tl-full text-gray-600 border-r-0 outline-none  !px-4  md:px-4 text-sm md:text-base ">
                        <div class="bg-gray-50 h-9 w-10  md:h-10 md:w-12 rounded-br-full rounded-tr-full flex items-center justify-center border-2 border-gray-400 hover:cursor-pointer hover:bg-gray-100 focus:hover:bg-gray-100 active:hover:bg-gray-100">
                            <img src="../icons/search.png" alt="" class="md:size-5 size-4 ">
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="cancel_search1" class=" hidden absolute bg-white right-10 size-6 mr-3 hover:cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                        </svg>
                         <div id="Search_drop_down1" class=" hidden absolute w-5/6 bg-white top-12 !h-[50vh] !p-2 rounded-md shadow-lg shadow-t- z-20">
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                            <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        </div>
                    </div>
                    <div class="flex items-center sm:gap-2 md:gap-4 w-full ">
                        <div class="hidden md:flex items-center justify-center gap-3 hover:cursor-pointer ">
                            <div class=" relative ">
                                <img src="../icons/cart.png" alt="" class="size-5 relative ">
                                <div class="absolute -top-1.5 left-3 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 h-4 w-4 flex justify-center items-center ">3</div>
                            </div>
                            <a href="#"><div class="hidden md:block text-sm hover:text-blue-400 active:text-blue-500 focus:text-blue-500  text-nowrap transition-all duration-200 ">My Cart</div></a>
                        </div>
                        <div class="hidden md:flex items-center justify-center gap-1 hover:cursor-pointer">
                            <a href="#"><img src="../icons/settings.png" alt="" class="size-5 " ></a>
                            <a href="#"><div class="text-sm  hover:text-blue-400 active:text-blue-500 focus:text-blue-500 text-nowrap  transition-all duration-200 ">Settings</div></a>
                        </div>
                        <div class="hidden md:flex items-center justify-center gap-1 hover:cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                            </svg>
                            <a href="#"><div class="text-sm  hover:text-blue-400 active:text-blue-500 focus:text-blue-500 text-nowrap transition-all duration-200 ">Get help</div></a>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-4 sm:ml-0.5 md:ml-1">
                            <path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 0 1-1.06 0l-7.5-7.5a.75.75 0 0 1 1.06-1.06L12 14.69l6.97-6.97a.75.75 0 1 1 1.06 1.06l-7.5 7.5Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div> 
                </div>
                <div class="flex  justify-center items-center gap-1.5">
                    <div class="md:hidden text-xs text-gray-700 " >
                        <div class=" text-pink-700 w-full text-end font-semibold ">Welcome</div>
                        <div class=" font-semibold  text-gray-600  "  >Usman@2503</div>
                    </div>
                    <div class="flex items-center justify-center hover:cursor-pointer">
                        <a href="#"> <img src="https://tse4.mm.bing.net/th/id/OIP.jMc9pfCh9x_NrNBSZEnU0AHaE7?rs=1&pid=ImgDetMain&o=7&rm=3" alt="../icons/profile.png" class="size-8 hover:cursor-pointer rounded-full  " ></a> 
                    </div>  
                    <div class="hidden lg:block text-xs text-gray-700 " >
                        <div class=" text-pink-700 w-full font-semibold ">Welcome</div>
                        <div class=" font-semibold  text-gray-600  "  >Usman@2503</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative md:hidden w-[95%] flex justify-center  items-center h-14" >
            <div class="flex  justify-between items-center gap-2 sm:gap-4  ">
                <div  id="categories_drop_down_button" class=" md:hidden hover:bg-blue-50 transition-all duration-200 h-10 w-10 mr-5 rounded-full flex gap-2 items-center justify-center hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 relative ">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
                <div class=" relative flex  justify-center items-center ">
                    <input type="text" placeholder="Search product, brand and categories" id="search2" class="h-9  text-gray-600 text-sm !pl-3 !pr-2 w-86 sm:w-96 min-[712px]:w-78 min-[600px]:w-72 min-[540px]:w-68 min-[412px]:w-58 min-[360px]:w-52 min-[320px]:w-42 border-2 border-gray-400 rounded-bl-full rounded-tl-full border-r-0 outline-none ">
                    <div class="bg-gray-50 h-9 w-10 rounded-br-full rounded-tr-full flex items-center justify-center border-2 border-gray-400 hover:cursor-pointer hover:bg-gray-100 focus:hover:bg-gray-100 active:hover:bg-gray-100">
                        <img src="../icons/search.png" alt="" class="md:size-5 size-4 ">
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="cancel_search2" class=" hidden absolute  bg-white right-7 size-6 mr-3 hover:cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                    <div id="Search_drop_down2" class="hidden absolute w-full bg-white top-12 !h-[50vh] !p-2 rounded-md shadow-lg shadow-t- z-20">
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                        <div class="hover:bg-blue-50 flex h-8 w-full items-center justify-start text-sm cursor-pointer !pl-2 ">Lorem, ipsum dolor.</div>
                    </div>
                </div>
                
                <div class=" flex items-center justify-center gap-1 hover:cursor-pointer ">
                    <a href="#" class="relative">
                        <div class="hover:bg-blue-50 sm:hover:bg-transparent transition-all duration-200 h-10 w-10 md:h-10 md:w-10 rounded-full flex items-center justify-center ">
                            <img src="../icons/cart.png" alt="" class="size-5 relative ">
                        </div>
                        <div class="absolute top-0.5 left-5 bg-red-500 text-white text-xs rounded-full px-1.5 py-0.5 h-4 w-4 flex justify-center items-center">3</div>
                    </a>
                     <a href="#"><div class="hidden min-[600px]:block sm:block text-sm hover:text-blue-400 active:text-blue-500 focus:text-blue-500  text-nowrap transition-all duration-200 ">My Cart</div></a>
                </div>
            </div>
            <div id="categories_drop_down" class=" Scroll_categories hidden bg-white absolute top-16 shadow-xl w-4/6 sm:w-2/4 h-[25.9rem] left-4 !pb-3 rounded-md overflow-y-auto ">
                <div class="w-full h-12 flex !px-3  items-center justify-between border-b border-b-blue-400 ">
                    <div class=" font-semibold text-gray-800">Categories</div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" id="categories_drop_down_content" class="size-6 mr-3 hover:cursor-pointer">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </div>
                <div class="!px-2 !py-1 flex flex-col justify-center ">
                    <div id="categories_drop_down_content" class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path d="M10.5 18.75a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" />
                        <path fill-rule="evenodd" d="M8.625.75A3.375 3.375 0 0 0 5.25 4.125v15.75a3.375 3.375 0 0 0 3.375 3.375h6.75a3.375 3.375 0 0 0 3.375-3.375V4.125A3.375 3.375 0 0 0 15.375.75h-6.75ZM7.5 4.125C7.5 3.504 8.004 3 8.625 3H9.75v.375c0 .621.504 1.125 1.125 1.125h2.25c.621 0 1.125-.504 1.125-1.125V3h1.125c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-6.75A1.125 1.125 0 0 1 7.5 19.875V4.125Z" clip-rule="evenodd" />
                        </svg>
                        Phone and Tablet
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                        <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        Home Appliances
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z" clip-rule="evenodd" />
                        </svg>
                        Computer and Accessories
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <i class="uil uil-shop "></i>Women's Fashion
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <i class="uil uil-store-alt"></i> 
                        Men's Fashion
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10  hover:bg-blue-100 text-gray-600 text-sm hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <i class="uil uil-shop "></i>
                        Kid's Fashion
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M7.5 5.25a3 3 0 0 1 3-3h3a3 3 0 0 1 3 3v.205c.933.085 1.857.197 2.774.334 1.454.218 2.476 1.483 2.476 2.917v3.033c0 1.211-.734 2.352-1.936 2.752A24.726 24.726 0 0 1 12 15.75c-2.73 0-5.357-.442-7.814-1.259-1.202-.4-1.936-1.541-1.936-2.752V8.706c0-1.434 1.022-2.7 2.476-2.917A48.814 48.814 0 0 1 7.5 5.455V5.25Zm7.5 0v.09a49.488 49.488 0 0 0-6 0v-.09a1.5 1.5 0 0 1 1.5-1.5h3a1.5 1.5 0 0 1 1.5 1.5Zm-3 8.25a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                        <path d="M3 18.4v-2.796a4.3 4.3 0 0 0 .713.31A26.226 26.226 0 0 0 12 17.25c2.892 0 5.68-.468 8.287-1.335.252-.084.49-.189.713-.311V18.4c0 1.452-1.047 2.728-2.523 2.923-2.12.282-4.282.427-6.477.427a49.19 49.19 0 0 1-6.477-.427C4.047 21.128 3 19.852 3 18.4Z" />
                        </svg>
                        <div>Health and Beauty</div>
                    </div>
                    <div id="categories_drop_down_content"  class=" flex gap-2 h-10 text-gray-600 text-sm hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path d="M16.5 7.5h-9v9h9v-9Z" />
                        <path fill-rule="evenodd" d="M8.25 2.25A.75.75 0 0 1 9 3v.75h2.25V3a.75.75 0 0 1 1.5 0v.75H15V3a.75.75 0 0 1 1.5 0v.75h.75a3 3 0 0 1 3 3v.75H21A.75.75 0 0 1 21 9h-.75v2.25H21a.75.75 0 0 1 0 1.5h-.75V15H21a.75.75 0 0 1 0 1.5h-.75v.75a3 3 0 0 1-3 3h-.75V21a.75.75 0 0 1-1.5 0v-.75h-2.25V21a.75.75 0 0 1-1.5 0v-.75H9V21a.75.75 0 0 1-1.5 0v-.75h-.75a3 3 0 0 1-3-3v-.75H3A.75.75 0 0 1 3 15h.75v-2.25H3a.75.75 0 0 1 0-1.5h.75V9H3a.75.75 0 0 1 0-1.5h.75v-.75a3 3 0 0 1 3-3h.75V3a.75.75 0 0 1 .75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h10.5a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V6.75Z" clip-rule="evenodd" />
                        </svg>
                        Electronics
                    </div>
                </div>
                <a href="#"  class="w-full h-12 flex !px-3 hover:cursor-pointer  items-center justify-between border-t border-t-blue-400 ">
                    <div   class="flex gap-1.5 justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6 text-gray-800 ">
                        <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12Zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 0 1-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 0 1-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 0 1-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584ZM12 18a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Z" clip-rule="evenodd" />
                        </svg>
                        <div class=" font-semibold text-gray-800 ">Get Help </div>
                    </div>
                   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 sm:ml-0.5 md:ml-1">
                    <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 0 1 0 1.06l-7.5 7.5a.75.75 0 0 1-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 0 1 1.06-1.06l7.5 7.5Z" clip-rule="evenodd" />
                    </svg>
                </a>
                <div  class="w-full h-10 flex  hover:cursor-pointer  items-center justify-between !px-2 border-t border-t-blue-400 ">
                    <div class="flex gap-1.5 justify-center items-center">
                        <img src="https://tse4.mm.bing.net/th/id/OIP.jMc9pfCh9x_NrNBSZEnU0AHaE7?rs=1&pid=ImgDetMain&o=7&rm=3" alt="../icons/profile.png" class="size-7 hover:cursor-pointer rounded-full  " >
                        <div class=" font-semibold text-gray-800">Account Settings </div>
                    </div>
                </div>
                <div class="!px-4 !py-1 flex flex-col justify-center " >
                    <div class="flex justify-between items-center h-8">
                        <div class="text-gray-600 ">Dark mode</div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                        </svg>
                    </div>
                    <div id="categories_drop_down_content" class=" flex gap-2 h-10 text-gray-600 hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                        </svg>
                        Profile
                    </div>
                    <div id="categories_drop_down_content" class=" flex gap-2 h-10 text-gray-600 hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M3 2.25a.75.75 0 0 0 0 1.5v16.5h-.75a.75.75 0 0 0 0 1.5H15v-18a.75.75 0 0 0 0-1.5H3ZM6.75 19.5v-2.25a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h.75a.75.75 0 0 1 0 1.5h-.75A.75.75 0 0 1 6 6.75ZM6.75 9a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM6 12.75a.75.75 0 0 1 .75-.75h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 6a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75Zm-.75 3.75A.75.75 0 0 1 10.5 9h.75a.75.75 0 0 1 0 1.5h-.75a.75.75 0 0 1-.75-.75ZM10.5 12a.75.75 0 0 0 0 1.5h.75a.75.75 0 0 0 0-1.5h-.75ZM16.5 6.75v15h5.25a.75.75 0 0 0 0-1.5H21v-12a.75.75 0 0 0 0-1.5h-4.5Zm1.5 4.5a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 2.25a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75v-.008a.75.75 0 0 0-.75-.75h-.008ZM18 17.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Z" clip-rule="evenodd" />
                        </svg>
                        Store Locations
                    </div>
                    <div id="categories_drop_down_content" class=" flex gap-2 h-10 text-gray-600 hover:bg-blue-100 hover:text-blue-600  justify-start items-center !pl-2 rounded-sm hover:cursor-pointer ">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5">
                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 0 0-5.25 5.25v3a3 3 0 0 0-3 3v6.75a3 3 0 0 0 3 3h10.5a3 3 0 0 0 3-3v-6.75a3 3 0 0 0-3-3v-3c0-2.9-2.35-5.25-5.25-5.25Zm3.75 8.25v-3a3.75 3.75 0 1 0-7.5 0v3h7.5Z" clip-rule="evenodd" />
                        </svg>
                        Security 
                    </div>
                </div>
                <a class=" w-full flex justify-center items-center" href="../login/login.php">
                    <div class="flex gap-1 justify-center items-center w-5/6 hover:bg-blue-100 h-10 text-gray-600 rounded-sm  hover:text-blue-600 font-semibold ">
                        <i class="uis uis-signout"></i>
                        <div>Log out</div> 
                    </div>
                </a>
            </div>
        </div>

        <div class="hidden md:flex items-center justify-between w-[90%] h-12 mt-2 pb-2 md:mt-4 gap-2  ">
            <div class="flex flex-none  h-8 w-8 bg-gradient-to-tl from-blue-400/10 to-fuchsia-400/10  border border-blue-500 justify-center items-center rounded-full hover:cursor-pointer  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5" />
                </svg>
            </div>
            <div  id="categories_list" class="scroll_bar flex  w-full h-12 overflow-x-auto scrollbar-hide gap-0.5 justify-center items-center ">
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5 rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap " >Phone and Tablets </div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap" >Home Appliances </div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Computer and Accessories</div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Women's Fashion</div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Men's Fashion</div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500  text-nowrap" >Kid's Fashion</div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap" >Health and Beauty </div>
                <div id="categories_item" class="text-sm text-gray-800 hover:cursor-pointer  hover:bg-blue-50 flex  h-9 justify-center items-center !px-5 !py-1.5  rounded-full hover:text-blue-600 active:border active:border-blue-500 text-nowrap" >Electrionics </div>
            </div>
            <div class="flex flex-none  h-8 w-8 bg-gradient-to-tl from-blue-400/10 to-fuchsia-400/10  border border-blue-500 justify-center items-center rounded-full hover:cursor-pointer  ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" />
                </svg>
            </div>
       </div>
    </nav>
    HTML ?>