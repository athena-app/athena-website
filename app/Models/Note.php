<?php
/**
 * Note Model
 */

namespace App;

use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Note extends Model
{
    use Favoriteable, SoftDeletes;

    /**
     * Return the Subject that the Topic instance is assigned to.
     */
    public function team() {
        return $this->belongsTo(Team::class);
    }

    //TODO
}
