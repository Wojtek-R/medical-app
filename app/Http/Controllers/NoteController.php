<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNoteRequest;
use App\Http\Requests\UpdateNoteRequest;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class NoteController extends Controller
{
    public function index()
    {


        $notes = Note::all();

        return view('notes.index', compact('notes'));
    }

    public function create()
    {

        return view('notes.create');
    }

    public function store(StoreNoteRequest $request)
    {
        Note::create($request->validated());

        return redirect()->route('notes.index');
    }

    public function show(Note $note)
    {

        return view('notes.show', compact('note'));
    }

    public function edit(Note $note)
    {

        return view('notes.edit', compact('note'));
    }

    public function update(UpdateNoteRequest $request, Note $note)
    {
        $note->update($request->validated());

        return redirect()->route('notes.index');
    }

    public function destroy(Note $note)
    {

        $note->delete();

        return redirect()->route('notes.index');
    }
}