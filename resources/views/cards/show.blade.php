@extends('layout')

@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <h1>{{$card->title}}</h1>

    <ul class="list-group">




    @foreach($card->notes as $note)




        <li class="list-group-item">

            @can('editor')
            <a href="/note/{{$note->id}}/edit">
                @endcan
                {{$note->body}}
                @can('editor')
            </a>
            @endcan
            <a href="#" class="pull-right">{{ $note->user->username }}</a>


        </li>
    @endforeach
    </ul>

        <h3>add new note</h3>
        <hr>

        <form method="post" action="/cards/{{$card->id}}/notes" >

            {{ csrf_field() }}


            <div class="form-group">

<label>
                <textarea  name="body" title="body" class="form-control">{{old('body')}}</textarea>
</label>
            </div>

            <div class="form-group">

              <select id="tag_list" name="tags[]" title="tags" class="form-control"  multiple="multiple">

                @foreach($tags as $tag)

                  <option value="{{$tag->id}}">{{$tag->name}}</option>
                @endforeach

              </select>

            </div>


            <div class="form-group">

                <button type="submit" class="btn btn-primary">add note</button>

            </div>

        </form>

        {{--{{var_dump($errors)}}--}}{{--//ya khate paiinish ke ghashangtar neshin mide--}}

        @if(count($errors))
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}

                    </li>
                    @endforeach

            </ul>
            @endif

</div>
</div>
    @stop
