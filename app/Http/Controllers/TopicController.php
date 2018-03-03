<?php

/**
 * Topic Controller
 *
 * @subpackage  Http\Controllers
 */

namespace app;

use Alert;
use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Input;
use Redirect;
use Validator;
use app\Models\Topic;

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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('topics.overview')
            ->with('topics', Topic::all());
    }

    /**
     * Display the specified resource.
     *
     * @param \app\Models\Subject $subject The Subject to display
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        return view('topics.show')
            ->with('topic', $topic);
    }
}
