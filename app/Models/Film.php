<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function scopeFilmName($query, $name)
    {
        if (!is_null($name)) return $query->where('name', $name);

        return $query;
    }

    public function scopeGetOld($query, $old)
    {
        if (!is_null($old)) return $query->latest();

        return $query;
    }

    public function scopeGetOldId($query, $old)
    {
        if (!is_null($old)) return $query->latest('id');

        return $query;
    }

    public function scopeFirstBiId($query, $id)
    {
        if (!is_null($id)) return $query->where('id', $id);

        return $query;
    }

    public function scopeFilmActorName($query, $name)
    {
        if (!is_null($name)) $query->whereHas('actors', function($query) use($name) {
                $query->where('name', $name);
            });

        return $query;
    }

    public function scopeActorById($query, $id)
    {
        if (!is_null($id)) $query->with('actors', function($query) use($id) {
            $query->wherePivot('actor_id', $id);
        });

        return $query;
    }

}
