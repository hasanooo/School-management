<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Active_student;
use App\Models\Routine;
use App\Models\Program;
use App\Models\Result;
use App\Models\subject;


class Class_model extends Model
{
    use HasFactory;
    public $timestamps = false;
    public function sStudent()
    {
        return $this->hasMany(Student::class,);
    }

     public function active_student()
    {
        return $this->belongsTo(Active_student::class);
    }
    public function routine()
    {
        return $this->belongsTo(Routine::class);
    }
    public function program(){
        return $this->hasMany(Program::class);
    }
    public function result(){
        return $this->hasMany(Result::class);
    }
         public function sSubject(){
        return $this->hasMany(subject::class);
    }

}
