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
        $models = array();
        $token = "9110d0c7b73a4ecf344672c185181b36";
        $keywords = explode(',', $lesson->keywords);

        foreach ($keywords as $keyword) {
            $keyword = trim($keyword);
            $url = "https://api.thingiverse.com/tags/$keyword/things?access_token=$token";
            $request = @file_get_contents($url);

            if ($request) {
                $response = json_decode($request);

                // Models found
                $models = $response;
            }
        }

        return view('lessons.show')
            ->with('lesson', $lesson)
            ->with('models', $models);
    }
}
