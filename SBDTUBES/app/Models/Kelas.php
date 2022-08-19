<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    public $timestamps = true;
    protected $fillable = ['id','nama_kelas', 'kode_kelas'];

    public function enrollment()
    {
        return $this->hasMany(Enrollment::class);
    }
    public function post()
    {
        return $this->hasMany(Post::class);
    }
}
