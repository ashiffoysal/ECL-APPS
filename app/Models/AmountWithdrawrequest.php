<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmountWithdrawrequest extends Model
{
    use HasFactory;

    public function Tutor()
    {
        return $this->belongsTo('App\Models\User', 'tutor_id', 'id');
    }
}
