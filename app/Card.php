<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    //esme function ro nesme jadvali mizaram ke mikham bahash mortabet bokonam yani har cardi chanta note darad

    public function  notes(){

    return $this->hasMany(Note::class);//hasmany('App\Note')


    }



}
