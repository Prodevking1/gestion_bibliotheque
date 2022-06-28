<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiants extends Model
{
<<<<<<< HEAD
    protected $table = 'etudiants';
    protected $primarykey = 'id';
    protected $fillable =['nom', 'prenom', 'age', 'genre', 'email', 'tel', 'adresse', 'filiere', 'classe']; 
=======
    use HasFactory;
    protected $guarded = [];

>>>>>>> d49333a60e971ce77966a5f17a0ba535bc098b32
}
