<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Note;

class NoteController extends Controller
{
    public function store(Request $request, Page $page) {
        
        $note = new Note;

        $note->text = $request->text;

        $page->notes()->save($note);

        return back();

    }
}
