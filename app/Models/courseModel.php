<?php

namespace App\Models;

use App\Models\memberModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        return $this->belongsToMany(memberModel::class, 'member_course');

    }
}
