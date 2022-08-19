<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Isipost extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'isi', 'isi_attach', 'jenis'];
    public function kelass(){
        return $this->belongsTo(Kelas::class, 'id_kelas');
    }
    public function authors(){
        return $this->belongsTo(User::class, 'id_author');
    }
    public function komens(){
        return $this->hasMany(Comment::class,);
    }
    public function jawabs(){
        return $this->hasMany(Jawaban::class,);
    }
}
