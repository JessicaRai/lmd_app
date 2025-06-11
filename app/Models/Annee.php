<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annee extends Model
{
    use HasFactory;
    protected $fillable = ['libelle'];

    public function epreuves()
    {
        return $this->hasMany(Epreuve::class);
    }

    public function etudiants()
    {
        return $this->hasMany(Etudiant::class);
    }
}
