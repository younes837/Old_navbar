<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propriete extends Model
{
    use HasFactory;
    protected $table = 'propriete';
    protected $fillable = [
        'libelle',
        'description',
       
    ];
}
