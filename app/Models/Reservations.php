<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reservations extends Model
{
    use HasFactory;
     protected $guarded = [];
 
     /**
      * Get the auther that owns the book 
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function etudiants(): BelongsTo
     {
         return $this->belongsTo(Etudiant::class,'etudiant_id','id');
     }

     public function livres(): BelongsTo
     {
         return $this->belongsTo(Livre::class,'livre_id','id');
     }
 
 
}
