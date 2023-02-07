<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseModel extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'course_table';
    protected $fillable = [
        'Exercise_Name',
        'Primary_Muscle',
        'image',

    ];
    public function member()
    {
        return $this->belongsToMany(memberModel::class);
    }
}
