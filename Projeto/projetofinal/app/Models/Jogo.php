<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\Jogo;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = ['player1', 'player2', 'p1gols', 'p2gols', 'fase'];

    

}
