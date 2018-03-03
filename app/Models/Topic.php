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

class Topic extends Model
{
    use SoftDeletes;

    /**
     * Return the Subject that the Topic instance is assigned to.
     */
    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    //TODO
}
