<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;
     protected $fillable = [
        'user_id', 'matricule', 'nom', 'prenom', 'filiere_id', 'annee_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inscrit()
    {
        return $this->hasOne(Etudiant_inscrit::class, 'id_etudiantins', 'id');
    }

    public function filiere()
    {
        return $this->belongsTo(Filiere::class);
    }

    public function annee()
    {
        return $this->belongsTo(Annee::class);
    }

    public function compositions()
    {
        return $this->hasMany(Composer::class);
    }
}
