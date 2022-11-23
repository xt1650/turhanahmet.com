<?php

namespace App\Http\Controllers;

use App\Http\Tools\FileTools;
use App\Models\CommentsModel;
use App\Models\PostFileModel;
use Illuminate\Http\Request;
use App\Models\PostModel as PostModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;


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

    public function PostDelete(Request $request){

        return $this->postModel->DeletePost($request->postId);

    }


    public function PostCommentSave(Request $request){
        $validator =  Validator::make($request->all(),[
            'comment' => 'required|min:1|max:255',
        ])->validate(); //Doğrulama başarısız olursa hata döner http status :422


        $commentsModel = new CommentsModel();
        $commentsModel->user_id = Crypt::decrypt($request->input('user-id'));
        $commentsModel->post_id = Crypt::decrypt($request->input('post-id'));
        $commentsModel->comment_content = $request->comment;
        $commentsModel->parent_comment_id = $request->parentCommentId;
        $rs = $commentsModel->save();


        return response()
            ->json(['status' => $rs, 'state' => $request->input()]);
//            ->withCallback($request->input('callback'));
//            ->withCallback($request->input());
    }
}
