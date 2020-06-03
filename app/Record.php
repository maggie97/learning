<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Game;

class Record extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['child_id', 'game_id', 'score', 'date'];
    
    public function game(){
        return $this->belongsTo('App\Game', 'game_id');
    }
    public function child(){
        return $this->belongsTo('App\Child', 'child_id');
    }
}
