<?php

namespace App\Http\Controllers;

use Response;
use Input;
use App\Introduction;
use Session;
use DB;
use App\StaffAndLecturer;
use App\StaffAndLecturersChildTable2;
use App\StaffAndLecturersChildTable1;
use App\Title;
use App\Sar;
use App\Institution;
use Illuminate\Http\Request;

use App\Http\Requests;

class SarController extends Controller
{
    public function index(Institution $institution)
    {
        $sars = $institution->sars;
        return view('sar.list', compact('sars', 'institution'));
    }

    public function show(Institution $institution, Sar $sar)
    {
        $sar->with('institution')->get()->first();
        $institution = $institution->with('sars')->get()->first();
        return view('sar.show.index', compact('institution', 'sar'));
    }

    public function insert(Institution $institution)
    {
        $titles = Title::all();
        return view('sar.insert.index', compact('institution', 'titles'));
    }

    public function addSar(Institution $institution, Request $request)
    {
        $sar = new Sar;
        $sarColumns = DB::connection()->getSchemaBuilder()->getColumnListing("sars");
        $sarExcludedColumns = $sar->getExcludedColumn();
        foreach ($sarColumns as $column) {
            if (!in_array($column, $sarExcludedColumns)) {
                $sar->$column = $request->$column;
            }
        }
        $insertSar = $institution->sars()->save($sar);

        $introduction = new Introduction;
        $introductionColumns = DB::connection()->getSchemaBuilder()->getColumnListing("introductions");
        $introductionExcludedColumns = $introduction->getExcludedColumns();
        $introductionSpecialHandlingColumns = $introduction->getSpecialHandlingColumns();
        foreach ($introductionColumns as $column) {
            if (!in_array($column, $introductionExcludedColumns) && !in_array($column, $introductionSpecialHandlingColumns)) {
                $introduction->$column = $request->$column;
            }
        }
        $destinationPath = 'uploads';
        /*--- Handling file upload ---*/
        // if (Input::file('organizational_structure_file_url')->isValid() && Input::file('key_staff_file_url')->isValid() && Input::file('faculty_list_file_url')->isValid()) {
        //     $organizationalStructureFileUrlFileName = Input::file('organizational_structure_file_url')->getClientOriginalName();
        //     Input::file('organizational_structure_file_url')->move($destinationPath, $organizationalStructureFileUrlFileName);
        //     $introduction->organizational_structure_file_url = '/'.$destinationPath.'/'.$organizationalStructureFileUrlFileName;
        //     $keyStaffFileUrlFileName = Input::file('key_staff_file_url')->getClientOriginalName();
        //     Input::file('key_staff_file_url')->move($destinationPath, $keyStaffFileUrlFileName);
        //     $introduction->key_staff_file_url = '/'.$destinationPath.'/'.$keyStaffFileUrlFileName;
        //     $facultyListFileUrlFileName = Input::file('faculty_list_file_url')->getClientOriginalName();
        //     Input::file('faculty_list_file_url')->move($destinationPath, $facultyListFileUrlFileName);
        //     $introduction->faculty_list_file_url  = '/'.$destinationPath.'/'.$facultyListFileUrlFileName;
        // }
        // else {
        //     return Input::file('organizational_structure_file_url')->getErrorMessage();
        // }
        // $insertIntroduction = $sar->introduction()->save($introduction);
        // return $introduction;
        // // $filePath = $destinationPath.'\\'.$organizational_structure_file_url_file_name;
        // return Response::make(file_get_contents($filePath), 200, [
        //     'Content-Type' => 'application/pdf',
        //     'Content-Disposition' => 'inline; filename="' . $organizational_structure_file_url_file_name . '"'
        // ]);
        // if ($insertSar) {
        //     return $sar;
        // } else {
        //     return 'Failed';
        // }

        $titles = Title::all();
        $columns = DB::connection()->getSchemaBuilder()->getColumnListing("staff_and_lecturers_child_table1s");
        $staffAndLecturersChildTable1 = new StaffAndLecturersChildTable1();
        $staffAndLecturersChildTable1->gender = 'Nam';
        $staffAndLecturersChildTable1->can_bo_trong_bien_che = Request::get('III17_can_bo_trong_bien_che_m');
        return $staffAndLecturersChildTable1;
        foreach ($titles as $title) {
            $staff_and_lecturers_child_table_2 = new Staff_and_lecturers_child_table_2();
            $staff_and_lecturers_child_table_2->staff_and_lecturer_id = Session::get('info.staff_and_lecturer_id');
            $staff_and_lecturers_child_table_2->title_id = $title->id;
            foreach ($columns as $column) {
                $field = 'III18_' . $title->id . '_' . $column;
                if ($request->$field != '' || $request->$field != null) {
                    $staff_and_lecturers_child_table_2->$column = $request->$field;
                }
            }
            if (!$staff_and_lecturers_child_table_2->save()) {
                $check = false;
            }
        }

    }

    public function check()
    {
        return view('welcome');
    }
}