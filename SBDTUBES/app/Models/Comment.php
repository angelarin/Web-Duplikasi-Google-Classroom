<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function postnya(){
        return $this->belongsTo(Isipost::class, 'id_isipost');
    }
    public function usernya(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
