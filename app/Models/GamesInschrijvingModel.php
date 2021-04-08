<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GamesInschrijvingModel extends Model
{
    use HasFactory;
    protected $table = 'gamesinschrijving';
    public $timestamps = false;
}
