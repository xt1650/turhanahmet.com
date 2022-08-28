<?php

namespace App\Http\Controllers;

use App\Http\Tools\FileTools;
use App\Models\PostFileModel;
use Illuminate\Http\Request;
use App\Models\PostModel as PostModel;
use Illuminate\Support\Facades\Auth;


class Post extends Controller
{

    private PostModel $postModel;
    private PostFileModel $PostFileModel;
    private FileTools $toolsImage;

    public function __construct()
    {
     $this->postModel =  new PostModel();;
     $this->PostFileModel =  new PostFileModel();
     $this->toolsImage = new FileTools();

    }

    public function PostCreate(Request $request){



        $user_id =Auth::user()->getAuthIdentifier();

        $rs = $this->toolsImage->SavePostFile($request->file('image'));
        if($rs == false) return false;


        $newId = $this->postModel->SavePost($request,$user_id);

        $this->PostFileModel->saveFileInfo($newId,$rs);

        return redirect()->back()->with('message', 'Gönderi Kaydetme İşlemi Başarılı');
    }
}
