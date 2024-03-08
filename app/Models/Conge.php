<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    use HasFactory;

    protected $fillable = ['Ref_conge','DRPP','Nom_Français','Prenom_Français','type_conge','NomRemplacent','nbj','AnneeConge','date_retour','date_debut','Motif','user_id'];

    protected $primarykey = 'Ref_conge';
    public function getRouteKeyName()
    {
        return 'type_conge';
    }
}
