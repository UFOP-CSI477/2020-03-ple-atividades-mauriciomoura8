<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Player;
use App\Models\Jogo;

class Jogo extends Model
{
    use HasFactory;

    protected $fillable = ['player1_id', 'player2_id', 'p1gols', 'p2gols', 'fase'];

    public function players()
    {
        return $this->belongsToMany('App\Models\Player');
    }

}
