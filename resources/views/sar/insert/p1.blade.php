<div class="form-group">
    <div class="col-md-12">
        <table class="table table-hover" border="0">
            <tbody>
                <tr>
                    <td style="text-align:left" colspan="2" class="col-md-3"><b>1. Tên đầy đủ của trường</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Tên tiếng Việt</td>
                    <td >{{ $institution->name }}</td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Tên tiếng Anh</td>
                    <td ><input type="text" class="form-control col-md-9" name ="EN_full_name"></td>
                </tr>
                <tr>
                    <td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Tên tiếng Việt</td>
                    <td ><input type="text" class="form-control col-md-9" name="VN_short_name"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Tên tiếng Anh</td>
                    <td ><input type="text" class="form-control col-md-9" name="EN_short_name"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>3. Tên trước đây (nếu có)</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="former_name"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>4. Cơ quan/Bộ chủ quản</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="managing_agency"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>5. Địa chỉ trường</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="address"></td>
                </tr>
                <tr>
                    <td style="text-align:left" colspan="2" class="col-md-3"><b>6. Thông tin liên hệ</b></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Điện thoại</td>
                    <td ><input type="text" class="form-control col-md-9" name="phone_number"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Fax</td>
                    <td ><input type="text" class="form-control col-md-9" name="fax"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Email</td>
                    <td ><input type="text" class="form-control col-md-9" name="email"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; padding-left:30px" class="col-md-3">Website</td>
                    <td ><input type="text" class="form-control col-md-9" name="website"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>7. Năm thành lập trường</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="establish_year"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>8. Thời gian bắt đầu đào tạo khóa I</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="first_course_year"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>9. Thời gian cấp bằng tốt nghiệp cho khóa I</b></td>
                    <td ><input type="text" class="form-control col-md-9" name="first_graduation_year"></td>
                </tr>
                <tr>
                    <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>10. Giai đoạn thực hiện báo cáo</b></td>
                    <td class="vertical-middle">
                        <div class="form-group" style="margin-bottom: 0;">
                            <label for="" class="control-label col-md-2" style="text-align: center!important;">từ năm </label>
                            <div class="col-md-4">
                                <input type="number" class="form-control" name="period_start">
                            </div>
                            <label for="" class="control-label col-md-2" style="text-align: center!important;">đến năm </label>
                            <div class="col-md-4">
                                <input class="form-control" type="number" name="period_end" value="">
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
                                    <label for="radio_1a"><input type="radio" name="type" id="radio_1a" value="CongLap" checked="checked"> Công lập</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1b"><input type="radio" name="type" id="radio_1b" value="BanCong"> Bán công</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1c"><input type="radio" name="type" id="radio_1c" value="DanLap"> Dân lập</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1d"><input type="radio" name="type" id="radio_1d" value="TuThuc"> Tư thục</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="radio">
                                    <label for="radio_1e"><input type="radio" name="type" id="radio_1e" value="Khac">Khác</label>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" name="another_type" style="display:none;">
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>