<?php

namespace App\Http\Controllers;

use App\Http\Tools\FileTools;
use App\Models\PostFileModel;
use App\Models\ProfileSetting;
use App\Models\User;
use App\Models\UserPersonalInfo;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{

    private FileTools $toolsImage;

    public function GetProfile(Request $request){


        $user_id =Auth::user()->getAuthIdentifier();
        $user = new User();
        $profileSetting = new ProfileSetting();
        $userPersonalInfo = new UserPersonalInfo();
        $users=$user->getUserInfo($user_id);
        $settings=$profileSetting->GetPersonalSetting($user_id);
        $personalInfo=$userPersonalInfo->GetUserPersonalInfo($user_id);
        dump($users,$settings,$personalInfo);

        return view('admin.edit.edit_profile',['user_info'=>$users,
            'settings'=>$settings,
            'personal_info'=>$personalInfo]);
    }


    public function SaveProfileChanges(Request $request){
        dump($request->user_id);
        dump($request->input());
        dump($request->file());
//        $this->toolsImage = new FileTools();
//        $imageSaveInfo = $this->toolsImage->SavePostFile($request->file('profile_file_input')); // Güncelenen resim ekleniyor
//        $this->PostFileModel->saveFileInfo($post_id, $rs); // Yeni resim bilgisi veritabanına kaydediliyor
//        if ($request->ajax()) {
//            return response()->json(['test'=>$request->input(),'file'=>$rs]);
//        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * Profil Bilgileri Güncelleniyor.
     */
    public function setProfileInfo(Request $request){
        $ps = new  ProfileSetting ();
        $this->toolsImage = new FileTools();

        $image = null ;


        /*
         * Resim değişikliklerine göre
         */
        if ($request->file('profile_file_input') && $request->file('profile_background')){
            $image['profile_image'] =$this->toolsImage->SavePostFile($request->file('profile_file_input')); // Güncelenen resim ekleniyor
            $image['background_image'] = $this->toolsImage->SavePostFile($request->file('profile_background'));
        }else if($request->file('profile_file_input')){
            $image['profile_image'] =$this->toolsImage->SavePostFile($request->file('profile_file_input')); // Güncelenen resim ekleniyor
        }else if($request->file('profile_background')){
            $image['background_image'] = $this->toolsImage->SavePostFile($request->file('profile_background'));
        }



        $data = $ps->SaveOrUpdateProfileSetting($request->input(),$request->user_id,$image);


        return response()->json(['data'=>1]);

    }
}
