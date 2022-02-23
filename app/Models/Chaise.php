<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chaise extends Model
{
    use HasFactory;
    protected $fillable= ['type','description','statut'];
}
