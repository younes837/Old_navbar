<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etat extends Model
{
    use HasFactory;
    protected $table = 'etat';
    protected $fillable = [
        'libelle',
        'id',
        'description'
    ];
}
