<?php
/**
 * Subtopic Model
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subtopic extends Model
{
    use SoftDeletes;

    /**
     * Return the Topic that the Subtopic instance is assigned to.
     */
    public function topic() {
        return $this->belongsTo(Topic::class);
    }

    public function lessons() {
        return $this->hasMany(Lesson::class);
    }

    //TODO
}
