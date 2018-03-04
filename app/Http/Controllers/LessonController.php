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
        $keywords = explode(',', $lesson->keywords);

        foreach ($keywords as $keyword) {
            if (count($models) < 4) {
                $keyword = trim($keyword);
                $url = "https://api.sketchfab.com/v3/search?type=models&q=$keyword";
                $request = @file_get_contents($url);

                if ($request) {
                    $response = json_decode($request);
                    foreach($response->results as $model) {
                        array_push($models, $model);
                        break;
                    }
                }
            }
            else {
                break;
            }
        }

        return view('lessons.show')
            ->with('lesson', $lesson)
            ->with('models', $models);
    }
}
