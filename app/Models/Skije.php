<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skije extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'godina_proizvodnje',
        'visina'
    ];

    public function kategorija(){
        return $this->belongsTo(Kategorija::class);
    }

    public function User(){
        return $this->belongsTo(User::class);

    }
    public function proizvodjac(){
        return $this->belongsTo(Porizvodjac::class);
    }
}
