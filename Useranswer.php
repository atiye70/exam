<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Useranswer extends Model
{
//    use HasFactory;

    protected $fillable = [
        'id_useranswer', 'id_user', 'id_question', 'answer', 'ip_user',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

}
