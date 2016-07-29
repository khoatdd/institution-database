<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AssessorPrimaryDataValue extends Model
{
    public function assessor()
    {
        return $this->belongsTo('App\Assessor');
    }
}
