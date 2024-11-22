<x-layout>
    <section class="section-breadcrumb  max-[1199px]:mb-[35px] border-b-[1px] border-solid border-[#eee] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full">
                <div class="w-full px-[12px]">
                    <div class="flex flex-wrap w-full bb-breadcrumb-inner m-[0] py-[20px] items-center">
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <h2 class="bb-breadcrumb-title font-quicksand tracking-[0.03rem] leading-[1.2] text-[16px] font-bold text-primary max-[767px]:text-center max-[767px]:mb-[10px]">
                                {{ucfirst($type)}}
                            </h2>
                        </div>
                        <div class="min-[768px]:w-[50%] min-[576px]:w-full w-full px-[12px]">
                            <ul class="bb-breadcrumb-list mx-[-5px] flex justify-end max-[767px]:justify-center">
                                <li class="bb-breadcrumb-item text-[14px] font-normal px-[5px]"><a href="{{route('home')}}" class="font-Poppins text-[14px] leading-[28px] tracking-[0.03rem] font-semibold text-[#686e7d]">Home</a></li>
                                <li class="text-[14px] font-normal px-[5px]"><i class="fa fa-chevron-right text-[14px] font-semibold leading-[28px]"></i></li>
                                <li class="bb-breadcrumb-item font-Poppins text-primary text-[14px] leading-[28px] font-normal tracking-[0.03rem] px-[5px] active">{{ucfirst($type)}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-shop pt-[50px] pb-[50px] max-[1199px]:pb-[35px] bg-[#f8f8fb]">
        <div class="flex flex-wrap justify-between relative items-center mx-auto min-[1400px]:max-w-[1320px] min-[1200px]:max-w-[1140px] min-[992px]:max-w-[960px] min-[768px]:max-w-[720px] min-[576px]:max-w-[540px]">
            <div class="flex flex-wrap w-full px-[12px]">
                <div class="w-full">
                    <div class="bb-shop-pro-inner">
                        <div class="flex flex-wrap mx-[-12px] mb-[-24px]">

                            @foreach ($products as $product)
                                <div class="min-[992px]:w-[33.33%] min-[768px]:w-[33.33%] w-[50%] max-[480px]:w-full px-[12px] mb-[24px] pro-bb-content " data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                                    <div class="bb-pro-box bg-[#fff] shadow-lg shadow-black border-[1px] border-solid border-[#eee] rounded-[20px]">
                                        <div class="bb-pro-img overflow-hidden relative border-b-[1px] border-solid border-[#eee] z-[4]">
                                            <a href="{{ route('productDetail', ['type' => $type, 'id' => $product['id']]) }}">
                                                <div class="inner-img relative block overflow-hidden pointer-events-none rounded-t-[20px]">
                                                    <img class="main-img transition-all duration-[0.3s] ease-in-out w-full h-[300px] object-cover rounded-t-[20px]" src="{{ $product['image'] }}"
                                                         alt="{{ $product['title'] }}">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="bb-pro-contact p-[20px]">
                                            <h4 class="bb-pro-title mb-[8px] text-[16px] leading-[18px]">
                                                <a href="{{ route('productDetail', ['type' => $type, 'id' => $product['id']]) }}" class="transition-all duration-[0.3s] ease-in-out font-quicksand w-full block whitespace-nowrap overflow-hidden text-ellipsis text-[15px] leading-[18px] text-[#3d4750] font-semibold tracking-[0.03rem]">
                                                    {{ $product['title'] }}
                                                </a>
                                            </h4>
                                            <div class="bb-pro-subtitle mb-[8px] flex flex-wrap justify-between">
                                                <p class="transition-all duration-[0.3s] ease-in-out font-Poppins text-[13px] leading-[16px] text-[#777] font-light tracking-[0.03rem]">
                                                    {{ implode(' ', array_slice(explode(' ', $product['description']), 0, 10)) }} ......
                                                </p>
                                            </div>
                                            <div class="bb-price flex flex-wrap justify-center">
                                                <a href="{{ route('productDetail', ['type' => $type, 'id' => $product['id']]) }}" class="last-items text-[14px] text-primary">Read More....</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</x-layout>
