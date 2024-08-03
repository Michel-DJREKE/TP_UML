<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    use HasFactory;
    protected $fillable = [
        'voiture_id',
        'client_id',
        'date_debut',
        'date_fin',
        'prix_total',
    ];

    public function voiture()
    {
        return $this->belongsTo(Voiture::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
