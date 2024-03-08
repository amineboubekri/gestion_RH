<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_mission','DRPP','Objet_mission','Prenom_Français','Nom_Français','Ville_mission','Date_debut','Date_retour'];
    protected $primaryKey = 'Ref_mission';
}
