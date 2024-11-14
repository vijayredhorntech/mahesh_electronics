<x-layout>
    <section class="section-breadcrumb mb-[50px] max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-primary max-[767px]:text-center max-[767px]:mb-[10px]">Contact Us</h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{route('home')}}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="fa fa-chevron-right text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-primary text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">Contact Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-contact py-[50px] max-[1199px]:py-[35px]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">

                <!-- Add success message display here -->

                <div class="w-full px-[12px]">
                    <div class="section-title mb-[20px] pb-[20px] relative flex flex-col items-center text-center max-[991px]:pb-[0]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="section-detail max-[991px]:mb-[12px]">
                            <h2 class="bb-title font-quicksand mb-[0] p-[0] text-[25px] font-bold text-[#fff] relative inline capitalize leading-[1] tracking-[0.03rem] max-[767px]:text-[23px]">Get In <span class="text-primary">Touch</span></h2>
                            <p class="font-Poppins max-w-[400px] mt-[10px] text-[14px] text-[#fff]/80 leading-[18px] font-light tracking-[0.03rem] max-[991px]:mx-[auto]">Please select a topic below related to you inquiry. If you don't fint what you need, fill
                                out our contact form.</p>
                        </div>
                    </div>
                </div>
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="bb-contact-form border-[1px] border-solid border-[#eee] bg-[#f8f8fb] rounded-[20px] p-[30px]">
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
                <div class="min-[992px]:w-[50%] w-full px-[12px] mb-[24px]" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <div class="bb-contact-maps sticky top-[0]">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4233.052750219673!2d76.82294421099041!3d30.635936182092216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feb2b1de96f01%3A0x3d78c1834d5f8c02!2sMahesh%20Refrigeration%20Company!5e1!3m2!1sen!2sin!4v1731482458525!5m2!1sen!2sin"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full h-[577px] mb-[-10px] rounded-[20px] border-[0]"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>



</x-layout>
