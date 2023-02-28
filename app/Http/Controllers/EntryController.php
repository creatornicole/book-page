<?php

namespace App\Http\Controllers;

use App\Models\BookEntry;
use Illuminate\Http\Request;

class EntryController extends Controller
{
    //Show All Entries
    public function index() {
        return view('index', [
            'books' => BookEntry::all() //for using variable books in index view
        ]);
    }

    //Show Create Page
    public function create() {
        return view('create');
    }

    //Save Book Entry
    public function submit(Request $request) {
        //form validation
        $formFields = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'sum' => 'required'
        ]); //send error back in case of failure (@error in create file)
        
        //create new entry in database
        BookEntry::create($formFields);

        //redirect to same start page
        return redirect('/');
    }
 
}
