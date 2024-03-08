<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['DRPP','Num_poste','Affiliation_Financiere','Nom','Prenom','Nom_Français','Prenom_Français','image','CIN','date_naissance','Lieu_Naissance','Adresse','Telephone','Situation_Familiale','Nombre_enfant','Lieu_Travail','date_emboche','Situation_Administrative','date_recrutement'];
    protected $primaryKey = 'DRPP';

    public function absences()
{
    return $this->hasMany(Absencess::class);
}
}