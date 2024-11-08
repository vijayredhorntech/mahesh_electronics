<x-layout>
    <section class="section-breadcrumb border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-primary max-[767px]:text-center max-[767px]:mb-[10px]">
                                {{$product['title']}}
                            </h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{route('home')}}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="fa fa-chevron-right text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-primary text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">{{$product['title']}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-product py-[50px] max-[1199px]:py-[35px] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full mb-[-24px]">
                <div class=" w-full px-[12px] mb-[24px]">
                    <div class="bb-single-pro mb-[24px]">
                        <div class="flex flex-wrap mx-[-12px]">
                            <div class="min-[992px]:w-[41.66%] w-full px-[12px] mb-[24px]">
                                <div class="single-pro-slider sticky top-[0] p-[15px] border-[1px] border-solid border-[#eee] rounded-[24px] max-[991px]:max-w-[500px] max-[991px]:m-auto">
                                    <div class="single-product-cover">
                                        <div class="single-slide zoom-image-hover rounded-tl-[15px] rounded-tr-[15px]">
                                            <img class="img-responsive rounded-tl-[15px] rounded-tr-[15px] mx-auto" src="{{$product['image']}}" alt="{{$product['title']}}" title="{{$product['title']}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="min-[992px]:w-[58.33%] w-full px-[12px] mb-[24px]">
                                <div class="bb-single-pro-contact">
                                    <div class="bb-sub-title">
                                        <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">{{$product['title']}}</h4>
                                    </div>
                                    <div class="bb-single-rating mb-[12px]">
                                       <p class="font-Poppins text-[15px] font-bold leading-[28px] text-primary">{{$product['status']===1?'Available':'Not Available'}}</p>
                                    </div>
                                    <div class="mb-[12px]">
                                        <p class="font-Poppins text-[15px] font-light leading-[28px] tracking-[0.03rem]">{{$product['description']}}</p>
                                    </div>
                                    <div class="bb-blog-details-comment bg-[#f8f8fb] p-6 rounded-[10px] mt-[12px] ">
                                        <div class="main-title mb-[12px]">
                                            <h4 class="font-quicksand tracking-[0.03rem] leading-[1.2] text-[20px] font-bold text-[#3d4750]">Request a Callback</h4>
                                            <p class="mb-[16px] font-Poppins text-[15px] text-[#686e7d] font-light leading-[28px] tracking-[0.03rem]">Enter your details in the form and we will call you back.</p>

                                        </div>
                                        <form >
                                            <div class="flex flex-wrap mx-[-12px]">
                                                <div class=" w-full px-[12px]">
                                                    <div class="bb-details-input mb-[24px]">
                                                        <input type="text" placeholder="Enter Your Name" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]">
                                                    </div>
                                                </div>
                                                <div class=" w-full px-[12px]">
                                                    <div class="bb-details-input mb-[24px]">
                                                        <input type="phone" placeholder="Enter Your Phone" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]">
                                                    </div>
                                                </div>
                                                <div class=" w-full px-[12px]">
                                                    <div class="bb-details-input mb-[24px]">
                                                        <input type="email" placeholder="Enter Your Email" class="w-full p-[10px] text-[14px] font-normal text-[#686e7d] border-[1px] border-solid border-[#eee] outline-[0] leading-[26px] rounded-[10px]">
                                                    </div>
                                                </div>
                                                <div class="w-full px-[12px]">
                                                    <button class="bb-btn-2 w-full transition-all duration-[0.3s] ease-in-out font-Poppins leading-[28px] tracking-[0.03rem] px-4 py-2 text-[14px] font-normal text-[#fff] bg-primary rounded-[10px] border-[1px] border-solid border-[#6c7fd8] hover:bg-transparent hover:border-[#3d4750] hover:text-[#3d4750]">CALL ME BACK</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @if($product['otherData']!=null)
                       <div class="bb-single-pro-tab">

                        <div class="tab-content">
                            <div class="tab-pro-pane">
                                <div class="bb-inner-tabs border-[1px] border-solid border-[#eee] p-[12px] rounded-[20px]">

                                 {!! $product['otherData'] !!}

                                </div>
                            </div>

                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

</x-layout>
