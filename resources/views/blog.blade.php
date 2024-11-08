<x-layout>
    <section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-primary max-[767px]:text-center max-[767px]:mb-[10px]">Blogs</h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{route('home')}}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="fa fa-chevron-right text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-primary text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Blogs</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-vendors overflow-hidden pt-[50px] max-[1199px]:pt-[35px] pb-[100px] max-[1199px]:pb-[70px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class="flex flex-wrap w-full mb-[-24px]">
                    <div class="min-[992px]:w-[33.33%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-blog-card bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                            <div class="blog-image">
                                <img src="{{asset('assets/images/blogs/blog1.png')}}" alt="blog-1" class="w-full rounded-tl-[20px] rounded-tr-[20px]">
                            </div>
                            <div class="blog-contact p-[20px]">
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">9th March, 2020 | by <span class="underline text-primary">Admin</span></p>

                                <h5 class="mb-[12px] text-[18px] leading-[1.2]"><a href="{{route('blogDetail',['id'=>1])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] text-[18px] font-medium text-[#3d4750]">Bitzer LH104E/4DES-7Y Condensing Unit</a></h5>
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">Made in Germany. Lowest price and readily available in Chandigarh, Punjab, Haryana, Rajasthan, Mumba....</p>
                                <div class="blog-btn flex">
                                    <a href="{{route('blogDetail',['id'=>1])}}" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[14px] text-[14px] font-normal text-[#fff] bg-primary rounded-[10px] border-[1px] border-solid border-primary hover:bg-transparent hover:border-[#3d4750] hover:text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[33.33%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-blog-card bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                            <div class="blog-image">
                                <img src="{{asset('assets/images/blogs/blog2.jpeg')}}" alt="blog-1" class="w-full rounded-tl-[20px] rounded-tr-[20px]">
                            </div>
                            <div class="blog-contact p-[20px]">
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">19th February, 2020  | by <span class="underline text-primary">Admin</span></p>

                                <h5 class="mb-[12px] text-[18px] leading-[1.2]"><a href="{{route('blogDetail',['id'=>2])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] text-[18px] font-medium text-[#3d4750]">Bitzer condensing Unit in Chandigarh</a></h5>
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">We are leading distributor of all types of bitzer products in India. If you are....</p>
                                <div class="blog-btn flex">
                                    <a href="{{route('blogDetail',['id'=>2])}}" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[14px] text-[14px] font-normal text-[#fff] bg-primary rounded-[10px] border-[1px] border-solid border-primary hover:bg-transparent hover:border-[#3d4750] hover:text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[33.33%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-blog-card bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                            <div class="blog-image">
                                <img src="{{asset('assets/images/blogs/blog2.jpeg')}}" alt="blog-1" class="w-full rounded-tl-[20px] rounded-tr-[20px]">
                            </div>
                            <div class="blog-contact p-[20px]">
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">15th May, 2019 | by <span class="underline text-primary">Admin</span></p>

                                <h5 class="mb-[12px] text-[18px] leading-[1.2]"><a href="{{route('blogDetail',['id'=>3])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] text-[18px] font-medium text-[#3d4750]">Bitzer compressor distributor in chennai</a></h5>
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">We are leading distributor of all types of bitzer products in India. If you are .....</p>
                                <div class="blog-btn flex">
                                    <a href="{{route('blogDetail',['id'=>3])}}" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[14px] text-[14px] font-normal text-[#fff] bg-primary rounded-[10px] border-[1px] border-solid border-primary hover:bg-transparent hover:border-[#3d4750] hover:text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="min-[992px]:w-[33.33%] min-[768px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="bb-blog-card bg-[#f8f8fb] border-[1px] border-solid border-[#eee] rounded-[20px]">
                            <div class="blog-image">
                                <img src="{{asset('assets/images/blogs/blog1.png')}}" alt="blog-1" class="w-full rounded-tl-[20px] rounded-tr-[20px]">
                            </div>
                            <div class="blog-contact p-[20px]">
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">22nd March, 2019 | by <span class="underline text-primary">Admin</span></p>

                                <h5 class="mb-[12px] text-[18px] leading-[1.2]"><a href="{{route('blogDetail',['id'=>4])}}" class="font-Poppins leading-[28px] tracking-[0.03rem] text-[18px] font-medium text-[#3d4750]">Bitzer condensing Unit in ludhaina</a></h5>
                                <p class="font-Poppins tracking-[0.03rem] mb-[12px] text-[14px] leading-[26px] font-light">The compact and robust structural shape of the bitzer condensing units ....</p>
                                <div class="blog-btn flex">
                                    <a href="{{route('blogDetail',['id'=>4])}}" class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[2px] px-[14px] text-[14px] font-normal text-[#fff] bg-primary rounded-[10px] border-[1px] border-solid border-primary hover:bg-transparent hover:border-[#3d4750] hover:text-white">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>
