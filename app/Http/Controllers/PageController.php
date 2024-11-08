<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('aboutUs');
    }
    public function contact()
    {
        return view('contactUs');
    }
    public function download($type)
    {
        if ($type==='technicalDataSheet')
        {
            $data = [
                'title' => 'Technical Data Sheet',  // Fixed 'title' spelling and used => for assignment
                'downloads' => [
                    [
                        'fileTitle'=>'Recommended Cold Store Data',
                        'file'=>asset('assets/pdf/1.pdf'),
                    ],
                    [
                        'fileTitle'=>'Weight Copper Tubings',
                        'file'=>asset('assets/pdf/2.pdf'),
                    ],
                    [
                        'fileTitle'=>'Recommended KW Per Cross Electrical DUCT AREA',
                        'file'=>asset('assets/pdf/3.pdf'),
                    ],
                    [
                        'fileTitle'=>'Technical Knowledge',
                        'file'=>asset('assets/pdf/4.pdf'),
                    ]
                ]
            ];
            return view('download')->with('data', $data);
        }

    }
    public function gallery()
    {

        $galleryImages = [
            asset('assets/images/products/compressor/embraco.jpeg'),
            asset('assets/images/products/compressor/embraco.jpeg'),
        ];

        return view('gallery')->with('images',$galleryImages);
    }
}
