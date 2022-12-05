<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Auth\Registration;
use App\Models\Active_student;
use App\Models\Student;


    //  public function result()
    // {
    //     return $this->belongsTo(result::class);
    // }
     


class Session extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function Active_student()
    {
        return $this->belongsTo(Active_student::class);
    }
    public function sStudent()
    {
        return $this->hasMany(Student::class);
    }

}
