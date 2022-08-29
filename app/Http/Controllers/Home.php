<?php

namespace App\Http\Controllers;

use App\Models\AboutModel;
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

        return view('index',['slider'=> $twoSliderData,'highlights'=>$homeModel->HighlightsPost()]);
    }

    public function ShowAboutMe(){

        $aboutModel = new AboutModel();
        return view('about',['aboutme'=>$aboutModel->getAboutMe()]);
    }

    public function ShowContactMe(){
        return view('contact');
    }
}
