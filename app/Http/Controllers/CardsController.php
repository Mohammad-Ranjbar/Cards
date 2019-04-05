<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\Tag;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CardsController extends Controller
{
    //

    public function index()
    {
         $cards=DB::table('cards')->get();
        return view('cards/index',compact('cards'));

    }


    /**
     * @param Card $card
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Card $card){

        auth()->loginUsingId(1);
//        $card=Card::find($id);
        //return $card;

//        $card=Card::with('notes')->get();//yek array be man mide age find bezanam be man object mide
//        $card=Card::with('notes.user')->find(1);//alan be man object dad.dar kol in mishe yedone query khate paiin rahat taresh hast

        $card->load('notes.user');//be in harekat migam Eager loading yani hamash dar yek query ok mishe
        $tags=Tag::all();
//        return $card;

        return view('cards.show',compact('card','tags'));




    }
}
