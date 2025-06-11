<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'epreuve_id', 'ordre', 'type_ques', 'contenu', 'points'
    ];

    public function epreuve()
    {
        return $this->belongsTo(Epreuve::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }
}
