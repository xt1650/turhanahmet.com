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
        return $this->select('post.*','u.name as username','pf.file_info')
            ->leftJoin('users as u', 'u.id','=','post.user_id')
            ->leftJoin('post_file as pf', 'pf.post_id','=','post.id')
            ->orderBy('date', 'desc')
            ->take(2)
            ->get()
            ->toArray();
    }
}
