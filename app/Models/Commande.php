<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = 'commande';
    protected $fillable = [
        'id',
        'date',
        'total',
        'etat_id',
        'user_id',
        'ville',
        'adress',
    ];
}
