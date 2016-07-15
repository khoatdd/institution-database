<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StaffAndLecturer extends Model
{
    public function sar() {
    	return $this->belongsTo(Sar::class);
    }

    public function staffAndLecturersChildTable2() {
    	return $this->hasOne(StaffAndLecturersChildTable2::class);
    }
}
