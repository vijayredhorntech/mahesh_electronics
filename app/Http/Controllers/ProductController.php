<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function product($type)
    {
        if ($type === 'compressor') {
            $products = [
                [
                    'id' => $type . '-01',
                    'image' => asset('assets/images/products/compressor/emerson.jpeg'),
                    'title' => 'Emerson Copeland Compressors',
                    'description' => 'Inventiveness is our unique combination of innovation and resourcefulness. It is at'
                ],
                [
                    'id' => $type . '-02',
                    'image' => asset('assets/images/products/compressor/bitzor.jpeg'),
                    'title' => 'Bitzer Compressors',
                    'description' => 'Universal and environmentally friendly: ECOLINE reciprocating compressors offer high'
                ],
                [
                    'id' => $type . '-03',
                    'image' => asset('assets/images/products/compressor/embraco.jpeg'),
                    'title' => 'Embraco Compressor',
                    'description' => 'Embraco has a robust portfolio with fixed and variable speed compressors that are app'
                ],
            ];

            return view('products')->with('type', $type)->with('products', $products);
        }
        if ($type === 'condensing-unit') {
            $products = [
                [
                    'id' => $type . '-01',
                    'image' => asset('assets/images/products/condensingUnit/emerson.jpeg'),
                    'title' => 'Emerson Copeland Units',
                    'description' => 'A Condensing Unit for Every Application, Leveraging the latest Copeland compressor technology, components, and electronics to achieve optimum performance for the most challenging requirements. Emerson offers the broadest selection of indoor and outdoor condensing units on the market.'
                ],
                [
                    'id' => $type . '-02',
                    'image' => asset('assets/images/products/condensingUnit/bitzor.jpeg'),
                    'title' => 'BItzer Condensing Units',
                    'description' => 'All Types BItzer Condensing Units'
                ],
            ];

            return view('products')->with('type', $type)->with('products', $products);
        }
        if ($type === 'temprature-controller') {
            $products = [
                [
                    'id' => $type . '-01',
                    'image' => asset('assets/images/products/tempratureControl/danfos.jpeg'),
                    'title' => 'Danfoss Temperature Controller',
                    'description' => 'Danfoss offers a complete system for monitoring and optimizing any commercial refrigeration solution, such as for instance glass door merchandisers, air dryers, cold rooms, trucks and trailers.'

                ],
                [
                    'id' => $type . '-02',
                    'image' => asset('assets/images/products/tempratureControl/dixell.jpeg'),
                    'title' => 'Dixell Temperature Controller',
                    'description' => 'Dixell Controller - This controller is used for refrigeration application, to control water temperature and water temperature differentials. This controller is for electronically advanced people only! They are difficult to wire and to program'

                ],
            ];

            return view('products')->with('type', $type)->with('products', $products);
        }
        if ($type === 'compressor-oil') {
            $products = [
                [
                    'id' => $type . '-01',
                    'image' => asset('assets/images/products/compressorOil/bitzor.jpeg'),
                    'title' => 'BItzer Oil',
                    'description' => 'BITZER polyolester oils significantly exceed the requirements of DIN 51503, Part 1, for refrigeration compressor oils with respect to water content and total acid number (TAN). They mix well with HFC and HFO refrigerants and are therefore especially suitable for operation with these substances'

                ],
                [
                    'id' => $type . '-02',
                    'image' => asset('assets/images/products/compressorOil/bva.jpeg'),
                    'title' => 'BVA REFRIGERATION OIL',
                    'description' => 'N/A'

                ],
                [
                    'id' => $type . '-03',
                    'image' => asset('assets/images/products/compressorOil/danfos.jpeg'),
                    'title' => 'Danfoss OIl',
                    'description' => 'We are highly acknowledged organization engaged in presenting a remarkable range of Danfoss Refrigeration Air Compressor Oil.'

                ],
            ];

            return view('products')->with('type', $type)->with('products', $products);
        }
    }

    public function productDetail($type, $id)
    {
        if ($type === 'compressor') {
            if ($id === $type . '-01') {
                $product = [
                    'image' => asset('assets/images/products/compressor/emerson.jpeg'),
                    'title' => 'Emerson Copeland Compressors',
                    'description' => 'Inventiveness is our unique combination of innovation and resourcefulness. It is at the heart of what the Copeland brand stands for and what we bring to solve any challenge! Our passion for progress is driven by the demands and changes our customers face and the opportunity to provide smart, sustainable technology and services',
                    'status' => 1,
                    'otherData' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/XzE21UpB2AE?si=5LpnoLHHcM1SA8Wm" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>'

                ];
            }
            if ($id === $type . '-02') {
                $product = [
                    'image' => asset('assets/images/products/compressor/bitzor.jpeg'),
                    'title' => 'Bitzer Compressors',
                    'description' => 'Universal and environmentally friendly: ECOLINE reciprocating compressors offer high cooling capacity with minimal energy requirements and are optimized for HFC, HFO and low-GWP refrigerants. The optional VARISTEP mechanical capacity control offers high part-load efficiency in medium and low temperature application',
                    'status' => 1,
                    'otherData' => null
                ];
            }
            if ($id === $type . '-03') {
                $product = [
                    'image' => asset('assets/images/products/compressor/embraco.jpeg'),
                    'title' => 'Embraco Compressor',
                    'description' => 'Embraco has a robust portfolio with fixed and variable speed compressors that are approved for natural and transitory refrigerants utilization and may be applied in residential or commercial refrigeration.',
                    'status' => 1,
                    'otherData' => null
                ];
            }
            return view('productDetails')->with('type', $type)->with('product', $product);
        }
        if ($type === 'condensing-unit') {
            if ($id === $type . '-01') {
                $product = [
                    'image' => asset('assets/images/products/condensingUnit/emerson.jpeg'),
                    'title' => 'Emerson Copeland Units',
                    'description' => 'A Condensing Unit for Every Application, Leveraging the latest Copeland compressor technology, components, and electronics to achieve optimum performance for the most challenging requirements. Emerson offers the broadest selection of indoor and outdoor condensing units on the market.',
                    'status' => 1,
                    'otherData' => '   <div class="bb-details px-6 py-6">
                                        <div class="bb-sub-title mb-[12px]">
                                            <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">SCROLL CONDENSING UNITS</h4>
                                        </div>
                                        <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">ZX Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Designed and built for highest reliability using Copeland Scroll, quality components and world class manufacturing.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">MT: 2-7.5 HP (3.9 – 11.8 kW ; EN12900 MT)</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">LT: 2-7.5 HP (1.8 – 5.9 kW; EN12900 LT)</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">ZX Digital Condensing Unit</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Digital modulation (10% to 100%) perfectly matches cooling capacity to fit the refrigeration load, delivering energy saving and accurate temperature control.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">MT: 3 – 20 HP (5.2 – 34.5 kW; EN12900 MT)</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">LT: 9 – 20 HP (6.6 – 15.9 kW; EN12900 LT)</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">ZX Variable Speed Condensing Unit</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Delivering all year-round efficiency improvement through precise modulation to match required cooling load.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">MT: 6.2 – 10.1 kW EN12900 MT</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">LT: 2.3  - 3.8 kW EN 12900 LT</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">KHZ Condensing Unit</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Quality condensing unit using Copeland Scroll and line components.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">MT 2-6 HP (3.8 – 10.4 kW EN12900)</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">KHZ*LVL Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Highly quality indoor condensing units using vapor injection scroll to deliver wide envelop and efficiency.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Available from 6-15 HP (5.9 – 13.7 kW EN12900 LT)</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">Water Cooled Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">With Co-Axial condenser. Designed to be use with chilled water system perfect for hospitality industry.</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">IZSI Indoor Scroll Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Ranging from 2 to 6 HP, the unit is designed for medium to low temperature refrigeration. </p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">IZFI Indoor Scroll Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Ranging from 7.5 – 20 HP, the unit is for low temperature refrigeration applications found in cold rooms and freezers.  </p>

                                          <br> <br>
                                        <div class="bb-sub-title mb-[12px]">
                                            <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">SEMI-HERMETIC CONDENSING UNITS</h4>
                                        </div>
                                         <br>
                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">Air Cooled Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Industry standard for efficiency and reliability for semi-hermetic condensing unit based on European design and manufactured in world class facilities.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">MT: 5 – 40 HP (9.9 – 64.6 kW – EN12900 MT)</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">LT: 5 – 40 HP (4.8 – 29.1 kW – EN12900 LT)</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">2 Stage Indoor Semi-hermetic Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Two Stage Condensing Unit</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Enables ultra-low evaporating temperatures of up to -60°C. Perfect for blast freezing application.</p>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Available from 15 – 30 HP (14.7 – 27.1 kW at -45C Evaporating Temp)</p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">Water Cooled Semi-Hermetic Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Ranging from 0.7 to 50 HP, these units are made suitable for both commercial and industrial applications in low, medium to high temperature.</p>
                                        <br> <br>
                                        <div class="bb-sub-title mb-[12px]">
                                            <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">HERMETIC CONDENSING UNITS</h4>
                                        </div>
                                           <br>
                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">Integral HP Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Designed for perfect cooling in applications Like Cold Rooms, Banana Ripening, Fruits / Vegetables, Pharmaceutical, and Industrial Chillers.  </p>

                                        <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">Fractional HP Condensing Units</h4>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Condensing unit platforms used in refrigeration systems servicing walk-in and reach-in applications/ Vegetables, Pharmaceutical, and Industrial Chillers.  </p>

                                    </div>'

                ];
            }
            if ($id === $type . '-02') {
                $product = [
                    'image' => asset('assets/images/products/condensingUnit/bitzor.jpeg'),
                    'title' => 'BItzer Condensing Units',
                    'description' => 'All Types BItzer Condensing Units',
                    'status' => 1,
                    'otherData' => '   <div class="bb-details px-6 py-6">

                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">WITH SEMI-HERMETIC COMPRESSORS</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">The compact and robust structural shape of the condensing units and the use of efficient, optimally coordinated components enable an extensive range of both applications and capacities. They’re Ecodesign-compliant and enable use of low-GWP refrigerants.</p>
                                       <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">WITH SEMI-HERMETIC COMPRESSORS</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">The compact and robust structural shape of the condensing units and the use of efficient, optimally coordinated components enable an extensive range of both applications and capacities. They’re Ecodesign-compliant and enable use of low-GWP refrigerants</p>
                                       <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">WITH 2-STAGE SEMI-HERMETIC COMPRESSORS</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Specially designed for low temperature applications, condensing units with 2-stage compressor boast a large range of capacities as well as well-coordinated components such as efficient condensers and fans. They’re compact, robust and suitable for applications with low-GWP refrigerants.</p>
                                       <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">SEMI-HERMETIC FREQUENCY-CONTROLLED</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">The condensing unit series for maximum efficiency in full and part-load operation. Highly efficient components, unique controller functions, plug-and-play concept, BEST Software, web server, Ecodesign compliance and the use of low-GWP refrigerants leave nothing to be desired.</p>
                                       <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">SEMI-HERMETIC WITH VARISTEP</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Master the most diverse applications flexibly with the BITZER condensing unit series – quick to implement, versatile and with future-proof application</p>
                                       <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">WITHOUT COMPRESSOR</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">These air cooled condensing units with large heat transfer surface are equipped with EC fans and refrigerant receiver. Thanks to the individual options for combining compressor and condenser, they’re especially versatile and can be adapted for any requirements.</p>
                                       <br>

                                    </div>'

                ];
            }
            return view('productDetails')->with('type', $type)->with('product', $product);
        }
        if ($type === 'temprature-controller') {
            if ($id === $type . '-01') {
                $product = [
                    'image' => asset('assets/images/products/tempratureControl/danfos.jpeg'),
                    'title' => 'Danfoss Temperature Controller',
                    'description' => 'Danfoss offers a complete system for monitoring and optimizing any commercial refrigeration solution, such as for instance glass door merchandisers, air dryers, cold rooms, trucks and trailers.',
                    'status' => 1,
                    'otherData' => '
                                    <div class="bb-details px-6 py-6">
                                        <div class="bb-sub-title mb-[12px]">
                                            <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">In the wide range of Danfoss electronic controls you will find:</h4>
                                        </div>
                                        <br>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Refrigeration temperature controls</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Compressor and condenser controls</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Speed control of compressors, condensers and fans</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Evaporator controls with thermostatic expansion valves</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Evaporator controls with electronically operated expansion valves programmable controls</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">System management units</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Features and benefits</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Great reliability proved through millions of installations all over the world</p>
                                        <br><br>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Electronic controls for almost any commercial refrigeration application One-stop-shopping, all you need from one supplier</p>
                                        <br><br>
                                        <img src="' . asset('assets/images/products/tempratureControl/danforDesc.png') . '" class="h-auto w-auto" alt="">
                                    </div>
                                '


                ];
            }
            if ($id === $type . '-02') {
                $product = [
                    'image' => asset('assets/images/products/tempratureControl/dixell.jpeg'),
                    'title' => 'Dixell Temperature Controller',
                    'description' => 'Dixell Controller - This controller is used for refrigeration application, to control water temperature and water temperature differentials. This controller is for electronically advanced people only! They are difficult to wire and to program',
                    'status' => 1,
                    'otherData' => '
                                    <div class="bb-details px-6 py-6">
                                        <div class="bb-sub-title mb-[12px]">
                                            <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">CONTROLLERS FOR MEDIUM AND LOW TEMPERATURE WITH TEMPERATURE AND HUMIDITY MANAGEMENT</h4>
                                        </div>
                                        <br>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Advanced multifunction controllers with temperature and humidity management</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Cooling and heating action for safe storage of products</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Defrost management</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Possibility of excluding humidity control</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Dehumidifying action by cooling circuit</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Running and stopping programmable cycles with different set points (XH300)</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Automatic cycles of extraction fans (XH300)</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Freezing and proving cycles fully configurable by user (XH400)</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Freezing phase without humidity control (XH400)</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Innovative and elegant design that enhances the aesthetics and functionality of the final product</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Up to eight push buttons with direct action for user friendly interface</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Direct line power supply 230 (110) VAC. No external transformer required</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Standard communication protocol ModBus-RTU</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Hot key or Prog tool kit connector for a quick and easy programming</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• 10VA max power absorption</p>
                                        <p class="font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">• Dual display with red LED (8.0mm high) and yellow LED (5.6mm high) and 14 icons</p>
                                        <br>
                                        <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">XH240K Multifunction digital controller for MT and LT with temperature and humidity management</p>
                                        <br>
                                        <div class="w-full overflow-x-auto">
                                        <table class="table table-bordered" style="width: 964.25px; height: 20px;">
                                        <thead></thead>
                                        <tbody>
                                        <tr>
                                        <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 200px; background-color: #5eb595;">
                                        <span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;">
                                        <span style="font-family: tahoma, geneva, sans-serif;">
                                        <span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">FEATURES</span></span></span></span></span>

                                        </td>
                                        <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 192.641px; background-color: #5eb595; text-align: center;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">XH240K</span></span></span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 192.641px; background-color: #5eb595; text-align: center;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">TH620</span></span></span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 192.641px; background-color: #5eb595; text-align: center;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#ffffff" face="tahoma, geneva, sans-serif"><span style="font-weight: 700;">VH620</span></font></span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">First display</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Second display</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Keyboard push buttons</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">6 (on TH620, VH620)&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">push buttons : 6</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">push buttons : 6</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Power supply</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">24, 110, 230Vac&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">from Controller</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">from Controller&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" colspan="4" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">Probe inputs&nbsp;</span></span></span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Thermostat &nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">NTC/PTC</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Defrost</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Humidity</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">4-20mA</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" colspan="4" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">&nbsp;Digital inputs&nbsp;</span></span></span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Heater safety, door switch &nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">config</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" colspan="4" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">Relay outputs&nbsp;</span></span></span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Compressor&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">20A&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Defrost&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Defrost, extractor fans</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Fans&nbsp;&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Heater control</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">16A</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Humidifying</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Dehumidifying, light</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" colspan="4" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#ffffff"><span style="font-weight: 700;">Other</span></font></span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Hot Key / Programming Tool Kit</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">present</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Serial output</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">TTL</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">&nbsp;</span></span></span>
                                        </td></tr><tr><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Buzzer</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">on keyboard</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">option</span></span></span>
                                        </td><td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">option</span></span></span>
                                        </td></tr></tbody></table>
                                        </div>
                                        <br>
                                        <img src="' . asset('assets/images/products/tempratureControl/dixelldesc1.jpg') . '" class="h-auto w-auto" alt="">
                                          <br>
                                             <ul class="list-disc pl-[20px] mb-[0]">
                                                <li class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light"><span class="inline-flex font-medium min-w-[150px]">XH260L, XH260V</span>Digital controllers for NT and LT refrigerated rooms with defrost management</li>
                                                <li class="py-[5px] text-[15px] text-[#686e7d] font-Poppins leading-[28px] font-light"><span class="inline-flex font-medium min-w-[150px]">XH360L, XH360V</span>Digital controllers for maturing rooms with running and stopping cycles, timed cycles,cooling and heating action and defrost</li>
                                            </ul>
                                            <br><br>
                                          <div class="w-full overflow-x-auto">
                                            <table class="table table-bordered" style="width: 964.25px; height: 20px;">
                                            <thead></thead>
                                            <tbody><tr>
                                            <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 200px; background-color: #5eb595;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">FEATURES</span></span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 173.375px; background-color: #5eb595; text-align: center;"><span style="font-size: 14px;"><span style="color: rgb(255, 255, 255);"><span style="font-family: tahoma, geneva, sans-serif;"><span style="font-weight: 700;">XH260L</span></span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 173.375px; background-color: #5eb595; text-align: center;"><span style="font-size: 14px;"><span style="color: rgb(255, 255, 255);"><span style="font-family: tahoma, geneva, sans-serif;"><span style="font-weight: 700;">XH260V</span></span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 173.375px; background-color: #5eb595; text-align: center;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#ffffff"><span style="font-weight: 700;">XH360L</span></font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; vertical-align: middle; border-top: 1px solid white; height: 25px; width: 173.375px; background-color: #5eb595; text-align: center;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#ffffff"><span style="font-weight: 700;">XH360V</span></font></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">First display</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 3 d.p.</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Second display</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">± 4 d.p.</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Keyboard push buttons</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">6&nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">6</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Power supply</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">24, 110, 230Vac&nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">24, 110, 230Vac&nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">24, 110, 230Vac</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">24, 110, 230Vac&nbsp;</span></span></span></td></tr><tr><td class="p-2" colspan="5" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">Probe inputs&nbsp;</span></span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Thermostat &nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Defrost</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">NTC/PTC</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><font color="#222222" face="tahoma, geneva, sans-serif">Humidity</font></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">4-20mA</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">4-20mA</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">4-20mA</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(34, 34, 34);">4-20mA</span></span></span></td></tr><tr><td class="p-2" colspan="5" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">&nbsp;Digital inputs&nbsp;</span></span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Heater safety, door switch &nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">config</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">config</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">config</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">config</span></span></span></td></tr><tr><td class="p-2" colspan="5" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><span style="color: rgb(255, 255, 255);"><span style="font-weight: 700;">Relay outputs&nbsp;</span></span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><font face="tahoma, geneva, sans-serif">Compressor&nbsp;</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">20A&nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">20A&nbsp;</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><font face="tahoma, geneva, sans-serif">Defrost&nbsp;</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;">&nbsp;</td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;">&nbsp;</td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><font face="tahoma, geneva, sans-serif">Defrost, extractor fans</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;">&nbsp;</td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;">&nbsp;</td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><font face="tahoma, geneva, sans-serif">Fans&nbsp;&nbsp;</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><font face="tahoma, geneva, sans-serif">Heater control</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Humidifying</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><font face="tahoma, geneva, sans-serif">Dehumidifying, light</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">8A</span></span></span></td></tr><tr><td class="p-2" colspan="5" style="line-height: 1.42857; height: 20px; width: 200px; background-color: #5eb595;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#ffffff"><span style="font-weight: 700;">Other</span></font></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Hot Key / Programming Tool Kit</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">present</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">present</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">present</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">present</span></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Serial output</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">TTL</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">TTL</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">TTL</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">TTL</font></span></span></td></tr><tr>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="color: rgb(34, 34, 34);"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;">Buzzer</span></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">option</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">option</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">option</font></span></span></td>
                                            <td class="p-2" style="line-height: 1.42857; height: 20px; width: 200px;"><span style="font-size: 14px;"><span style="font-family: tahoma, geneva, sans-serif;"><font color="#222222">option</font></span></span></td></tr></tbody></table> </div>
                                           <br> <br>
                                          <img src="' . asset('assets/images/products/tempratureControl/dixelldesc2.jpg') . '" class="h-auto w-auto" alt="">
                                           <br>
                                    </div>
                                '


                ];
            }
            return view('productDetails')->with('type', $type)->with('product', $product);
        }
        if ($type === 'compressor-oil') {
            if ($id === $type . '-01') {
                $product = [
                    'image' => asset('assets/images/products/compressorOil/bitzor.jpeg'),
                    'title' => 'BItzer Oil',
                    'description' => 'BITZER polyolester oils significantly exceed the requirements of DIN 51503, Part 1, for refrigeration compressor oils with respect to water content and total acid number (TAN). They mix well with HFC and HFO refrigerants and are therefore especially suitable for operation with these substances',
                    'status' => 1,
                     'otherData' => '   <div class="bb-details px-6 py-6">
                                        <div class="bb-sub-title mb-[12px]">
                                            <h4 class="font-quicksand text-[22px] tracking-[0.03rem] font-bold leading-[1.2] text-[#3d4750]">BITZER oils for refrigerants of safety class A1</h4>
                                        </div>
                                        <br>
                                       <h4 class="font-quicksand text-[18px] tracking-[0.03rem] font-medium leading-[1.2] text-[#3d4750]">NOTE</h4>
                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Retrofit of R22 to HFC blends: due to their high polarity, polyol ester oils (POE) must be used. Sufficient miscibility/solubility is not guaranteed when MO (mineral oil) and/or AB (alkylbenzene) lubricants are used!</p>
                                         <div class="w-full overflow-x-auto">
                                                <table class="table tabletype-header table-scaled" aria-label="" data-legend-id="ID0E1ZSQ" style="width: auto; margin-bottom: 1rem; margin-top: 0.5em;"><caption style="padding-top: 0.75rem; padding-bottom: 0.75rem; color: rgb(0, 0, 0); caption-side: bottom; font-family: Arial; font-size: 9pt; font-style: italic; padding-left: 0.3cm;">BITZER oils for reciprocating compressors and refrigerants of the safety class A1</caption><colgroup><col style="width: 5cm;"><col style="width: 4cm;"></colgroup><thead><tr><th style="text-align: inherit; background-color: rgb(206, 227, 185); top: 0px; border-top: 1px solid rgb(222, 226, 230); border-bottom-color: rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; position: sticky; border-right: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">Refrigerant</p></th><th style="text-align: inherit; background-color: rgb(206, 227, 185); top: 0px; border-top: 1px solid rgb(222, 226, 230); border-bottom-color: rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; position: sticky; border-right: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BITZER oil type</p></th></tr></thead><tbody><tr><td style="border-top: 1px solid rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a</p></td><td style="border-top: 1px solid rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE32</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a (t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">c</span>&nbsp;&gt; 70°C)</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE55</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R404A, R407A/C/F, R448A, R449A, R449C R450A, R452A, R452C, R507A, R513A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE32</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B5.2</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R410A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE55</p></td></tr></tbody></table>
                                         </div>
                                         <div class="w-full overflow-x-auto">
                                         <table class="table tabletype-header table-fixed" aria-label="" data-legend-id="ID0EI3SQ" style="width: 755.891px; margin-bottom: 1rem; margin-top: 0.5em; max-width: 20cm;"><caption style="padding-top: 0.75rem; padding-bottom: 0.75rem; color: rgb(0, 0, 0); caption-side: bottom; font-family: Arial; font-size: 9pt; font-style: italic; padding-left: 0.3cm;">BITZER oils for screw compressors and refrigerants of the safety class A1</caption><colgroup><col style="width: 226.453px;"><col style="width: 339.688px;"><col style="width: 188.75px;"></colgroup><thead><tr><th style="text-align: inherit; background-color: rgb(206, 227, 185); top: 0px; border-top: 1px solid rgb(222, 226, 230); border-bottom-color: rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; position: sticky; border-right: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">Compressor Type</p></th><th style="text-align: inherit; background-color: rgb(206, 227, 185); top: 0px; border-top: 1px solid rgb(222, 226, 230); border-bottom-color: rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; position: sticky; border-right: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">Refrigerant</p></th><th style="text-align: inherit; background-color: rgb(206, 227, 185); top: 0px; border-top: 1px solid rgb(222, 226, 230); border-bottom-color: rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; position: sticky; border-right: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BITZER oil type</p></th></tr></thead><tbody><tr><td style="border-top: 1px solid rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">CSVH</p></td><td style="border-top: 1px solid rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R450A, R513A</p></td><td style="border-top: 1px solid rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">CSVW</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R450A, R513A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170L</p></td></tr><tr><td rowspan="2" style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">CSH65..CSH95, CSK61</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R407A/C/F, R450A, R513A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B320SH</p></td></tr><tr><td rowspan="2" style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">CSH76..CSH96</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R450A, R513A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170L</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R450A, R513A: t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">c</span>&nbsp;&lt; 60°C</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170</p></td></tr><tr><td rowspan="2" style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">CSW65..CSW95</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R407A/C/F, R450A, R513A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170L</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B320SH</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">CSW105</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R450A, R513A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170L</p></td></tr><tr><td rowspan="3" style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">OS.53..OS.85</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R404A, R407A/C/F, R507A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22: t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">o</span>= -5°C..-50°C, t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">c</span>&nbsp;&lt; 45°C</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B100</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22: t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">o</span>= +12.5°C..-40°C, t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">c</span>&nbsp;&lt; 60°C</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B150SH</p></td></tr><tr><td rowspan="3" style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">HS.53..HS.95</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R134a, R404A, R407A/C/F, R507A, R448A, R449A</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">BSE170</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22: t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">o</span>= -5°C..-50°C, t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">c</span>&nbsp;&lt; 45°C</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B100</p></td></tr><tr><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">R22: t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">o</span>= +12.5°C..-40°C, t<span style="position: relative; font-size: 10.5px; line-height: 0; vertical-align: baseline; bottom: -0.25em;">c</span>&nbsp;&lt; 60°C</p></td><td style="border-top-color: rgb(222, 226, 230); padding: 0.75rem; border-right: 1px solid rgb(136, 136, 136) !important; border-bottom: 1px solid rgb(136, 136, 136) !important; border-left: 1px solid rgb(136, 136, 136) !important; border-image: initial !important;"><p class="text-left" style="margin-bottom: 0px; font-family: Arial; font-size: 10.5pt; max-width: 20cm;">B150SH</p></td></tr></tbody></table>
                                         </div>




                                    </div>'
                ];
            }
            if ($id === $type . '-02') {
                $product = [
                    'image' => asset('assets/images/products/compressorOil/bva.jpeg'),
                    'title' => 'BVA REFRIGERATION OIL',
                    'description' => 'N/A',
                    'status' => 1,
                     'otherData' => '   <div class="bb-details px-6 py-6">


                                       <p class="mb-[12px] font-Poppins text-[#686e7d] leading-[28px] tracking-[0.03rem] font-light">Manufactured and refined by the Calumet Refining Company, BVA refrigeration oils are OEM approved and used by major compressor manufacturers. The oils offer excellent chemical stability when in the presence of refrigerant and other compressor materials. The oils also have good thermal stability to ensure good performance at high temperatures and have good low temperature properties to prevent congealing in the evaporator. The oils are also wax-free to prevent floc problems in the evaporator and expansion valve. OEM approved</p>
                                         <br>
                                         <img src="' . asset('assets/images/products/compressorOil/bvadesc.jpg') . '" class="w-auto h-auto" alt="">





                                    </div>'
                ];
            }
            if ($id === $type . '-03') {
                $product = [
                    'image' => asset('assets/images/products/compressorOil/danfos.jpeg'),
                    'title' => 'Danfoss OIl',
                    'description' => 'We are highly acknowledged organization engaged in presenting a remarkable range of Danfoss Refrigeration Air Compressor Oil.',

                    'status' => 1,
                     'otherData' => '   <div class="bb-details px-6 py-6">


                                         <br>
                                         <div class="w-full overflow-x-auto">
                                         <table class="table table-striped" style="margin-bottom: 0px; width: 560px; table-layout: fixed;"><tbody><tr style="background-color: rgb(235, 235, 235);"><td class="attrib" style="padding: 12px 15px; border-right: none; border-bottom: none; border-left: none; border-image: initial; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Brand technique</span></td><td style="padding: 12px 15px; border-right: none; border-bottom: none; border-left: none; border-image: initial; line-height: 24px;">Compressors Accessories</td></tr><tr><td class="attrib" style="padding: 12px 15px; border: none; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Description</span></td><td style="padding: 12px 15px; border: none; line-height: 24px;">Mineral oil, 160P, 5-litre can</td></tr><tr style="background-color: rgb(235, 235, 235);"><td class="attrib" style="padding: 12px 15px; border: none; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Packing format</span></td><td style="padding: 12px 15px; border: none; line-height: 24px;">Multi pack</td></tr><tr><td class="attrib" style="padding: 12px 15px; border: none; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Packing quantity</span></td><td style="padding: 12px 15px; border: none; line-height: 24px;">4</td></tr></tbody></table>
<table class="table table-striped" style="margin-bottom: 0px; width: 560px; table-layout: fixed;"><tbody><tr style="background-color: rgb(235, 235, 235);"><td class="attrib" style="padding: 12px 15px; border-right: none; border-bottom: none; border-left: none; border-image: initial; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Type</span></td><td style="padding: 12px 15px; border-right: none; border-bottom: none; border-left: none; border-image: initial; line-height: 24px;">Lubricant</td></tr><tr><td class="attrib" style="padding: 12px 15px; border: none; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Type designation</span></td><td style="padding: 12px 15px; border: none; line-height: 24px;">160P</td></tr><tr style="background-color: rgb(235, 235, 235);"><td class="attrib" style="padding: 12px 15px; border: none; line-height: 24px;"><span style="font-family: myriadpro-bold, arial, sans-serif;">Usage</span></td><td style="padding: 12px 15px; border: none; line-height: 24px;">LT with R22 or R502<br>MT<br>SM with R22</td></tr></tbody></table>
</div>






                                    </div>'
                ];
            }
            return view('productDetails')->with('type', $type)->with('product', $product);
        }



    }
}
