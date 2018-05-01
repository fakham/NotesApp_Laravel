<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Note;

class Page extends Model
{
    public function notes() {

        return $this->hasMany(Note::class);

    }
}
