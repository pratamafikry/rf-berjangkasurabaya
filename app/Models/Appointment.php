<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Appointment extends Model
{
    use HasFactory;
    use Sluggable;
    protected $guarded = ['id'];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class, 'driver_id');
    }

    public function session()
    {
        return $this->belongsTo(Sesi::class, 'sesi_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama'
            ]
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
