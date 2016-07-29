/**
 * Created by Yurnero on 27/07/2016.
 */
$('#them-trinh-do-thac-si').on('click', function () {
    var n = +$('#count-trinh-do-thac-si').val();
    var stt = n+1;
    console.log(stt);
    $('#trinh-do-thac-si-table tbody').append(
        '<tr>'+
            '<td align="center">'+ stt +'</td>'+
            '<td align="center"><input type="text" align="center" class="form-control" placeholder="Chuyên ngành đào tạo" name="chuyen_nganh_thac_si_'+stt+'"></td>'+
            '<td align="center"><input type="text" align="center" class="form-control" placeholder="Nơi đào tạo" name="noi_dao_tao_thac_si_'+stt+'"></td>'+
            '<td align="center"><input type="text" align="center" class="form-control" placeholder="Năm cấp bằng" name="nam_cap_bang_thac_si_'+stt+'"></td>'+
        '</tr>'
    );
    $('#count-trinh-do-thac-si').val(stt);
});

$('#them-trinh-do-tien-si').on('click', function () {
    var n = +$('#count-trinh-do-tien-si').val();
    var stt = n+1;
    console.log(stt);
    $('#trinh-do-tien-si-table tbody').append(
        '<tr>'+
        '<td align="center">'+ stt +'</td>'+
        '<td align="center"><input type="text" align="center" class="form-control" placeholder="Chuyên ngành đào tạo" name="chuyen_nganh_tien_si_'+stt+'"></td>'+
        '<td align="center"><input type="text" align="center" class="form-control" placeholder="Nơi đào tạo" name="noi_dao_tao_tien_si_'+stt+'"></td>'+
        '<td align="center"><input type="text" align="center" class="form-control" placeholder="Năm cấp bằng" name="nam_cap_bang_tien_si_'+stt+'"></td>'+
        '</tr>'
    );
    $('#count-trinh-do-tien-si').val(stt);
});

$('input[name="chung_chi_kiem_dinh_vien"]').on('change', function(){
    var target = $('input[name="so_chung_chi"], input[name="ngay_cap_chung_chi"]');
    if ($(this).val()==1) {
        target.attr('disabled',null);
        console.log(target);
    } else {
        target.attr('disabled','disabled');
    }
});

$('input[name="the_kiem_dinh_vien"]').on('change', function(){
    var target = $('input[name="so_the_kiem_dinh_vien"], input[name="ngay_cap_the_kiem_dinh_vien"]');
    if ($(this).val()==1) {
        target.attr('disabled',null);
        console.log(target);
    } else {
        target.attr('disabled','disabled');
    }
})

$('#them-trinh-do-ngoai-ngu').on('click', function() {
    var n = +$('#count-trinh-do-ngoai-ngu').val();
    var stt = n+1;
    $('#trinh-do-ngoai-ngu-table tbody').append(
        '<tr>'+
            '<td align="center">'+stt+'</td>'+
                '<td align="center">'+
                    '<select name="ngoai_ngu_'+stt+'" class="form-control">'+
                        '<option value="0">Chọn ngôn ngữ</option>'+
                        '<option value="Anh">Tiếng Anh</option>'+
                        '<option value="Pháp">Tiếng Pháp</option>'+
                        '<option value="Nga">Tiếng Nga</option>'+
                        '<option value="Đức">Tiếng Đức</option>'+
                        '<option value="Khác">Ngoại ngữ khác</option>'+
                    '</select>'+
                '<input hidden type="text" name="ngoai_ngu_khac_'+stt+'" value="" class="form-control" style="display: none;margin-top:5px;">'+
                '</td>'+
                '<td align="center">'+
                    '<select name="nghe_'+stt+'" class="form-control">'+
                        '<option value="1">Tốt</option>'+
                        '<option value="2">Khá</option>'+
                        '<option value="3">Trung bình</option>'+
                        '<option value="4">Yếu</option>'+
                    '</select>'+
                '</td>'+
                '<td align="center">'+
                    '<select name="noi_'+stt+'" class="form-control">'+
                        '<option value="1">Tốt</option>'+
                        '<option value="2">Khá</option>'+
                        '<option value="3">Trung bình</option>'+
                        '<option value="4">Yếu</option>'+
                    '</select>'+
                '</td>'+
                '<td align="center">'+
                    '<select name="doc_'+stt+'" class="form-control">'+
                        '<option value="1">Tốt</option>'+
                        '<option value="2">Khá</option>'+
                        '<option value="3">Trung bình</option>'+
                        '<option value="4">Yếu</option>'+
                    '</select>'+
                '</td>'+
                '<td align="center">'+
                    '<select name="viet_'+stt+'" class="form-control">'+
                        '<option value="1">Tốt</option>'+
                        '<option value="2">Khá</option>'+
                        '<option value="3">Trung bình</option>'+
                        '<option value="4">Yếu</option>'+
                    '</select>'+
                '</td>'+
        '</tr>'
    );
    $('#count-trinh-do-ngoai-ngu').val(stt);
});
$('#trinh-do-ngoai-ngu-table tbody').on('change','select[name^="ngoai_ngu_"]',function(){
    if ($(this).val() === 'Khác' ) {
        $(this).parent().find('input[name^="ngoai_ngu_khac_"]').show();
    } else {
        $(this).parent().find('input[name^="ngoai_ngu_khac_"]').hide();
    }
});
$('#them-qua-trinh-cong-tac').on('click', function(){
    var n = +$('#count-qua-trinh-cong-tac').val();
    var stt = n+1;
    $('#qua-trinh-cong-tac-table tbody').append(
        '<tr>'+
            '<td align="center">'+stt+'</td>'+
            '<td align="center"><input type="text" class="form-control" name="thoi_gian_cong_tac_'+stt+'" placeholder="   Thời gian" value=""></td>'+
            '<td align="center"><input type="text" class="form-control" name="noi_cong_tac_'+stt+'" placeholder="   Nơi công tác" value=""></td>'+
            '<td align="center"><input type="text" class="form-control" name="chuc_vu_'+stt+'" placeholder="   Chức vụ" value="">'+
            '</td>'+
        '</tr>'
    );
    $('#count-qua-trinh-cong-tac').val(stt);
});

