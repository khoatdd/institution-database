<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;

use App\Http\Requests;

class InstitutionController extends Controller
{
    public function addNew(Request $request) {
    	$institution = new Institution;
    	$institution->name = $request->VN_full_name;
    	$institution->save();
    	$request->session()->put('key', '1');
    	return back();
    }
}
