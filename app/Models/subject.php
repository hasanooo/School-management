<?php

namespace App\Models;
use App\Models\Runtime;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Routine;
use App\Models\Program;
use App\Models\Result;
use App\Models\Student;
use App\Models\Class_model;
class Subject extends Model
{
    use HasFactory;
     public $timestamps = false;
    //  public function result()
    // {
    //     return $this->hasMany(result::class);
    // }
    
    public function routine(){
        return $this->belongsTo(Routine::class);
    }
    public function program(){
        return $this->hasMany(program::class);
    }
     public function result(){
        return $this->hasMany(Result::class);
    }
        public function ssClass()
    {
        return $this->belongsTo(Class_model::class,'class_model_id');
    }
  



}
