<header class="bb-header relative z-[5] border-b-[1px] border-solid border-[#eee]">
    <div class="top-header bg-[#3d4750] py-[6px] max-[991px]:hidden">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="inner-top-header flex justify-between">
                        <div class="col-left-bar">
                            <a href="{{route('home')}}" class="transition-all duration-[0.3s] ease-in-out font-Poppins font-light text-[14px] text-[#fff] leading-[28px] tracking-[0.03rem]">Mon - Sat 11:00AM - 6:30PM</a>
                        </div>
                        <div class="col-right-bar flex">

                            <div class="cols px-[12px]">
                                <a href="{{route('contactUs')}}" class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[14px] text-[#fff] font-light leading-[28px] tracking-[0.03rem]">Call Back Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bottom-header hidden max-[991px]:block bg-[#f8f8fb] shadow-lg shadow-black lg:py-0 py-1 ">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px] ">
                    <div class="inner-bottom-header flex justify-between max-[767px]:flex-col items-center">
                        <div class="cols bb-icons  w-full justify-between lg:hidden  flex">
                            <div class="bb-flex-justify w-full max-[575px]:flex max-[575px]:justify-between">
                                <div class="bb-header-buttons h-full w-full flex justify-between items-center">
                                    <a href="{{route('home')}}" class="bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]">
                                        <div class="header-icon">
                                            <img src="{{asset('assets/images/footerLogo.png')}}" class="w-[100px]" alt="footer_logo">
                                        </div>
                                    </a>
                                    <form class="bb-btn-group-form   hidden max-[991px]:flex relative max-[991px]:ml-[20px] max-[767px]:m-[0]" action="#">
                                        <input class="form-control bb-search-bar bg-[#f8f8fb] block w-full min-h-[45px] h-[48px] py-[7px] pr-[10px]  max-[991px]:min-h-[40px] max-[991px]:h-[40px] max-[991px]:p-[10px] text-[14px] font-normal leading-[1] text-[#777] rounded-[10px] border-[1px] border-black/40 tracking-[0.5px]" placeholder="Search products..." type="text">
                                        <button class="submit absolute top-[0] left-[auto] right-[0] flex items-center justify-center w-[45px] h-full bg-transparent text-[#555] text-[16px] rounded-[0] outline-[0] border-[0] padding-[0]" type="submit">
                                            <i class="fa fa-search text-[18px] leading-[12px] text-[#555]"></i>
                                        </button>
                                    </form>
                                    <a href="{{route('home')}}" class="bb-toggle-menu hidden max-[991px]:flex max-[991px]:ml-[20px]">
                                        <div class="header-icon">
                                            <i class="fa fa-bars text-[22px] text-[#5eb595]"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-main-menu-desk bg-[#f8f8fb] shadow-lg shadow-black  py-[5px] border-t-[1px] border-solid border-[#eee] max-[991px]:hidden">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="bb-inner-menu-desk flex max-[1199px]:relative justify-between">
                        <div class="cols bb-logo-detail lg:flex md:flex hidden max-[767px]:justify-between items-center">
                            <!-- Header Logo Start -->
                            <div class="header-logo flex items-center max-[575px]:justify-center">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('assets/images/footerLogo.png')}}" alt="logo" class="light w-[150px] max-[991px]:w-[115px] block">
                                </a>
                            </div>

                        </div>
                        <div class="bb-main-menu relative flex flex-[auto] justify-end max-[991px]:hidden" id="navbarSupportedContent">
                            <ul class="navbar-nav flex flex-wrap flex-row justify-center">
                                <li class="nav-item flex items-center font-Poppins text-[15px]  font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="{{Route::currentRouteName()==='home'?'text-[#5eb595]':'text-black '}} nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-semibold  tracking-[0.03rem] block" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item flex items-center font-Poppins text-[15px]  font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="{{Route::currentRouteName()==='aboutUs'?'text-[#5eb595]':'text-black '}} nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-semibold tracking-[0.03rem] block" href="{{route('aboutUs')}}">About Us</a>
                                </li>

                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-semibold text-black  block tracking-[0.03rem]" href="{{route('home')}}">Products</a>
                                    <ul class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('products',['type'=>'compressor'])}}">Compressor</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('products',['type'=>'condensing-unit'])}}">Condensing Unit</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('products',['type'=>'compressor-oil'])}}">Compressor Oil</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">Heating Elements</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">Refrigeration Gas</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">Flow Control Switches</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">Tools</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('products',['type'=>'temprature-controller'])}}">Temperature Controller</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">Electrical Motors</a></li>
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-semibold  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">General Items</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-semibold text-black  block tracking-[0.03rem]" href="{{route('home')}}">Solution</a>
                                    <ul class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('home')}}">Cold Room Solution</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item bb-dropdown flex items-center relative mr-[45px]">
                                    <a class="nav-link bb-dropdown-item font-Poppins relative p-[0] leading-[28px] text-[15px] font-semibold text-black  block tracking-[0.03rem]" href="{{route('home')}}">Download</a>
                                    <ul class="bb-dropdown-menu min-w-[205px] p-[10px] transition-all duration-[0.3s] ease-in-out mt-[25px] absolute top-[40px] z-[16] text-left opacity-[0] invisible left-[0] right-[auto] bg-[#fff] border-[1px] border-solid border-[#eee] flex flex-col rounded-[10px]">
                                        <li class="m-[0] py-[5px] px-[15px] flex items-center"><a class="dropdown-item transition-all duration-[0.3s] ease-in-out py-[5px] leading-[22px] text-[14px] font-normal  hover:text-[#5eb595] capitalize block w-full whitespace-nowrap" href="{{route('download',['type'=>'technicalDataSheet'])}}">Technical Data sheets</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item flex items-center font-Poppins text-[15px]  font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="{{Route::currentRouteName()==='blog'?'text-[#5eb595]':'text-black '}} nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-semibold tracking-[0.03rem] block" href="{{route('blog')}}">Blog</a>
                                </li>
                                <li class="nav-item flex items-center font-Poppins text-[15px]  font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="{{Route::currentRouteName()==='gallery'?'text-[#5eb595]':'text-black '}} nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-semibold tracking-[0.03rem] block" href="{{route('gallery')}}">Gallery</a>
                                </li>
                                <li class="nav-item flex items-center font-Poppins text-[15px]  font-light leading-[28px] tracking-[0.03rem] mr-[35px]">
                                    <a class="{{Route::currentRouteName()==='contactUs'?'text-[#5eb595]':'text-black '}}  nav-link p-[0] font-Poppins leading-[28px] text-[15px] font-semibold tracking-[0.03rem] block" href="{{route('contactUs')}}">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bb-mobile-menu-overlay hidden w-full h-screen fixed top-[0] left-[0] bg-[#000000cc] z-[16]"></div>
    <div id="bb-mobile-menu" class="bb-mobile-menu transition-all duration-[0.3s] ease-in-out w-[340px] h-full pt-[15px] px-[20px] pb-[20px] fixed top-[0] right-[auto] left-[0] bg-[#fff] translate-x-[-100%] flex flex-col z-[17] overflow-auto max-[480px]:w-[300px]">
        <div class="bb-menu-inner">
            <div class="bb-menu-content">
                <ul>
                    <li class="relative">
                        <a href="{{route('home')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Home</a>
                    </li>
                    <li class="relative">
                        <a href="{{route('aboutUs')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">About Us</a>
                    </li>
                    <li class="relative">
                        <a href="{{route('home')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Products</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="{{route('products',['type'=>'compressor'])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Compressor</a></li>
                            <li class="relative"><a href="{{route('products',['type'=>'condensing-unit'])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Condensing Unit</a></li>
                            <li class="relative"><a href="{{route('products',['type'=>'compressor-oil'])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Compressor Oil</a></li>
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Heating Elements</a></li>
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Refrigeration Gas</a></li>
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Flow Control Switches</a></li>
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Tools</a></li>
                            <li class="relative"><a href="{{route('products',['type'=>'temprature-controller'])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Temperature Controller</a></li>
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Electrical Motors</a></li>
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">General Items</a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="{{route('home')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Solution</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="{{route('home')}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Cold Room Solution</a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="{{route('home')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Download</a>
                        <ul class="sub-menu w-full min-w-[auto] p-[0] mb-[10px] static hidden visible opacity-[1]">
                            <li class="relative"><a href="{{route('download',['type'=>'technicalDataSheet'])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] transition-all duration-[0.3s] ease-in-out font-normal pl-[12px] text-[14px] text-[#777] mb-[0] capitalize block py-[12px]">Technical Data sheets</a></li>
                        </ul>
                    </li>
                    <li class="relative">
                        <a href="{{route('blog')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Blog</a>
                    </li>
                    <li class="relative">
                        <a href="{{route('gallery')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Gallery</a>
                    </li>
                    <li class="relative">
                        <a href="{{route('contactUs')}}" class="transition-all duration-[0.3s] ease-in-out mb-[12px] p-[12px] block font-Poppins capitalize  border-[1px] border-solid border-[#eee] rounded-[10px] text-[15px] font-semibold leading-[28px] tracking-[0.03rem]">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
