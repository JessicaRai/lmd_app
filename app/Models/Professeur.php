<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $table = 'professeurs';

    protected $fillable = [
        'user_id', 'nom', 'prenom', 'telephone', 'specialite'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inscrit()
    {
        return $this->hasOne(Professeur_inscrit::class, 'id_prof', 'id');
    }

     public function epreuves()
    {
        return $this->hasMany(Epreuve::class);
    }
}
