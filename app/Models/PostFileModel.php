<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PostFileModel extends Model
{
    use HasFactory;
    protected $table = 'post_file';
    public $timestamps = false;

    public function __construct()
    {
        parent::__construct(); //Var olan constructor önce çağırılıyor


    }

    /**
     * @param $postId
     * @param $fileInfo
     * @return mixed File Id
     */
    public function saveFileInfo($postId,$fileInfo){
        $this->post_id = intval($postId);
        $this->file_info = json_encode($fileInfo,256);
        $this->save();

        return $this->getKey();
    }

    public function updateFileStatus($post_id, $status = 0)
    {
        return $this->where('post_id', '=', $post_id)->update([
            'status' => $status
        ]);
    }

}
