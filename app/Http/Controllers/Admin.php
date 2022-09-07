<?php

namespace App\Http\Controllers;

use App\Models\ProfileSetting;
use App\Models\User;
use App\Models\UserPersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin extends Controller
{
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
}
