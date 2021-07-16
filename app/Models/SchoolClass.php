<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SchoolClass extends Model
{
    use SoftDeletes;

    public $table = 'school_classes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function classLessons()
    {
        return $this->hasMany(Lesson::class, 'class_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
