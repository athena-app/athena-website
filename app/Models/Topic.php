<?php
/**
 * Topic Model
 */

namespace App;

use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Topic extends Model
{
    use Favoriteable, SoftDeletes;

    /**
     * Return the Subject that the Topic instance is assigned to.
     */
    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function subtopics() {
        return $this->hasMany(Subtopic::class);
    }

    //TODO
}
