<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjectquestion extends Model
{
//    use HasFactory;

    protected $fillable = [
        'id_subject', 'subject', 'no_question'
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

}
