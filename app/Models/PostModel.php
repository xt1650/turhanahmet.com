<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PostModel extends Model
{

    use HasFactory;
    protected $table = 'post';
//    public $timestamps = false;
    const CREATED_AT = 'date'; //insert işleminde set edilir
    const UPDATED_AT = 'update_at'; //update işleminde set edilir.
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
//        $this->post = new PostModel();
    }

    /**
     * @param $params
     * @param $user_id
     * @return mixed lastInserId
     */
    public function SavePost($params,$user_id){
         $this->user_id = $user_id; // user id
         $this->name = $params->name; // Post Adı
         $this->tur_id = $params->post_type; // Post türü
         $this->category_id = $params->category; // category id
         $this->short_description = $params->short_description; // short_description
         $this->post_body = $params->content; // short_description
         $this->tags= $params->tags; // Image
         $this->save();
         return $this->getKey();
    }


    public function getPostFromID($post_id){
        return $this->select('post.*', 'u.name as username', 'pf.file_info')
            ->leftJoin('users as u', 'u.id', '=', 'post.user_id')
            ->leftJoin('post_file as pf', function ($join) {
                $join->on('pf.post_id', '=', 'post.id')
                    ->where('pf.status', '=', 1);
            })
            ->where('post.id', '=', $post_id)
//            ->orderBy('date', 'desc')
//            ->take(2)
            ->first()
            ->toArray();
    }

    public function getLivePostCount(){
        return $this
            ->where('status','=',1)->count();
    }

    public function UpdatePost($params,$user_id,$post_id){
        return $this->where('id', '=', $post_id)
            ->update([
                'user_id' => $user_id,
                'name' => $params->name,
                'tur_id' => $params->post_type,
                'short_description' => $params->short_description,
                'post_body' => $params->content,
                'tags' => $params->tags,
                'category_id' => $params->category
            ]);
    }

    public function DeletePost($post_id){
        return $this->where('id', '=', $post_id)
            ->update([
                'status' => 0,
            ]);
    }

}
