<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'composer_id', 'question_id', 'reponse_texte', 'point_obtenu'
    ];

    public function composer()
    {
        return $this->belongsTo(Composer::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

