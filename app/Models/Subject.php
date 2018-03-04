<?php
/**
 * Subject Model
 */

namespace App;

use Auth;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use ChristianKuri\LaravelFavorite\Traits\Favoriteable;

class Subject extends Model
{
    use Favoriteable, SoftDeletes;

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    //TODO
}
