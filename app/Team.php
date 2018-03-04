<?php

namespace App;

use Laravel\Spark\Team as SparkTeam;
use App\Note;

class Team extends SparkTeam
{
    public function notes() {
        return $this->hasMany(Note::class);
    }
}
