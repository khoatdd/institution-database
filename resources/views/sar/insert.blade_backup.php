@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row">
			<form action="/institution/{{ $institution->id }}/sar/addSar" id="form-thongtinchung" method="POST" class="form-horizontal" role="form">
				{{ csrf_field() }}
	            <table class="table table-hover" border="0">
	                <tbody>
	                    <tr>
	                        <td style="text-align:left" colspan="2" class="col-md-3"><b>1. Tên đầy đủ của trường</b></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
	                        <td ><input type="text" class="form-control col-md-9" name ="I1a"></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
	                        <td ><input type="text" class="form-control col-md-9" name ="EN_full_name"></td>
	                    </tr>
	                    <tr>
	                        <td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
	                        <td ><input type="text" class="form-control col-md-9" name="VN_short_name"></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
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
	                        <td style="vertical-align:middle;" class="col-md-3">Điện thoại</td>
	                        <td ><input type="text" class="form-control col-md-9" name="phone_number"></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Fax</td>
	                        <td ><input type="text" class="form-control col-md-9" name="fax"></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Email</td>
	                        <td ><input type="text" class="form-control col-md-9" name="email"></td>
	                    </tr>
	                    <tr>
	                        <td style="vertical-align:middle;" class="col-md-3">Website</td>
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
	                        <td style="vertical-align:middle; text-align:left" class="col-md-2"><b>10. Loại hình trường đào tạo</b></td>
	                        <td style="vertical-align:middle; text-align:left" class="col-md-9" >
	                            <div class="row">
	                                <div class="col-md-2">
	                                    <div class="radio radio-danger">
	                                        <input type="radio" name="type" id="radio_1a" value="CongLap" checked="checked">
	                                        <label for="radio_1a">Công lập</label>
	                                    </div>
	                                </div>
	                                <div class="col-md-2">
	                                    <div class="radio radio-danger">
	                                        <input type="radio" name="type" id="radio_1b" value="BanCong">
	                                        <label for="radio_1b">Bán công</label>
	                                    </div>
	                                </div>
	                                <div class="col-md-2">
	                                    <div class="radio radio-danger">
	                                        <input type="radio" name="type" id="radio_1c" value="DanLap">
	                                        <label for="radio_1c">Dân lập</label>
	                                    </div>
	                                </div>
	                                <div class="col-md-2">
	                                    <div class="radio radio-danger">
	                                        <input type="radio" name="type" id="radio_1d" value="TuThuc">
	                                        <label for="radio_1d">Tư thục</label>
	                                    </div>
	                                </div>
	                                <div class="col-md-2">
	                                    <div class="radio radio-danger">
	                                        <input type="radio" name="type" id="radio_1e" value="Khac">
	                                        <label for="radio_1e">Khác</label>
	                                    </div>
	                                </div>
	                                <div class="col-md-2">
	                                    <input type="text" class="form-control" name="I10_khac" style="display:none;">
	                                </div>
	                            </div>
	                        </td>
	                    </tr>
	                </tbody>
	            </table>
	            <div class="form-group">
	                <table class="table table-striped table-hover" border="1">
	                    <thead>
	                          <tr>
	                            <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
	                            <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ, học vị, chức danh</th>
	                            <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng giảng viên</th>
	                            <th colspan="3" scope="col" style="text-align:center; vertical-align:middle">Giảng viên cơ hữu</th>
	                            <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên thỉnh giảng trong nước</th>
	                            <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quốc tế</th>
	                          </tr>
	                          <tr>
	                            <th scope="col" style="text-align:center; vertical-align:middle">GV trong biên chế trực tiếp giảng dạy</th>
	                            <th scope="col" style="text-align:center; vertical-align:middle">GV hợp đồng dài hạn  trực tiếp giảng dạy</th>
	                            <th scope="col" style="text-align:center; vertical-align:middle">Giảng viên kiêm nhiệm là cán bộ quản lý</th>
	                           </tr>
	                    </thead>
	                    <tbody>
	                        <tr>
	                            <td class="text-center">(1)</td>
	                            <td class="text-center">(2)</td>
	                            <td class="text-center">(3)</td>
	                            <td class="text-center">(4)</td>
	                            <td class="text-center">(5)</td>
	                            <td class="text-center">(6)</td>
	                            <td class="text-center">(7)</td>
	                            <td class="text-center">(8)</td>
	                        </tr>
	                        <?php $n =1; ?>
	                        @foreach ( $titles as $title)
								<tr>
									<td class="text-center">{{ $n }}</td>
									<td>{{ $title->name }} <input type="hidden" name="III18_{{ $title->id }}_title_id" value="{{ $title->id }}"></td>
									<td><input type="text" class="form-control" name="III18_{{ $title->id }}_so_luong_gv" value="" placeholder=""></td>
									<td><input type="text" class="form-control" name="III18_{{ $title->id }}_gv_trong_bien_che_truc_tiep_giang_day" value="" placeholder=""></td>
									<td><input type="text" class="form-control" name="III18_{{ $title->id }}_gv_hop_dong_dai_han_truc_tiep_giang_day" value="" placeholder=""></td>
									<td><input type="text" class="form-control" name="III18_{{ $title->id }}_gv_kiem_nhiem_la_can_bo_quan_ly" value="" placeholder=""></td>
									<td><input type="text" class="form-control" name="III18_{{ $title->id }}_gv_thinh_giang_trong_nuoc" value="" placeholder=""></td>
									<td><input type="text" class="form-control" name="III18_{{ $title->id }}_gv_quoc_te" value="" placeholder=""></td>
								</tr>
								<?php $n++; ?>
	                        @endforeach
	                    </tbody>
	                </table>
	            </div>
	            <div class="pull-right">
	            	<button type="submit" class="btn btn-primary">Add</button>
	            </div>
	        </form>
		</div>
	</div>
@stop

