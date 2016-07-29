<div class="form-group">
    <div class="col-md-12">
        <table class="table table-hover" border="0">
            <tbody>
                <tr>
                    <td style="text-align:left" colspan="2" class="col-md-3"><b>1. Tên đầy đủ của trường</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Tên tiếng Việt</td>
                    <td >{{ $institution->name }} <input type="hidden" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[0]->alias }}" value="{{ $institution->name }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[1]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name ="primary_data-section_1-{{ $sectionOnePrimaryDataList[1]->alias }}"></td>
                </tr>
                <tr>
                    <td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[2]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[2]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[3]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[3]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>3. {{ $sectionOnePrimaryDataList[4]->name }}</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[4]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>4. {{ $sectionOnePrimaryDataList[5]->name }}</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[5]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>5. {{ $sectionOnePrimaryDataList[6]->name }}</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[6]->alias }}"></td>
                </tr>
                <tr>
                    <td style="text-align:left" colspan="2" class="col-md-3"><b>6. Thông tin liên hệ</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[7]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[7]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[8]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[8]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[9]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[9]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">{{ $sectionOnePrimaryDataList[10]->name }}</td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[10]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>7. {{ $sectionOnePrimaryDataList[11]->name }}</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[11]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>8. {{ $sectionOnePrimaryDataList[12]->name }}</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[12]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>9. {{ $sectionOnePrimaryDataList[13]->name }}</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[13]->alias }}"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>10. Giai đoạn thực hiện báo cáo</b></td>
                    <td class="vertical-middle">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label for="" class="control-label col-md-2" style="text-align: center!important;">{{ $sectionOnePrimaryDataList[14]->name }} </label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[14]->alias }}">
                            </div>
                            <label for="" class="control-label col-md-2" style="text-align: center!important;">{{ $sectionOnePrimaryDataList[15]->name }} </label>
                            <div class="col-md-4">
                                <input class="form-control" type="number" name="primary_data-section_1-{{ $sectionOnePrimaryDataList[15]->alias }}" value="">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>11. Loại hình trường đào tạo</b></td>
                    <td style="vertical-align:middle; text-align:left" class="col-md-9" >
                        <div class="row">
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1a"><input type="radio" name="primary_data-section_1-type" id="radio_1a" value="CongLap" checked="checked"> Công lập</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1b"><input type="radio" name="primary_data-section_1-type" id="radio_1b" value="BanCong"> Bán công</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1c"><input type="radio" name="primary_data-section_1-type" id="radio_1c" value="DanLap"> Dân lập</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1d"><input type="radio" name="primary_data-section_1-type" id="radio_1d" value="TuThuc"> Tư thục</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1e"><input type="radio" name="primary_data-section_1-type" id="radio_1e" value="Khac">Khác</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="primary_data-section_1-another_type" style="display:none;">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>