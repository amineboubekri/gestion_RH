<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absence extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_absence','date_absence','Nom_Français','Prenom_Français','date_retour','DRPP','justification','cause','commentaire'];
    protected $primaryKey = 'Ref_absence';
}
