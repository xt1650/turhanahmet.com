<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;
    protected $table='profile_setting';

    public $timestamps = false;
    protected $created_at,$updated_at = false;

    public function GetPersonalSetting($user_id)
    {
        $rs = $this->select('*')
            ->where('user_id','=',$user_id)
            ->first();

        return $rs ? $rs->toArray() : null;
    }

    public function SaveOrUpdateProfileSetting( $params,$user_id,$image){

        if (is_null($params['id'])){ //Kayıt İşlemi
            $this->user_id = $user_id;
            $this->background_image=$image['background_image']['filename'] ?? null;
            $this->profile_image=$image['profile_image']['filename'] ?? null;
            $this->profile_visibility= $params['profile_visibility'] ?? 1;
            $this->profile_title=$params['profile_title'];
            $this->location=$params['adress'];
            $this->bio=$params['bio_info'];
            $this->save();

            return $this->getKey();
        }else { //Update işlemi

            $updateRow = $this::find($params['id']);

            //$updateRow->update_at = false;
            if (isset($image['background_image']['filename'])){
                $updateRow->background_image= $image['background_image']['filename'];
            }

            if (isset($image['profile_image']['filename'])){
                $updateRow->profile_image=$image['profile_image']['filename'];
            }


            $updateRow->profile_visibility= $params['profile_visibility'] ?? 1;
            $updateRow->profile_title=$params['profile_title'];
            $updateRow->location=$params['adress'];
            $updateRow->bio=$params['bio_info'];

            $updateRow->save();
            return  $this->getKey();
        }




    }

}
