<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function blog()
    {
        return view('blog');
    }

    public function blogDetail($id)
    {

        if ($id == 1) {
            $blogDetails = [
                'title' => 'Bitzer LH104E/4DES-7Y Condensing Unit',
                'date' => '9th March, 2020 ',
                'image' => asset('assets/images/blogs/blog1.png'),
                'description' => 'Made in Germany. Lowest price and readily available in Chandigarh, Punjab, Haryana, Rajasthan, Mumbai, Bengaluru, Chennai, Pune.'
            ];
            return view('blogDetails')->with('blogDetail', $blogDetails);
        }
        if ($id == 2) {
            $blogDetails = [
                'title' => 'Bitzer condensing Unit in Chandigarh',
                'date' => '19th February, 2020 ',
                'image' => asset('assets/images/blogs/blog2.jpeg'),
                'description' => 'We are leading distributor of all types of bitzer products in India. If you are searching Bitzer compressor in Chandigarh . please call us today for best deals'
            ];
            return view('blogDetails')->with('blogDetail', $blogDetails);
        }
        if ($id == 3) {
            $blogDetails = [
                'title' => 'Bitzer compressor distributor in chennai',
                'date' => '15th May, 2019',
                'image' => asset('assets/images/blogs/blog2.jpeg'),
                'description' => 'We are leading distributor of all types of bitzer products in India. If you are searching Bitzer compressor in chennai . please call us today for best deals'
            ];
            return view('blogDetails')->with('blogDetail', $blogDetails);
        }
        if ($id == 4) {
            $blogDetails = [
                'title' => 'Bitzer condensing Unit in ludhaina',
                'date' => '22nd March, 2019 ',
                'image' => asset('assets/images/blogs/blog1.png'),
                'description' => 'The compact and robust structural shape of the bitzer condensing units and the use of efficient, optimally coordinated components enable an extensive range of both applications and capacities. Our Bitzer products Eco design-compliant and enable use of low-GWP refrigerants.'
            ];
            return view('blogDetails')->with('blogDetail', $blogDetails);
        }
    }
}
