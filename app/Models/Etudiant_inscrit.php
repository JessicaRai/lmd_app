<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant_inscrit extends Model
{
    use HasFactory;
     protected $table = 'etudiant_inscrits';
    protected $primaryKey = 'id_etudiantins';

    protected $fillable = [
        'id_etudiantins', 'date_inscription', 'annee_inscription', 'statut'
    ];

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class, 'id_etudiantins', 'id');
    }
}
