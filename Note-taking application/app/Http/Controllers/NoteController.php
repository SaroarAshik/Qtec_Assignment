<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use Illuminate\Support\Facades\Auth;


class NoteController extends Controller{

    public function index(){
        $notes = Auth::user()->notes;
        return view('notes.index', compact('notes'));
    }

    public function create(){
        return view('notes.create');
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $note = new Note();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->user_id = Auth::id();
        $note->save();

        return redirect()->route('notes.index');
    }

    public function show(Note $note){
        return view('notes.show', compact('note'));
     }

    public function edit(Note $note){
        return view('notes.edit', compact('note'));
     }

    public function update(Request $request, Note $note){
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $note->update($request->all());

        return redirect()->route('notes.index');
    }

    public function destroy(Note $note){
        $note->delete();
        return redirect()->route('notes.index');
    }

    public function search(Request $request){
    $query = $request->input('query');
    $notes = Auth::user()->notes()->where('title', 'LIKE', "%{$query}%")
                                   ->orWhere('content', 'LIKE', "%{$query}%")
                                   ->get();
    return view('notes.index', compact('notes'));
}

}
