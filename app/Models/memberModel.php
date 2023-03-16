<?php

namespace App\Models;

use App\Models\courseModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'Course_Pay',
        'created_at',
        'updated_at',
    ];
    public function course()
    {
        return $this->belongsToMany(courseModel::class, 'member_course', 'member_id', 'course_id');

    }
}
