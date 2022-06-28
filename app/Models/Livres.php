<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livres extends Model
{
    protected $table = 'livres';
    protected $primaryKey = 'id';
    protected $foreignKey = 'categorie_id';
    protected $fillable = ['name', 'address', 'mobile'];
}
