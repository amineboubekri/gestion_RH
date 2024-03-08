<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Echelle extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_echelle','DRPP','Designation_echelle','echellon','Date_echelle'];
    protected $primaryKey = 'Ref_echelle';
}