$('#them-tham-gia-danh-gia-ngoai').on('click', function(){
    var n = +$('#count-tham-gia-danh-gia-ngoai').val();
    var stt = n+1;
    $('#tham-gia-danh-gia-ngoai-table tbody:first').append(
        '<tr>'+
            '<td align="center">'+stt+'</td>'+
            '<td align="center">'+
                '<select name="don_vi_to_chuc_'+stt+'" class="form-control">'+
                    '<option value="0">Chọn đơn vị tổ chức</option>'+
                    '<option value="1">A</option>'+
                '</select>'+
            '</td>'+
            '<td align="center">'+
                '<input type="text" name="don_vi_duoc_danh_gia_'+stt+'" value="" placeholder="" class="form-control">'+
            '</td>'+
            '<td align="center">'+
                '<select name="vai_tro_trong_doan_'+stt+'" class="form-control">'+
                    '<option value="0">Chọn vai trò trong đoàn</option>'+
                    '<option value="1">Trưởng đoàn</option>'+
                    '<option value="2">Thư ký Đoàn</option>'+
                    '<option value="3">Thành viên Đoàn</option>'+
                    '<option value="4">Tổ thư ký</option>'+
                    '<option value="5">Quan sát viên</option>'+
                '</select>'+
            '</td>'+
            '<td align="center">'+
                '<table width="100%">'+
                    '<tr>'+
                        '<td class="text-center">1</td>'+
                        '<td class="text-center">2</td>'+
                        '<td class="text-center">3</td>'+
                        '<td class="text-center">4</td>'+
                        '<td class="text-center">5</td>'+
                        '<td class="text-center">6</td>'+
                        '<td class="text-center">7</td>'+
                        '<td class="text-center">8</td>'+
                        '<td class="text-center">9</td>'+
                        '<td class="text-center">10</td>'+
                    '</tr>'+
                        '<tr>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="1"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="2"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="3"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="4"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="5"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="6"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="7"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="8"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="9"></td>'+
                        '<td class="text-center"><input type="checkbox" name="tieu_chuan_duoc_phan_cong_'+stt+'[]" value="10"></td>'+
                        '</tr>'+
                '</table>'+
            '</td>'+
        '</tr>'
    );
    $('#count-tham-gia-danh-gia-ngoai').val(stt);
});


//Submit the form with JQuery Ajax
//$("#create-assessor-form").on('submit', (function(event) {
//    event.preventDefault();
//    var data = new FormData(this);
//    var url = '/check';
//    $.ajax({
//        url: url, // Url to which the request is send
//        type: "POST", // Type of request to be send, called as method
//        data: data, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
//        contentType: false, // The content type used when sending data to the server.
//        cache: false, // To unable request pages to be cached
//        processData: false, // To send DOMDocument or non processed data file it is set to false
//        success: function(result) // A function to be called if request succeeds
//        {
//            console.log(result);
//            //// $("#" + formID).find('input').attr('disabled','disabled');
//            //Messenger().post({
//            //    message: "Success",
//            //    type: 'success',
//            //    showCloseButton: true
//            //});
//        },
//        error: function(e) {
//            console.log(e.responseText);
//        }
//    });
//}));