<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function divisi()
    {
        return $this->hasMany(Team::class);
    }

    public function anggota()
    {
        return $this->hasMany(User::class);
    }

    public function divapp()
    {
        return $this->hasMany(Appointment::class);
    }
}
