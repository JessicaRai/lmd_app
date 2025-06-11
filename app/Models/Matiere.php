<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
    protected $fillable = ['filiere_id', 'libelle', 'code'];

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function epreuves()
    {
        return $this->hasMany(Epreuve::class);
    }
}
