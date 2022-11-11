<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberModel extends Model
{
    use HasFactory;

    protected $table = 'add_member_table';
    protected $fillable = [
        'Full_Name',
        'Age',
        'Gender',
        'Phone_Number',
        'Weight',
        'Height',
        'Game_Type',
        'Pay',
        'Statues',
        'Health_Issue',
        'created_at',
        'updated_at',
    ];
}
