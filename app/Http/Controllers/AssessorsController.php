<?php

namespace App\Http\Controllers;

use App\AssessorPrimaryDataValue;
use App\AssessorSecondaryDataValue;
use Illuminate\Http\Request;

use App\Http\Requests;
use Mockery\CountValidator\Exception;

class AssessorsController extends Controller
{
    /**
     * AssessorsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List all assessors
     */
    public function index()
    {
        return view('assessors.index');
    }

    public function create()
    {
        return view('assessors.create');
    }

    /**
     * Store new created assessor to database
     * @param Request $request
     * @return Request
     */
    public function store(Request $request)
    {
//        if(\Request::ajax()) {
            /* ---Validation--- */
        $preRules = \App\AssessorPrimaryDataList::select('alias','required')->whereNotNull('required')->get()->keyBy('alias')->toArray();
        $rule = array();
        foreach ($preRules as $preRule)
        {
            $rule[$preRule['alias']] = $preRule['required'];
        }
            $this->validate($request, $rule);
//        /* convert all empty input to null*/
//        foreach ($request->all() as $key => $value){
//            if ($value === "") {
//                $request[$key] = null;
//            }
//        }
//            \DB::beginTransaction();
            $check = true;
            $assessorId =  \Auth::user()->assessor->id;
            /*--- Store primary data ---*/
            $primaryDataList = \App\AssessorPrimaryDataList::select('id','alias','required')->orderBy('order','asc')->get();
            foreach ($primaryDataList as $primaryData) {
                $primaryValue = new AssessorPrimaryDataValue;
                $primaryValue->assessor_primary_data_list_id = $primaryData['id'];
                echo $primaryData->alias;
                echo $primaryData->required;
                if ($primaryData->required === 1) {
                    $primaryValue->value = $request->$primaryData['alias'] !== null || $request->$primaryData['alias'] != "" ? $request->$primaryData['alias'] : null;
//                    if ($request->$primaryData['alias'] !== null || $request->$primaryData['alias'] != "") {
//                        throw new Exception('Required field must be filled in');
//                    }
                } else {
                    $primaryValue->value = $request->$primaryData['alias'] !== null || $request->$primaryData['alias'] != "" ? $request->$primaryData['alias'] : "";
                }
                echo $primaryValue->value;
                $primaryValue->assessor_id = $assessorId;
                if (!$primaryValue->save()) {
                    $check = false;
                }
            }
//            if ($check) { \DB::commit(); } else { \DB::rollBack(); }
            /*--- Store secondary data ---*/
            $module = 'assessor';
            $section = new \App\Section;

            /*--- Section Trình độ chuyên môn nghiệp vụ*/
            $sectionAlias = 'trinh_do_chuyen_mon_nghiep_vu';

            /*--- Store chuyên ngành thạc sĩ ---*/
            $childTableAlias = 'chuyen_nganh_dao_tao_thac_si';
            $horizontalAttributes = $section->getHorizontalAttributesOfChildTable($module, $sectionAlias, $childTableAlias);
            $countTrinhDoThacSi = $request->count_trinh_do_thac_si;
//            $this->storeSecondaryDataValue($assessorId, $countTrinhDoThacSi, $horizontalAttributes, $request);
            /*--- Store chuyên ngành thạc sĩ ---*/


            /*--- Store chuyên ngành tiến sĩ ---*/
            $childTableAlias = 'chuyen_nganh_dao_tao_tien_si';
            $horizontalAttributes = $section->getHorizontalAttributesOfChildTable($module, $sectionAlias, $childTableAlias);
            $countTrinhDoTienSi = $request->count_trinh_do_tien_si;
//            $this->storeSecondaryDataValue($assessorId, $countTrinhDoTienSi, $horizontalAttributes, $request);
            /*--- Store chuyên ngành tiến sĩ ---*/

            /*--- Store trình độ ngoại ngữ ---*/
            $childTableAlias = 'trinh_do_ngoai_ngu';
            $horizontalAttributes = $section->getHorizontalAttributesOfChildTable($module, $sectionAlias, $childTableAlias);
            $countTrinhDoNgoaiNgu = $request->count_trinh_do_ngoai_ngu;
//            $this->storeSecondaryDataValue($assessorId, $countTrinhDoNgoaiNgu, $horizontalAttributes, $request);
            /*--- Store trình độ ngoại ngữ ---*/

            /*--- Section Quá trình công tác ---*/
            $sectionAlias = 'qua_trinh_cong_tac';
            /*--- Store Quá trình công tác ---*/
            $childTableAlias = 'qua_trinh_cong_tac';
            $horizontalAttributes = $section->getHorizontalAttributesOfChildTable($module, $sectionAlias, $childTableAlias);
            $countQuaTrinhCongTac = $request->count_qua_trinh_cong_tac;
//            $this->storeSecondaryDataValue($assessorId, $countQuaTrinhCongTac, $horizontalAttributes, $request);

            /*--- Section Kinh nghiệm trong Đảm bảo và Kiểm định chất lượng ---*/
            $sectionAlias = 'kinh_nghiem_trong_dam_bao_va_kiem_dinh_chat_luong';
            /*--- Store Tham gia đánh giá ngoài ---*/
            $childTableAlias = 'tham_gia_danh_gia_ngoai';
            $horizontalAttributes = $section->getHorizontalAttributesOfChildTable($module, $sectionAlias, $childTableAlias);
            $countThamGiaDanhGiaNgoai = $request->count_tham_gia_danh_gia_ngoai;
//            $this->storeSecondaryDataValue($assessorId, $countThamGiaDanhGiaNgoai, $horizontalAttributes, $request);

//            return $horizontalAttributes;
        return $request->all();
//        }

    }

