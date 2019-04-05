<?php

namespace App\Http\Controllers;

use Gate;//https://laracasts.com/discuss/channels/laravel/static-gate-policy-error
use Illuminate\Http\Request;
use App\Note;
use App\Card;
use App\Tag;

use App\User;
use Illuminate\Foundation\Auth ;

class NotesController extends Controller
{
    public function store(Request $request,Card $card)
    {
//        return $request->all()
//        return \Request::all();
//        return request()->all();

//        $note->body=$request->body;
//        $card->notes()->save($note);
//        return \Redirect::to('URL');
//        return redirect('URL');
//        return redirect()->to('URL');

      // dd($request->input('tags'));

        $this->validate($request,[
            'body'=>'required|min:10'


        ]);
        $note= new Note($request->all());
        $note->user_id=1;
        $card->notes()->save($note);

        $tagIds=$request->input('tags');//array
        $note->tags()->sync($tagIds);//attach & detach
        // $note->tags()->attach($tagIds);
        // $note->tags()->detach($tagIds);

        // $request->session()->flash('flash_message','your card has been created.');//be raveshe helper function
//2 raveshe session paiini be raveshe fesad ast
        // \Session::flash('flash_message','your card has been created.');//this will keep for one Request
        // \Sesion::put('flash_message','your card has been created.');//this will keep it in the seasion
        flash('your card has been created','success');


        return back();
    }

    public function edit(Note $note)
    {


//        \auth()->loginUsingId(4);

//        auth()->loginUsingId(4);
//        \auth()->logout();
//        \auth()->loginUsingId(2);

//        if (Gate::denies('edit-note',$note)){
//
//            abort(404,'sorry the note does not belong to you');
//        }

        $this->authorize('update',$note);

        $tags=Tag::all();
        return view('notes.edit',compact('note','tags'));
    }

    public function update(Note $note,Request $request)
    {

        $note->update($request->all());
        $note->tags()->sync($request->input('tags'));
        return back();
    }

}
