<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
    protected $table = 'etudiants';
    protected $primarykey = 'id';
    protected $fillable =['nom', 'prenom', 'age', 'genre', 'email', 'tel', 'adresse', 'filiere', 'classe']; 
}
