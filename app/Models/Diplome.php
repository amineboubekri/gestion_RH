<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_diplome','Nom_diplome','Nom_Français','Prenom_Français','Specialite','Date_obtention','Ecole','Ville_diplome','DRPP'];
    protected $primaryKey = 'Ref_diplome';
}
