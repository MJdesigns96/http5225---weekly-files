<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courses extends Model
{
    //
    use HasFactory;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'courseName',
        'courseID',
        'description'
    ];

    public function students(): BelongsToMany 
    {
        return $this->beongsToMany(Student::class);
    }

    public function faculties()
    {
        return $this -> belongsTo(Faculty::class);
    }
}