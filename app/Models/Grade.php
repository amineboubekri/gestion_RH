<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_grade','DRPP','Designation_grade','Enum_grade','Date_grade'];
    protected $primaryKey = 'Ref_grade';
}
