<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SarPrimaryDataValue extends Model
{
    public function sarPrimaryDataLists() {
    	return $this->hasMany(SarPrimaryDataList::class);
    }
}
