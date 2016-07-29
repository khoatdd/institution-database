<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AssessorPrimaryDataValue;

class Assessor extends Model
{
    public function assessorPrimaryDataValues()
    {
        return $this->hasMany(AssessorPrimaryDataValue::class);
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function secondaryDataValues()
    {
        return $this->hasMany('App\AssessorSecondaryDataValue');
    }

    public function primaryDataValues()
    {
        return $this->hasMany('App\AssessorPrimaryDataValue');
    }
}
