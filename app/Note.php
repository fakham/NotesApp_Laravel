<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Page;

class Note extends Model
{
    protected $fillable = ['text'];

    public function page() {

        return $this->belogesTo(Page::class);

    }
}
