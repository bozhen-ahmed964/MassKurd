<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberHistoryModel extends Model
{
    use HasFactory;
    protected $table = 'member_history_table';
    protected $fillable = [
        'Full_Name',
        'Age',
        'Gender',
        'Phone_Number',
        'Pay',
        'created_at',
        'updated_at',
    ];
}
