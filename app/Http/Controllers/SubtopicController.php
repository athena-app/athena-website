<?php

/**
 * Subtopic Controller
 *
 * @subpackage  Http\Controllers
 */

namespace App\Http\Controllers;

use App\Subtopic;

class SubtopicController extends Controller
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
     * Display the specified resource.
     *
     * @param \app\Models\Subtopic $subtopic The Subtopic to display
     * @return \Illuminate\Http\Response
     */
    public function show(Subtopic $subtopic)
    {
        return view('subtopics.show')
            ->with('subtopic', $subtopic);
    }
}
