<?php

namespace App\Http\Controllers;

use App\Http\Tools\FileTools;
use App\Models\PostFileModel;
use Illuminate\Http\Request;
use App\Models\PostModel as PostModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;


class Post extends Controller
{

    private PostModel $postModel;
    private PostFileModel $PostFileModel;
    private FileTools $toolsImage;

    public function __construct()
    {
     $this->postModel =  new PostModel();
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


    public function showPost(Request $request,$post_name,$post_id){
//        dump($request);
//        dump($post_name);
//        dump($post_id);

        $post_id = Crypt::decrypt($post_id);
        $post = $this->postModel->getPostFromID($post_id);

        return view('post_viewer',['post'=>$post]);

    }


    public function GetPostList(Request $request){

        $total = $this->postModel->getLivePostCount();
        return view('admin.post.post_list',['total'=>$total]);
    }

    /**
     * Post Güncelleme Adımı
     * @param Request $request
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function GetPostUpdateData(Request $request,$id){
//        dump($id);
        $post = $this->postModel->getPostFromID($id);
//        dump($post);
        return view('admin.post.create_post',['update'=>true,'post'=>$post]);
    }

    public function PostUpdate(Request $request, $post_id)
    {
        if ($request->image_change_control) {
            dump('true');
            $this->PostFileModel->updateFileStatus($post_id);// Mevcut resim|ler durumu 0'a çekiliyor
            $rs = $this->toolsImage->SavePostFile($request->file('update_file_input')); // Güncelenen resim ekleniyor
            $this->PostFileModel->saveFileInfo($post_id, $rs); // Yeni resim bilgisi veritabanına kaydediliyor
            if ($rs == false) return false;
        }

        $user_id = Auth::user()->getAuthIdentifier();


        $effected = $this->postModel->UpdatePost($request, $user_id, $post_id);


        return redirect()->back()->with('message', 'Gönderi Güncelleme İşlemi Başarılı');
    }

    public function PostDelete($post_id){
        return $this->postModel->DeletePost($post_id);

    }
}
