<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SelectedTutorSubject extends Model
{
    use HasFactory;
     public function Tutor()
    {
        return $this->belongsTo('App\Models\User', 'tutor_id', 'id');
    }

    public function Subject()
    {
        return $this->belongsTo('App\Models\TutoringSubject', 'subject_id', 'id');
    }
}
