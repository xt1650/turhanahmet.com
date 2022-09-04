<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfileSetting extends Model
{
    use HasFactory;
    protected $table='profile_setting';

    protected $timestamp = false;

    public function GetPersonalSetting($user_id)
    {
        return $this->select('*')
            ->where('user_id','=',$user_id)
            ->first()
            ->toArray();
    }

}
