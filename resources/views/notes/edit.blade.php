@extends('layout')

@section('content')

    <a class="btn btn-sm btn-default" href="/cards/{{$note->card_id}}">Back</a>
    <h3>edit the notes</h3>


    <form method="post" action="/notes/{{$note->id}}" >
        @csrf
{{--<input type="hidden" name="_methode" value="PATCH">--}}
        {{method_field('PATCH')}}



        <div class="form-group">

            <label>
                <textarea required name="body" title="body" class="form-control">{{$note->body}}</textarea>
            </label>
        </div>

        <div class="form-group">

          <select id="tag_list" name="tags[]" title="tags" class="form-control"  multiple="multiple">

            @foreach($tags as $tag)

            <option
              @foreach($note->tags as $note_tags)
                @if($tag->name === $note_tags->name)
                selected
                @endif
              @endforeach
               value="{{$tag->id}}">{{$tag->name}} </option>
            @endforeach

          </select>

        </div>
@can('edit-note',$note)
        <div class="form-group">

            <button type="submit" class="btn btn-primary">update  note</button>

        </div>
@endcan
    </form>
  @if(! $note->tags->isEmpty())
        <hr>
    <h4>tags</h4>
    <ul>
    @foreach($note->tags as $tag)

    <li>{{$tag->name}}</li>
    @endforeach
    </ul>
  @endif
@stop
