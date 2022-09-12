<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInfo extends Model
{
    use HasFactory;
    protected $table='user_personal_info';

    protected $timestamp = false;

    public function GetUserPersonalInfo($user_id)
    {
         $rs = $this->select('user_personal_info.*')
            ->where('user_id','=',$user_id)
            ->first();
          return $rs ? $rs->toArray() : null;
    }

}
