<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentsModel extends Model
{
    use HasFactory;

    use HasFactory;
    protected $table = 'comments';
    public $timestamps = false;
}
