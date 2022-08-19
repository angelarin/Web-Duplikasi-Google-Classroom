<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password',
    ];
    use HasFactory,Notifiable;

    public function posts(){
        return $this->hasMany(Post::class);
    }
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }
    public function isiposts()
    {
        return $this->hasMany(Isipost::class);
    }
    public function komennya()
    {
        return $this->hasMany(Comment::class);
    }
}
