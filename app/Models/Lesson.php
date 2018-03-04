<?php
/**
 * Lesson Model
 */

namespace App;

use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use SoftDeletes;

    /**
     * Return the Subject that the Topic instance is assigned to.
     */
    public function subtopic() {
        return $this->belongsTo(Subtopic::class);
    }

    //TODO
}
