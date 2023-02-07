<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTutorRequest extends Model
{
    use HasFactory;

    
    public function Student()
    {
        return $this->belongsTo('App\Models\User', 'student_id', 'id');
    }
    public function Tutor()
    {
        return $this->belongsTo('App\Models\User', 'tutor_id', 'id');
    }


}
