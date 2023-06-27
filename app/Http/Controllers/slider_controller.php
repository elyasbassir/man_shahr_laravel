<?php

namespace App\Http\Controllers;
use App\Models\slider_model;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class slider_controller extends Controller
{
    public function slider($city_hash)
    {
        SEOTools::setTitle('من شهر - اسلایدر');
        SEOTools::setDescription('اولین نرم افزار خدمات شهری');
        SEOTools::opengraph()->setUrl('http://man-shahr.ir');
        SEOTools::setCanonical('http://man-shahr.ir');
        SEOTools::opengraph()->addProperty('type', 'slider');
        SEOTools::twitter()->setSite('@man_shahr');
        SEOTools::jsonLd()->addImage('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQo23tYn4lKpHQfnMMHNWcf3pSMyg3wNQrJT2yFJSHA&s');
        $data =slider_model::find_slider_with_hash_id_city($city_hash);
        if(count($data) > 0){
            return view('slider',compact('city_hash','data'));
        }else{
            Alert::error('خطا!..', 'آدرس وارد شده نا معتبر میباشد.');
            return redirect()->route('index');
        }

    }
}
