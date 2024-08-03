<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agences extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
    ];

    public function employes()
    {
        return $this->hasMany(Employe::class);
    }

    public function voitures()
    {
        return $this->hasMany(Voiture::class);
    }
}
