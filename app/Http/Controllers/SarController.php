<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Response;
use Input;
use DB;
use App\Sar;
use App\SarPrimaryDataList;
use App\SarPrimaryDataValue;
use App\Institution;
use Illuminate\Http\Request;

use App\Http\Requests;

class SarController extends Controller
{
    public function index(Institution $institution)
    {
        // $sars = $institution->sarPrimaryDataValue()->where('sar_primary_data_list_id',14)->orWhere('sar_primary_data_list_id',15)->groupBy('sar_id')->get(['value','sar_id']);
        /* --- Select id of records in sar_primary_data_lists table that have alias "period_start" and "period_end" --- */
        $arrayId = DB::table('sar_primary_data_lists')->where('alias', 'like', 'period_start')->orWhere('alias', 'like', 'period_end')->lists('id');
        /* --- Select all records in sar_primary_data_values that its sar_primary_data_list_id is in $arryayID and group by sar_id --- */
        $sars = $institution->sarPrimaryDataValue()->whereIn('sar_primary_data_list_id', $arrayId)->get(['value', 'sar_id'])->groupBy('sar_id');
        return view('sar.list', compact('institution', 'sars'));
    }

    public function show(Institution $institution, Sar $sar)
    {
        $sar->with('institution')->get()->first();
        $institution = $institution->with('sars')->get()->first();
        return view('sar.show.index', compact('institution', 'sar'));
    }

    public function insert(Institution $institution)
    {
        // $titles = Title::all();
        /*--- Section 1 ---*/
        $sectionOnePrimaryDataList = SarPrimaryDataList::where('section_id', 1)->orderBy('order', 'asc')->get(['name', 'alias']);
        // return $sectionOnePrimaryDataList[0]->alias;
        return view('sar.insert.index', compact(
            'institution',
            'sectionOnePrimaryDataList'
        ));
    }

    public function addSar(Institution $institution, Request $request)
    {
        $sar = new Sar;
        $insertSar = $institution->sars()->save($sar);
        /*--- Handle Section 1 Primary Data ---*/
        $sectionOnePrimaryDataList = SarPrimaryDataList::where('section_id', 1)->orderBy('order', 'asc')->get(['id', 'alias']);
        $test = array();
        foreach ($sectionOnePrimaryDataList as $field) {
            $primaryDataValue = new SarPrimaryDataValue;
            $primaryDataValue->sar_primary_data_list_id = $field->id;
            $formField = 'primary_data-section_1-' . $field->alias;
            $primaryDataValue->value = $request->$formField;
            $test[] = $request->$formField;
            $sar->PrimaryDataValue()->save($primaryDataValue);
        }
//        return $test;
//        $sarColumns = DB::connection()->getSchemaBuilder()->getColumnListing("sars");
//        $request->all();
//        return $sar;
//        $introduction = new Introduction;
//        $introductionColumns = DB::connection()->getSchemaBuilder()->getColumnListing("introductions");
//        $introductionExcludedColumns = $introduction->getExcludedColumns();
//        $introductionSpecialHandlingColumns = $introduction->getSpecialHandlingColumns();
//        foreach ($introductionColumns as $column) {
//            if (!in_array($column, $introductionExcludedColumns) && !in_array($column, $introductionSpecialHandlingColumns)) {
//                $introduction->$column = $request->$column;
//            }
//        }
        $destinationPath = 'uploads';
        /*--- Handling file upload ---*/
//         if (Input::file('organizational_structure_file_url')->isValid() && Input::file('key_staff_file_url')->isValid() && Input::file('faculty_list_file_url')->isValid()) {
//             $organizationalStructureFileUrlFileName = Input::file('organizational_structure_file_url')->getClientOriginalName();
//             Input::file('organizational_structure_file_url')->move($destinationPath, $organizationalStructureFileUrlFileName);
//             $introduction->organizational_structure_file_url = '/'.$destinationPath.'/'.$organizationalStructureFileUrlFileName;
//             $keyStaffFileUrlFileName = Input::file('key_staff_file_url')->getClientOriginalName();
//             Input::file('key_staff_file_url')->move($destinationPath, $keyStaffFileUrlFileName);
//             $introduction->key_staff_file_url = '/'.$destinationPath.'/'.$keyStaffFileUrlFileName;
//             $facultyListFileUrlFileName = Input::file('faculty_list_file_url')->getClientOriginalName();
//             Input::file('faculty_list_file_url')->move($destinationPath, $facultyListFileUrlFileName);
//             $introduction->faculty_list_file_url  = '/'.$destinationPath.'/'.$facultyListFileUrlFileName;
//         }
//         else {
//             return Input::file('organizational_structure_file_url')->getErrorMessage();
//         }
//         $insertIntroduction = $sar->introduction()->save($introduction);
//         return $introduction;
//         // $filePath = $destinationPath.'\\'.$organizational_structure_file_url_file_name;
//         return Response::make(file_get_contents($filePath), 200, [
//             'Content-Type' => 'application/pdf',
//             'Content-Disposition' => 'inline; filename="' . $organizational_structure_file_url_file_name . '"'
//         ]);
//         if ($insertSar) {
//             return $sar;
//         } else {
//             return 'Failed';
//         }
//
//        $titles = Title::all();
//        $columns = DB::connection()->getSchemaBuilder()->getColumnListing("staff_and_lecturers_child_table1s");
//        $staffAndLecturersChildTable1 = new StaffAndLecturersChildTable1();
//        $staffAndLecturersChildTable1->gender = 'Nam';
//        $staffAndLecturersChildTable1->can_bo_trong_bien_che = Request::get('III17_can_bo_trong_bien_che_m');
//        return $staffAndLecturersChildTable1;
//        foreach ($titles as $title) {
//            $staff_and_lecturers_child_table_2 = new Staff_and_lecturers_child_table_2();
//            $staff_and_lecturers_child_table_2->staff_and_lecturer_id = Session::get('info.staff_and_lecturer_id');
//            $staff_and_lecturers_child_table_2->title_id = $title->id;
//            foreach ($columns as $column) {
//                $field = 'III18_' . $title->id . '_' . $column;
//                if ($request->$field != '' || $request->$field != null) {
//                    $staff_and_lecturers_child_table_2->$column = $request->$field;
//                }
//            }
//            if (!$staff_and_lecturers_child_table_2->save()) {
//                $check = false;
//            }
//        }

    }

    public function check()
    {
        flash()->overlay('Flash','Flash worked');
        return view('welcome');
    }
}