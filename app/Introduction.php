<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Introduction extends Model
{
    protected $excludedColumns = ['id', 'sar_id'];
    protected $specialHandlingColumns = ['organizational_structure_file_url','key_staff_file_url', 'faculty_list_file_url'];

    public function getExcludedColumns (){
    	return $this->excludedColumns;
    }

    public function getSpecialHandlingColumns (){
    	return $this->specialHandlingColumns;
    }

    public function sar () {
    	return $this->belongsTo(Sar::class);
    }
}
