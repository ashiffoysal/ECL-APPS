<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;


    public function Student()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
    public function Tutor()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
