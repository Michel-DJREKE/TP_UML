<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employe extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'email',
        'telephone',
        'adresse',
        'poste',
        'agence_id'
    ];
    public function agence()
    {
        return $this->belongsTo(agences::class);
    }
}
