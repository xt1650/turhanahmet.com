<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\PostModel;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PostDatatablesController extends Controller
{
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDatatablesPost(Request $request)
    {
//        dump($request);
        $post = PostModel::leftJoin('users','users.id','=','post.user_id')->
        select('post.*','users.name as username')
            ->orderBy('post.date','desc');
//        $users = User::select(['id','name','email','created_at','updated_at']);
        return Datatables::of($post)
            ->editColumn('date', function ($date){
                return $date->date->format('d/m/Y h:i');
            })
            ->editColumn('status', function ($status){
                if ($status->status == 1){
                    $css = 'text-success';
                    $text= 'Aktif';
                }else{
                    $css = 'text-danger';
                    $text= 'Pasif';
                }
                return '<span class="badge bg-success bg-opacity-10 '.$css.' mb-2">'.$text.'</span>';
            })
            ->escapeColumns([])
            ->addIndexColumn()
            ->addColumn('action', function ($user) {
                return '<div class="d-flex gap-2">'.
//                    href="'.route('admin.post.delete',['id'=>$user->id]).'"
                     '<button type="button" class="btn btn-light btn-round mb-0" data-id="'.$user->id.'" ><i class="bi bi-trash"></i></button>'.
                    '<a href="'.route('admin.post.update',['id'=>$user->id]).'" class="btn btn-light btn-round mb-0" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="bi bi-pencil-square"></i></a>'.
                    '</div>';
        })->make(true);
    }
}
