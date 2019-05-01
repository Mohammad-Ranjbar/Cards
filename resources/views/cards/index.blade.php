@extends('layout')

@section('content')

    <h1>all cards</h1>

    @foreach(array_chunk($cards->getCollection()->all(),3) as $raw)
        <div class="row">
            @foreach($raw as $card)
                <div class="col-md-4">
                    <div>
        <a href="/cards/{{$card->id}}"> <div>{{$card->title}}</div></a>

                    </div>
                </div>
        @endforeach
        </div>
        <hr>

    @endforeach

    <div class="text-center">

        {{$cards->links()}}
    </div>



    @stop