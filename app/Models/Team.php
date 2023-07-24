<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function member()
    {
        return $this->hasMany(User::class);
    }

    public function app()
    {
        return $this->hasMany(Post::class);
    }

    public function appointment(){
        return $this->hasMany(Appointment::class);
    }
}
