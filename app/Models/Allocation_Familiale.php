<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allocation_Familiale extends Model
{
    use HasFactory;
    protected $fillable = ['Ref_allocation_familiale','Nom_Français','Prenom_Français','Type_allocation_familiale','Valeur_allocation_familiale','date_allocation','DRPP'];
    protected $primaryKey = 'Ref_allocation_familiale';
}
