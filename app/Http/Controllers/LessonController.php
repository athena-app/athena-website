<?php

/**
 * Lesson Controller
 *
 * @subpackage  Http\Controllers
 */

namespace App\Http\Controllers;

use App\Lesson;
use App\Subtopic;

class LessonController extends Controller
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
     * @param \app\Models\Lesson $lesson The Lesson to display
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('lessons.show')
            ->with('lesson', $lesson);
    }
}
