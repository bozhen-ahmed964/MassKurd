<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainerModel extends Model
{
    use HasFactory;
    protected $table = 'trainerTable';
    protected $fillable = [
        'Trainer_Name',
        'Age',
        'Gender',
        'Phone_Number',
        'Pay',
        'created_at',
        'updated_at',
    ];
}
