<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class PostModel extends Model
{

    use HasFactory;
    protected $table = 'post';
    public $timestamps = false;
//    const CREATED_AT = 'time_stamp';
//    const UPDATED_AT = 'time_stamp';
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

}