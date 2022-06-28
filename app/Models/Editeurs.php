<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editeurs extends Model
{
    protected $table = 'editeurs';
    protected $primaryKey = 'id';
    protected $fillable = ['nom', 'address', 'mobile'];
}
