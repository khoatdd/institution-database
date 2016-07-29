@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => ['AssessorsController@store'], 'class'=> 'form form-horizontal', 'id' => 'create-assessor-form']) !!}
            <div class="form-group">
                <h1>Thông tin cá nhân</h1>
            </div>
            <div class="form-group">
                {!! Form::label('ho_va_ten_dem', 'Họ và tên đệm', ['class' => 'control-label col-md-3']) !!}
                <div class="col-md-5">
                {!! Form::text('ho_va_ten_dem', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('ten', 'Tên', ['class' => 'control-label col-md-3']) !!}
                <div class="col-md-5">
                    {!! Form::text('ten', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('ngay_sinh', 'Ngày sinh', ['class' => 'control-label col-md-3']) !!}
                <div class="col-md-5">
                    {!! Form::text('ngay_sinh', null, ['class' => 'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::label('gioi_tinh', 'Giới tính', ['class' => 'control-label col-md-3']) !!}
                <div class="col-md-5">
                    <label class="radio-inline">
                       {!! Form::radio('gioi_tinh','Nam') !!} Nam
                    </label>
                    <label class="radio-inline">
                        {!! Form::radio('gioi_tinh','Nữ') !!} Nữ
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="que_quan" class="control-label col-md-3">Quê quán</label>
                <div class="col-md-5">
                    <input type="text" name="que_quan" id="que_quan" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="noi_cong_tac" class="control-label col-md-3">Nơi công tác</label>
                <div class="col-md-5">
                    <input type="text" name="noi_cong_tac" id="noi_cong_tac" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="tham_nien_cong_tac" class="control-label col-md-3">Thâm niên công tác</label>
                <div class="col-md-5">
                    <input type="number" name="tham_nien_cong_tac" id="tham_nien_cong_tac" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <h1>Thông tin liên lạc</h1>
            </div>
            <div class="form-group">
                <label for="dia_chi_lien_he" class="control-label col-md-3">Địa chỉ liên hệ</label>
                <div class="col-md-5">
                    <input type="text" name="dia_chi_lien_he" id="dia_chi_lien_he" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="dien_thoai_co_dinh" class="control-label col-md-3">Điện thoại cố định</label>
                <div class="col-md-5">
                    <input type="text" name="dien_thoai_co_dinh" id="dien_thoai_co_dinh" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="dien_thoai_di_dong" class="control-label col-md-3">Điện thoại di động</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="dien_thoai_di_dong" value="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="email_lien_he" class="control-label col-md-3">Email liên hệ</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="email_lien_he" value="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="fax" class="control-label col-md-3">Fax</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="fax" value="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <h1>Trình độ chuyên môn, nghiệp vụ</h1>
            </div>
            <div class="form-group">
                <label for="chuc_danh" class="control-label col-md-3">Chức danh</label>
                <div class="col-md-5">
                    <input type="text" name="chuc_danh" id="chuc_danh" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="hoc_vi" class="control-label col-md-3">Học vị</label>
                <div class="col-md-5">
                    <input type="text" name="hoc_vi" id="hoc_vi" class="form-control" value="" >
                </div>
            </div>
            <div class="form-group">
                <label for="linh_vuc_chuyen_mon" class="control-label col-md-3">Lĩnh vực chuyên môn</label>
                <div class="col-md-5">
                    <select name="linh_vuc_chuyen_mon" id="linh_vuc_chuyen_mon" class="form-control" >
                        <option value="">Select</option>
                        <option value="1">A</option>
                        <option value="2">B</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-md-3" for="chuyen_nganh_thac_si">Chuyên ngành thạc sĩ (*)</label>
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped table-hover table-bordered" id="trinh-do-thac-si-table">
                        <tr class="success">
                            <td align="center">STT</td>
                            <td align="center">Chuyên ngành đào tạo thạc sĩ</td>
                            <td align="center">Nơi đào tạo thạc sĩ</td>
                            <td align="center">Năm cấp bằng</td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center"><input type="text" align="center" class="form-control"
                                                      placeholder="Chuyên ngành đào tạo" name="chuyen_nganh_thac_si_1"></td>
                            <td align="center"><input type="text" align="center" class="form-control" placeholder="Nơi đào tạo"
                                                      name="noi_dao_tao_thac_si_1"></td>
                            <td align="center"><input type="text" align="center" class="form-control" placeholder="Năm cấp bằng"
                                                      name="nam_cap_bang_thac_si_1"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1 col-md-offset-1">
                    <button class="btn btn-primary btn-sm" type="button" id="them-trinh-do-thac-si">Thêm</button>
                </div>
                <input type="hidden" name="count_trinh_do_thac_si" id="count-trinh-do-thac-si" value="1">
            </div> <!-- Chuyên ngành thạc sĩ -->

            <div class="form-group">
                <label class="control-label col-md-3" for="chuyen_nganh_tien_si">Chuyên ngành thạc sĩ (*)</label>
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped table-hover table-bordered" id="trinh-do-tien-si-table">
                        <tr class="success">
                            <td align="center">STT</td>
                            <td align="center">Chuyên ngành đào tạo tiến sĩ</td>
                            <td align="center">Nơi đào tạo tiến sĩ</td>
                            <td align="center">Năm cấp bằng</td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center"><input type="text" align="center" class="form-control"
                                                      placeholder="Chuyên ngành đào tạo" name="chuyen_nganh_tien_si_1"></td>
                            <td align="center"><input type="text" align="center" class="form-control" placeholder="Nơi đào tạo"
                                                      name="noi_dao_tao_tien_si_1"></td>
                            <td align="center"><input type="text" align="center" class="form-control" placeholder="Năm cấp bằng"
                                                      name="nam_cap_bang_tien_si_1"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-1 col-md-offset-1">
                    <button class="btn btn-primary btn-sm" type="button" id="them-trinh-do-tien-si">Thêm</button>
                </div>
                <input type="hidden" name="count_trinh_do_tien_si" id="count-trinh-do-tien-si" value="1">
            </div> <!-- Chuyên ngành tiến sĩ -->

            <div class="form-group">
                <label for="chung_chi_kiem_dinh_vien" class="control-label col-md-3">Chứng chỉ kiểm định viên</label>
                <div class="col-md-9">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="chung_chi_kiem_dinh_vien" value="1">
                            Có
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="chung_chi_kiem_dinh_vien" value="0">
                            Không
                        </label>
                    </div>
                </div>
                <label for="so_chung_chi" class="control-label col-md-2 col-md-offset-1">Số chứng chỉ</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="so_chung_chi" value="" disabled="disabled">
                </div>
                <label for="ngay_cap" class="control-label col-md-1">Ngày cấp</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="ngay_cap_chung_chi" value=""  disabled="disabled">
                </div>
            </div>
            <div class="form-group">
                <label for="the_kiem_dinh_vien" class="control-label col-md-3">Thẻ kiểm định viên</label>
                <div class="col-md-9">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="the_kiem_dinh_vien" value="1" >
                            Có
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="the_kiem_dinh_vien" value="0" >
                            Không
                        </label>
                    </div>
                </div>
                <label for="so_the_kiem_dinh_vien" class="control-label col-md-2 col-md-offset-1">Số chứng chỉ</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="so_the_kiem_dinh_vien" value="" disabled="disabled">
                </div>
                <label for="ngay_cap_the_kiem_dinh_vien" class="control-label col-md-1">Ngày cấp</label>
                <div class="col-md-3">
                    <input type="text" class="form-control" name="ngay_cap_the_kiem_dinh_vien" value="" disabled="disabled">
                </div>
            </div>
            <div class="trinh_do_ngoai_ngu form-group">
                <label class="control-label col-md-3" for="trinh_do_ngoai_ngu">Trình độ ngoại ngữ (*)</label>
                <div class="col-md-10 col-md-offset-1">
                    <table class="table table-striped table-hover table-bordered" id="trinh-do-ngoai-ngu-table" cellpadding="2" cellspacing="0">
                        <tr class="success">
                            <td width="40" style="text-align:center">STT</td>
                            <td width="100" style="text-align:center">Ngoại ngữ</td>
                            <td width="100" style="text-align:center">Nghe</td>
                            <td width="100" style="text-align:center">Nói</td>
                            <td width="100" style="text-align:center">Đọc</td>
                            <td width="100" style="text-align:center">Viết</td>

                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center">
                                <select name="ngoai_ngu_1" class="ngoaingu1 form-control">
                                    <option value="0">Chọn ngôn ngữ</option>
                                    <option value="Anh">Tiếng Anh</option>
                                    <option value="Pháp">Tiếng Pháp</option>
                                    <option value="Nga">Tiếng Nga</option>
                                    <option value="Đức">Tiếng Đức</option>
                                    <option value="Khác">Ngoại ngữ khác</option>

                                </select>
                                <input hidden type="text" name="ngoai_ngu_khac_1" value="" class="form-control" style="display: none;margin-top:5px;">
                            </td>
                            <td align="center">
                                <select name="nghe_1" class="form-control">
                                    <option value="1">Tốt</option>
                                    <option value="2">Khá</option>
                                    <option value="3">Trung bình</option>
                                    <option value="4">Yếu</option>
                                </select>
                            </td>
                            <td align="center">
                                <select name="noi_1" class="form-control">
                                    <option value="1">Tốt</option>
                                    <option value="2">Khá</option>
                                    <option value="3">Trung bình</option>
                                    <option value="4">Yếu</option>
                                </select>
                            </td>
                            <td align="center">
                                <select name="doc_1" class="form-control">
                                    <option value="1">Tốt</option>
                                    <option value="2">Khá</option>
                                    <option value="3">Trung bình</option>
                                    <option value="4">Yếu</option>
                                </select>
                            </td>
                            <td align="center">
                                <select name="viet_1" class="form-control">
                                    <option value="1">Tốt</option>
                                    <option value="2">Khá</option>
                                    <option value="3">Trung bình</option>
                                    <option value="4">Yếu</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-md-10 col-md-offset-1">
                    <button id="them-trinh-do-ngoai-ngu" type="button" class="btn btn-primary btn-sm">Thêm</button>
                </div>
                <input type="hidden" name="count_trinh_do_ngoai_ngu" id="count-trinh-do-ngoai-ngu" value="1">
            </div> <!-- Trình độ ngoại ngữ -->
            <div class="form-group">
                <label for="trinh_do_tin_hoc" class="control-label col-md-3">Trình độ tin học</label>
                <div class="col-md-5">
                    <input type="text" class="form-control" name="trinh_do_tin_hoc" value="" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <h1>Quá trình công tác</h1>
            </div>
            <div class="form-group">
                <div class="col-md-10 col-md-offset-1">
                    <table cellpadding="2" cellspacing="0" class="table table-striped table-hover table-bordered" id="qua-trinh-cong-tac-table">
                        <tr class="success">
                            <td align="center">STT</td>
                            <td align="center">Thời gian</td>
                            <td align="center">Nơi công tác</td>
                            <td align="center">Chức vụ</td>
                        </tr>
                        <tr>
                            <td align="center">1</td>
                            <td align="center"><input type="text" class="form-control" name="thoi_gian_cong_tac_1" placeholder="   Thời gian" value=""></td>
                            <td align="center"><input type="text" class="form-control" name="noi_cong_tac_1" placeholder="   Nơi công tác" value=""></td>
                            <td align="center"><input type="text" class="form-control" name="chuc_vu_1" placeholder="   Chức vụ" value="">
                            </td>
                        </tr>
                    </table>
                </div>
                <input type="hidden" name="count_qua_trinh_cong_tac" id="count-qua-trinh-cong-tac" value="1">
                <div class="col-md-10 col-md-offset-1">
                    <button class="btn btn-primary btn-sm" type="button" id="them-qua-trinh-cong-tac">Thêm</button>
                </div>
            </div> <!-- Quá trình công tác -->
            <div class="form-group">
                <h1>Kinh nghiệm trong Đảm bảo và Kiểm định chất lượng</h1>
            </div>
            <div class="form-group">
                <label for="" class="control-label col-md-5">Thầy/Cô đã từng tham gia đoàn Đánh giá ngoài (ĐGN) chưa? (*)</label>
                <div class="col-md-6">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="tham_gia_danh_gia_ngoai" value="1" >
                            Có
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="tham_gia_danh_gia_ngoai" value="0" >
                            Không
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <table cellpadding="2" cellspacing="0" class="table table-striped table-bordered" id="tham-gia-danh-gia-ngoai-table">
                    <tr class="success">
                        <td align="center">STT</td>
                        <td align="center">Đơn vị tổ chức</td>
                        <td align="center">Đơn vị được đánh giá</td>
                        <td align="center">Vai trò trong đoàn</td>
                        <td align="center">Tiêu chuẩn được phân công</td>
                    </tr>
                    <tr>
                        <td align="center">1</td>
                        <td align="center">
                            <select name="don_vi_to_chuc_1" class="form-control">
                                <option value="0">Chọn đơn vị tổ chức</option>
                                <option value="1">A</option>
                            </select>
                        </td>
                        <td align="center">
                            <input type="text" name="don_vi_duoc_danh_gia_1" value="" placeholder="" class="form-control">
                        </td>
                        <td align="center">
                            <select name="vai_tro_trong_doan_1" class="form-control">
                                <option value="0">Chọn vai trò trong đoàn</option>
                                <option value="1">Trưởng đoàn</option>
                                <option value="2">Thư ký Đoàn</option>
                                <option value="3">Thành viên Đoàn</option>
                                <option value="4">Tổ thư ký</option>
                                <option value="5">Quan sát viên</option>
                            </select>
                        </td>
                        <td align="center">
                            <table width="100%">
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">3</td>
                                    <td class="text-center">4</td>
                                    <td class="text-center">5</td>
                                    <td class="text-center">6</td>
                                    <td class="text-center">7</td>
                                    <td class="text-center">8</td>
                                    <td class="text-center">9</td>
                                    <td class="text-center">10</td>
                                </tr>
                                <tr>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="1"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="2"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="3"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="4"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="5"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="6"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="7"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="8"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="9"></td>
                                    <td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_1[]" value="10"></td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <input type="hidden" name="count_tham_gia_danh_gia_ngoai" id="count-tham-gia-danh-gia-ngoai" value="1">
                <button id="them-tham-gia-danh-gia-ngoai" type="button" class="btn btn-primary btn-sm">Thêm</button>
            </div> <!-- bangthamgiadgn -->
            <div class="form-group">
                <label for="" class="control-label col-md-5">Thầy/Cô đã có kinh nghiệm viết báo cáo tự đánh giá chưa? (*)</label>
                <div class="col-md-6">
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="kinh_nghiem_viet_bao_cao_tu_danh_gia" value="1" >
                            Có
                        </label>
                    </div>
                    <div class="radio-inline">
                        <label>
                            <input type="radio" name="kinh_nghiem_viet_bao_cao_tu_danh_gia" value="0" >
                            Không
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="kinh_nghiem_khac" class="control-label">Những kinh nghiệm khác liên quan đến Đảm bảo và Kiểm định chất lượng giáo dục</label>
                <textarea name="kinh_nghiem_khac" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <div class="pull-right"><input type="submit" value="Add" class="btn btn-primary"></div>
            </div>
        {!! Form::close() !!}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@stop
<style type="text/css" media="screen">
    #create-assessor-form label{
        text-align: right!important;
    }
</style>
@push('footer-scripts')
<script type="text/javascript" src="/assets/js/assessor.js"></script>
@endpush