    /**
     * View single assessor information
     */
    public function show(\App\Assessor $assessors)
    {
        return $primaryDataList = \App\AssessorPrimaryDataList::select('id','alias','order')->orderBy('order','asc')->get()->keyBy('order');
        return \App\AssessorPrimaryDataValue::select('assessor_primary_data_list_id','value')->where('assessor_id', $assessors->id)->get()->keyBy('assessor_primary_data_list_id');
        $assessors->with('secondaryDataValues')->first()->secondaryDataValues->groupBy('horizontal_attribute_id');
        return view('assessors.show');
    }

    /**
     * Update existing assessor information
     */
    public function update()
    {

    }

    /**
     * Edit existing assessor infomation
     */
    public function edit()
    {

    }

    /**
     * Delete assessor
     */
    public function destroy()
    {

    }

    private function storeSecondaryDataValue($assessorId, $count, $horizontalAttributes, $request, $check)
    {
        if  (!$check) {
            return;
        }
        for ($i = 1; $i <= $count; $i++)
        {
            foreach($horizontalAttributes as $attribute)
            {
                $secondaryDataValue = new \App\AssessorSecondaryDataValue;
                $secondaryDataValue->assessor_id = $assessorId;
                $secondaryDataValue->horizontal_attribute_id = $attribute['id'];
                $fieldName = $attribute['alias'] . '_' . $i;
                if (is_array($request->$fieldName)) {
                    $temp = '';
                    foreach ($request->$fieldName as $value) {
                        $temp = $temp . $value . ', ';
                    }
                    $temp = trim($temp);
                    $temp = substr($temp, 0, -1);
                    $secondaryDataValue->value = $temp;
                } else {
                    $secondaryDataValue->value = $request->$fieldName;
                }

                if ($secondaryDataValue->value === null) {
                    continue;
                }

                if ($secondaryDataValue->value == "Khác") {
                    $newFieldName = 'ngoai_ngu_khac_'.$i;
                    $secondaryDataValue->value = $request->$newFieldName;
                }

                if (!$secondaryDataValue->save()) {
                    return false;
                } else {
                    return true;
                }
            }
        }
    }
}
