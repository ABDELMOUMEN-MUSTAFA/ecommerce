<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\models\PaymentMethod;
use App\models\User;

class Payment extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function paymentMethod()
    {
    	return $this->belongsTo(PaymentMethod::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
