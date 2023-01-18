<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class meal extends Model
{
    use HasFactory;

    protected $table = 'meal_table';
    protected $fillable = [
        'Meal',
        'Meal_Time',
        'Drink',
        'Drink_Time',
    ];


}
