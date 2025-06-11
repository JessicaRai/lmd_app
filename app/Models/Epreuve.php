<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    use HasFactory;
    protected $fillable = [
        'professeur_id', 'matiere_id', 'annee_id', 'titre', 'description',
        'type_ep', 'statut_ep', 'date_ep', 'heure_deb', 'heure_fin', 'duree', 'notation_auto'
    ];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function annee()
    {
        return $this->belongsTo(Annee::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function participants()
    {
        return $this->belongsToMany(Etudiant::class, 'composers')
                    ->withPivot('note', 'statut_comp', 'date_comp');
    }
}
