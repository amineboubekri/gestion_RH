<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;

    protected $fillable = ['Ref_note','Nom_Français','Prenom_Français','Note_appliquee','Note_rentabilite','Note_capacite','Note_comportement_professionnel','Note_recherche','Mention','Commentaire','Annee','DRPP'];
    protected $primaryKey = 'Ref_note';
}