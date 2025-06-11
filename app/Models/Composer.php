<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Composer extends Model
{
    use HasFactory;

     protected $fillable = [
        'epreuve_id', 'etudiant_id', 'date_comp', 'statut_comp', 'note', 'temps'
    ];

    public function epreuve()
    {
        return $this->belongsTo(Epreuve::class);
    }

    public function etudiant()
    {
        return $this->belongsTo(Etudiant::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
