<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Question extends Model
{
//    use HasFactory;

    protected $fillable = [
        'id_question', 'id_subject', 'question', 'a', 'b', 'c', 'answer'
    ];

    public function subjectquestions()
    {
        return $this->belongsTo(Subjectquestion::class);
    }

    public function useranswer()
    {
        return $this->hasOne(Useranswer::class);
    }

}
