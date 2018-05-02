<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Page;
use App\Note;

class PageController extends Controller
{
    public function show() {
        
        $pages = DB::table('pages')->get();

        return view('pages.show', compact('pages'));
    }

    public function onepage(Page $page) {

        return view('pages.onepage', compact('page'));
    }

    public function store(Request $request) {

        $page = new Page;

        $page->title = $request->title;

        $page->save();

        return back();

    }

    public function delete(Page $page) {

        if (count($page->notes)) {

            return view('pages.deleteall', compact('page'));

        } else {

            $page->delete();

            return back();
        }

    }

    public function deleteall(Page $page) {

        $page->delete();

        $page->notes()->delete();

        return redirect('../../pages');

    }
}
