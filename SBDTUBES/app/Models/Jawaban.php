<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    public function posty(){
        return $this->belongsTo(Isipost::class, 'id_isipost');
    }
}
