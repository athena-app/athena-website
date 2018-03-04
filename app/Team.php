<?php

namespace App;

use Laravel\Spark\Team as SparkTeam;
use App\Note;

class Team extends SparkTeam
{
    public function notes() {
        return $thins->hasMany(Note::class);
    }
}
