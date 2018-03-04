<?php

/**
 * Subject Controller
 *
 * @subpackage  Http\Controllers
 */

namespace App\Http\Controllers;

use Alert;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Input;
use Redirect;
use Validator;
use App\Note;

class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function overview()
    {
        return view('notes.overview')
            ->with('notes', Auth::user()->currentTeam->notes);
    }

    /**
     * Display the specified resource.
     *
     * @param \app\Models\Note $note The Note to display
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        return view('notes.show')
            ->with('note', $note);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Determine our validation rules
        $rules = array(
            'name' => 'required',
            'text' => 'required'
        );
        // Create a Validator instance
        $validator = Validator::make(Input::all(), $rules);
        // Check if the Validator failed
        if ($validator->fails()) {
            // If so, return to the previous page with errors
            return Redirect::back()
                ->withErrors($validator)
                ->withInput(Input::all());
        }
        // If the Validator passed
        else {
            $note = new Note;

            // Set the attributes
            $note->team_id = Auth::user()->currentTeam->id;
            $note->name = ucwords(Input::get('name'));
            $note->text = Input::get('text');

            // Save the attributes
            $note->save();

            return Redirect::to('notes/' . $note->id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        // Determine our validation rules
        $rules = array(
            'name' => 'required',
            'text' => 'required'
        );
        // Create a Validator instance
        $validator = Validator::make(Input::all(), $rules);
        // Check if the Validator failed
        if ($validator->fails()) {
            // If so, return to the previous page with errors
            return Redirect::back()
                ->withErrors($validator)
                ->withInput(Input::all());
        }
        // If the Validator passed
        else {
            // Set the attributes
            $note->team_id = Auth::user()->currentTeam->id;
            $note->name = ucwords(Input::get('name'));
            $note->text = Input::get('text');

            // Save the attributes
            $note->save();

            return Redirect::to('notes/' . $note->id);
        }
    }

    public function favorite(Note $note) {
        $note->toggleFavorite();
        return Redirect::back();
    }
}
