<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
class Home extends Controller
{


    public function show(){
        $homeModel = new HomeModel();
        $twoSliderData = $homeModel->SliderPost();

//        foreach($twoSliderData as $key=>$value){
//            $twoSliderData[$key]['file_info']=json_decode($value['file_info']);
//        }

        return view('index',['slider'=> $twoSliderData]);
    }

    public function ShowAboutMe(){
        return view('about');
    }

    public function ShowContactMe(){
        return view('contact');
    }
}
