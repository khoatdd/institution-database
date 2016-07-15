<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sar extends Model
{
    protected $excludedColumn = ['id', 'institution_id'];
	public function getExcludedColumn(){
		return $this->excludedColumn;
	}
    public function institution() {
    	return $this->belongsTo(Institution::class);
    }

    public function staffAndLecturer(){
    	return $this->hasOne(StaffAndLecturer::class);
    }

    public function introduction () {
        return $this->hasOne(Introduction::class);
    }
}
