<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedbackController extends Model
{
    protected $fillable = [
        'customer_name',
        'email',
        'phone_number',
        'pickup_date',
        'cake_type',
        'flavor',
        'size',
        'design-description',
        'buget',

    ];
}
