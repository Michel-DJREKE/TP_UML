<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    use HasFactory;
    protected $fillable = [
        'marque',
        'modele',
        'immatriculation',
        'annee',
        'prix_par_jour',
        'agence_id',
    ];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    public function agence()
    {
        return $this->belongsTo(agences::class);
    }
}
