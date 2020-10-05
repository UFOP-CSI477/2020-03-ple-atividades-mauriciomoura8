<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Coleta;
use App\Models\Agendamento;
use App\Models\Pessoa;

class Agendamento extends Model
{
    use HasFactory;

    protected $fillable = ['pessoa_id', 'coleta_id', 'data'];

    public function coleta(){
        return $this->hasOne(Coleta::class, 'id', 'coleta_id');
    }

    public function pessoa(){
        return $this->hasOne(Pessoa::class, 'id', 'pessoa_id');
    }
}
