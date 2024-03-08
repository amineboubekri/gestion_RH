<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivation extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_motivation','DRPP','Prenom_Français','Nom_Français','Type_motivation','Occasion','Date_motivation','Commentaire'];
    protected $primaryKey = 'Ref_motivation';
}
