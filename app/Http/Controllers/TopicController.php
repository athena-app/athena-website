<?php

/**
 * Topic Controller
 *
 * @subpackage  Http\Controllers
 */

namespace App\Http\Controllers;

use Redirect;
use App\Topic;

class TopicController extends Controller
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
     * @param \app\Models\Topic $topic The Topic to display
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        return view('topics.show')
            ->with('topic', $topic);
    }

    public function favorite(Topic $topic) {
        $topic->toggleFavorite();
        return Redirect::back();
    }
}
