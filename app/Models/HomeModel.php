<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{

    use HasFactory;

    protected $table = 'post';

    /**
     * Kaydedilen Son iki post bilgisi
     * @return mixed
     */
    public function SliderPost()
    {
        return $this->select('post.*','u.name as username','pf.file_info','ps.profile_image')
            ->leftJoin('users as u', 'u.id','=','post.user_id')
            ->leftJoin('post_file as pf', 'pf.post_id','=','post.id')
            ->leftJoin('profile_setting as ps', 'ps.user_id','=','post.user_id')
            ->orderBy('date', 'desc')
            ->take(2)
            ->get()
            ->toArray();
    }

    /**
     * Highlights -Öne Çıkan Gönderi Listesi-Max 5
     * @return mixed
     */
    public function HighlightsPost(){
        //Geçici seçim
        //Daha sonrasında admin panelinden seçilmelidir
        return $this->select('post.*','u.name as username','pf.file_info','ps.profile_image')
            ->leftJoin('users as u', 'u.id','=','post.user_id')
            ->leftJoin('post_file as pf', 'pf.post_id','=','post.id')
            ->leftJoin('profile_setting as ps', 'ps.user_id','=','post.user_id')
            ->orderBy('date', 'desc')
            ->offset(2)
            ->limit(5)
            ->get()
            ->toArray();
    }
}
