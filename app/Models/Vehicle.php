<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = 'vehicles';
    protected $fillable = ['image_path', 'city', 'make', 'make', 'model', 'year', 'km', 'description', 'transmission', 'phone', 'price'];
}
