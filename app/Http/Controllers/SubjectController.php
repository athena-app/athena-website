<?php

/**
 * Subject Controller
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
use app\Models\Subject;

class SubjectController extends Controller
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
        return view('subjects.overview')
            ->with('subjects', Subject::all());
    }

    /**
     * Display the specified resource.
     *
     * @param \app\Models\Subject $subject The Subject to display
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        return view('subjects.show')
            ->with('subject', $subject);
    }
}
