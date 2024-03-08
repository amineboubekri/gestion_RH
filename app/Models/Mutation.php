<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mutation extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_mutation','Nom_Français','Prenom_Français','date_mutation','lieu_Travail','ville_Mutation','DRPP'];
    protected $primaryKey = 'Ref_Mutation';
}
