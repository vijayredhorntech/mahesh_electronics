<x-layout>
    <section class="section-breadcrumb border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-primary max-[767px]:text-center max-[767px]:mb-[10px]">
                                {{ $blogDetail['title'] }}</h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{route('home')}}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="fa fa-chevron-right text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-primary text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active"> {{ $blogDetail['title'] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-blog-details py-[50px] max-[1199px]:py-[35px] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap mb-[-24px]">
                <div class="min-[1200px]:w-[66.66%] min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                    <div class="bb-blog-details-contact" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <div class="inner-blog-details-image mb-[24px]">
                            <img src=" {{ $blogDetail['image'] }}" alt="details-one" class="w-auto h-auto rounded-[15px]">
                        </div>
                        <div class="inner-blog-details-contact mb-[30px]">
                            <span class="font-Poppins mb-[6px] text-[15px] leading-[26px] font-light tracking-[0.02rem] text-[#777]">{{ $blogDetail['date'] }}</span>
                            <h4 class="sub-title font-quicksand tracking-[0.03rem] leading-[1.2] mb-[12px] text-[22px] font-bold text-[#3d4750] max-[575px]:text-[20px]">{{ $blogDetail['title'] }}</h4>
                            <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">{{ $blogDetail['description'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="min-[1200px]:w-[33.33%] min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                    <div class="bb-blog-sidebar mb-[-24px]">
                        <div class="blog-inner-contact p-[30px] border-[1px] border-solid border-[#eee] mb-[24px] rounded-[20px] max-[575px]:p-[15px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="bb-blog-details-comment">
                                <div class="main-title mb-[12px]">
                                    <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Request a Callback</h4>
                                    <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Enter your details in the form and we will call you back.</p>

                                </div>
                                @if(session('success'))
                                    <div class="w-full mb-[24px]">
                                        <div class="bg-success border border-green-400 text-white px-4 py-3 rounded relative text-center" role="alert">
                                            <span class="block sm:inline">{{ session('success') }}</span>
                                        </div>
                                    </div>
                                @endif

                                @if(session('error'))
                                    <div class="w-full mb-[24px]">
                                        <div class="bg-danger border border-red-400 text-white px-4 py-3 rounded relative text-center" role="alert">
                                            <span class="block sm:inline">{{ session('error') }}</span>
                                        </div>
                                    </div>
                                @endif
                                <form action="{{route('contactUsPost')}}" method="post">
                                    @csrf
                                    <div class="bb-contact-wrap mt-[24px]">
                                        <label for="">First Name</label>
                                        <input type="text" name="name" value="{{ old('name') }}" placeholder="Enter Your First Name" class="w-full h-[50px] py-[10px] pl-[15px] pr-[10px] border-[1px] border-solid border-[#eee] outline-[0] text-[14px] font-normal text-[#686e7d] rounded-[10px]">
                                        @error('name')
                                        <span class="text-danger">*{{$message}}</span>
                                        @enderror

                                    </div>
                                    <div class="bb-contact-wrap mt-[24px]">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lastname" value="{{ old('lastname') }}" placeholder="Enter Your Last Name" class="w-full h-[50px] py-[10px] pl-[15px] pr-[10px] border-[1px] border-solid border-[#eee] outline-[0] text-[14px] font-normal text-[#686e7d] rounded-[10px]">
                                    </div>
                                    <div class="bb-contact-wrap mt-[24px]">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" class="w-full h-[50px] py-[10px] pl-[15px] pr-[10px] border-[1px] border-solid border-[#eee] outline-[0] text-[14px] font-normal text-[#686e7d] rounded-[10px]">
                                    </div>
                                    @error('email')
                                    <span class="text-danger">*{{$message}}</span>
                                    @enderror
                                    <div class="bb-contact-wrap mt-[24px]">
                                        <label for="">Phone</label>
                                        <input type="number" name="phone" value="{{ old('phone') }}" placeholder="Enter Your Phone Number" class="w-full h-[50px] py-[10px] pl-[15px] pr-[10px] border-[1px] border-solid border-[#eee] outline-[0] text-[14px] font-normal text-[#686e7d] rounded-[10px]">
                                    </div>
                                    @error('phone')
                                    <span class="text-danger">*{{$message}}</span>
                                    @enderror
                                    <div class="bb-contact-wrap mt-[24px]">
                                        <label for="">Address</label>
                                        <textarea name="address" placeholder="Please leave your comments here.." class="w-full h-[150px] py-[10px] pl-[15px] pr-[10px] border-[1px] border-solid border-[#eee] outline-[0] text-[14px] font-normal text-[#686e7d] rounded-[10px]"></textarea>
                                    </div>
                                    <div class="bb-contact-button">
                                        <button class="bb-btn-2 transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] py-[4px] px-[25px] text-[14px] font-normal text-[#fff] bg-primary rounded-[10px] border-[1px] border-solid border-primary hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
