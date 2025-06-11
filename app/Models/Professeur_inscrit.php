<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur_inscrit extends Model
{
    use HasFactory;
    protected $table = 'professeur_inscrit';
    protected $primaryKey = 'id_prof';

    protected $fillable = [
        'id_prof', 'date_inscription', 'statut'
    ];

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'id_prof', 'id');
    }
}
