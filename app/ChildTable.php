<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildTable extends Model
{
    public function horizontalAttributes()
    {
        return $this->hasMany('App\HorizontalAttribute');
    }
}
