<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Show the application splash screen.
     *
     * @return Response
     */
    public function overview()
    {
        return view('favorites');
    }
}
