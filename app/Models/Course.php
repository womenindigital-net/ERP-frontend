<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function parentCourse()
    {
        return $this->belongsTo(Course::class, 'parent_course_id', 'id');
    }

    public function scopeSpecifyingRelation($query)
    {
        return $query->with('parentCourse', function($q) {
            $q->select('id', 'title');
        })->select('id', 'title', 'parent_course_id')->whereNotNull('parent_course_id');
    }
}
