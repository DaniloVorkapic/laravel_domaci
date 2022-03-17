<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porizvodjac extends Model
{
    use HasFactory;
    protected $fillable = [
        'naziv',
        'drzava'
        
    ];
}
