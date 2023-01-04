<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class UserPersonalInfo extends Model
{
    use HasFactory;
    use LogsActivity;
    protected $table='user_personal_info';
    public $timestamps  = false;
    protected $fillable = ['first_name','last_name','birthday','facebook','linkedin','twitter','instagram','user_id'];
    protected $dates = [
        'date',
    ];
    protected $guarded = [];

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('UserPersonelInfo')
//             ->
//            ->logOnly(['name', 'text']);
            ->logAll();
        // Chain fluent methods for configuration options
    }

    public function GetUserPersonalInfo($user_id)
    {
         $rs = $this->select('user_personal_info.*')
            ->where('user_id','=',$user_id)
            ->first();
          return $rs ? $rs->toArray() : null;
    }


    public function SaveOrUpdateUserPersonelInfo($params,$user_id){
        if (is_null($params['id'])){ //Kayıt İşlemi
            $this->user_id = $user_id;
            $this->first_name=$params['ad'] ?? null;
            $this->last_name=$params['soyad'] ?? null;
            $this->birthday=$params['dogum_tarih'] ?? null;
            $this->facebook=$params['facebook'];
            $this->linkedin=$params['linkedin'];
            $this->twitter=$params['twitter'];
            $this->instagram=$params['instagram'];
            $this->save();

            return $this->getKey();
        }else { //Update işlemi

            $updateRow = $this::find($params['id']);
            $updateRow->user_id = $user_id;
            $updateRow->first_name=$image['background_image']['filename'] ?? null;
            $updateRow->birthday=$image['profile_image']['filename'] ?? null;
            $updateRow->facebook=$params['profile_title'];
            $updateRow->linkedin=$params['adress'];
            $updateRow->twitter=$params['bio_info'];
            $updateRow->instagram=$params['bio_info'];

            $updateRow->save();
            return  $this->getKey();
        }


    }


    public function SaveOrUpdateSocialMedia($params,$user_id){

//      $this->where('user_id','=',$user_id)->
        /**
         * Mevcut Kayıdı Günceller. Kayıt yok ise yenisini Ekler
         */
        $this->updateOrCreate(
            ['user_id' => $user_id],
            [
                'facebook' => $params['facebook'],
                'twitter' => $params['twitter'],
                'instagram' => $params['instagram'],
                'linkedin' => $params['linkedin'],
                'user_id' => $user_id,
            ]
        );

        return $this->getKey();
//        $this->whereExists(function ($query) {
//            $query->select($this::raw(1))
//                ->from('orders')
//                ->whereColumn('orders.user_id', 'users.id');
//        })
//            ->get();


//        if (is_null($params['id'])){ //Kayıt İşlemi
//            $this->user_id = $user_id;
//            $this->facebook=$params['facebook'];
//            $this->linkedin=$params['linkedin'];
//            $this->twitter=$params['twitter'];
//            $this->instagram=$params['instagram'];
//            $this->save();
//
//            return $this->getKey();
//        }else { //Update işlemi
//
//            $updateRow = $this::find($params['id']);
////            $updateRow->user_id = $user_id;
////            $updateRow->first_name=$image['background_image']['filename'] ?? null;
////            $updateRow->birthday=$image['profile_image']['filename'] ?? null;
//            $updateRow->facebook=$params['profile_title'];
//            $updateRow->linkedin=$params['adress'];
//            $updateRow->twitter=$params['bio_info'];
//            $updateRow->instagram=$params['bio_info'];
//
//            $updateRow->save();
//            return  $this->getKey();
//        }


    }

}
