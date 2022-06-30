<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Emprunts extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * Get the student that owns the book_issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function etudiant(): BelongsTo
    {
        return $this->belongsTo(Etudiants::class, 'etudiant_id', 'id');
    }

    /**
     * Get the book that owns the book_issue
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function livre(): BelongsTo
    {
        return $this->belongsTo(Livres::class, 'livre_id', 'id');
    }


}
