<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutModel extends Model
{
    use HasFactory;
    protected $table = 'about';
    public $timestamps = false;


    public function saveAboutMe($params,$file_info){
        $this->title = $params->title;
        $this->short_description = $params->short_description;
        $this->context = $params->context;
        $this->file_info = json_encode($file_info,JSON_UNESCAPED_UNICODE);

        $this->save();
        return $this->getKey();
    }


    public function getAboutMe(){
        return $this->select('about.*')
            ->where('status','=',1)
            ->orderBy('date', 'desc')
            ->take(1)
            ->first()
            ->toArray();
    }

}
