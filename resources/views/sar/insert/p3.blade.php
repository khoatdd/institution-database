<div class="form-group">
    <div class="col-md-12">
        <table class="table table-striped table-hover" border="1">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Phân loại</th>
                    <th class="text-center">Nam</th>
                    <th class="text-center">Nữ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">I</td>
                    <td style="text-align:left;" colspan="3"><b>Cán bộ cơ hữu</b></td>
                </tr>
                <tr>
                    <td class="text-right">I.1</td>
                    <td style="text-align:left;padding-left:30px;">Cán bộ trong biên chế</td>
                    <td><input type="text" name="III17_can_bo_trong_bien_che_m" class="form-control"></td>
                    <td><input type="text" name="III17_can_bo_trong_bien_che_f" class="form-control"></td>
                </tr>
                <tr>
                    <td class="text-right">I.2</td>
                    <td style="text-align:left;padding-left:30px;">Cán bộ hợp đồng dài hạn (từ 1 năm trở lên) và hợp đồng không xác định thời hạn</td>
                    <td><input type="text" name="III17_can_bo_hop_dong_dai_han_hoac_khong_thoi_han_m" class="form-control"></td>
                    <td><input type="text" name="III17_can_bo_hop_dong_dai_han_hoac_khong_thoi_han_f" class="form-control"></td>
                </tr>
                <tr>
                    <td class="text-center">II</td>
                    <td style="text-align:left"><b>Các cán bộ khác: </b>Hợp đồng ngắn hạn (dưới 1 năm, bao gồm cả giảng viên thỉnh giảng )
                    </td>
                    <td><input type="text" name="III17_can_bo_khac_m" class="form-control"></td>
                    <td><input type="text" name="III17_can_bo_khac_f" class="form-control"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="form-group">
    <div class="col-md-12">
        <table class="table table-striped table-hover" border="1">
            <thead>
            <tr>
                <th rowspan="2" scope="col" class="text-center vertical-middle"> STT</th>
                <th rowspan="2" scope="col" class="text-center vertical-middle col-md-2"> Trình độ, học
                    vị, chức
                    danh
                </th>
                <th rowspan="2" scope="col" class="text-center vertical-middle"> Số lượng giảng
                    viên
                </th>
                <th colspan="3" scope="col" class="text-center vertical-middle"> Giảng viên cơ
                    hữu
                </th>
                <th rowspan="2" scope="col" class="text-center vertical-middle"> Giảng viên
                    thỉnh giảng
                    trong
                    nước
                </th>
                <th rowspan="2" scope="col" class="text-center vertical-middle"> Giảng viên
                    quốc tế
                </th>
            </tr>
            <tr>
                <th scope="col" class="text-center vertical-middle"> GV trong biên chế trực
                    tiếp giảng
                    dạy
                </th>
                <th scope="col" class="text-center vertical-middle"> GV hợp đồng dài hạn trực
                    tiếp
                    giảng dạy
                </th>
                <th scope="col" class="text-center vertical-middle"> Giảng viên kiêm nhiệm là
                    cán bộ
                    quản lý
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="text-center"> (1)</td>
                <td class="text-center"> (2)</td>
                <td class="text-center"> (3)</td>
                <td class="text-center"> (4)</td>
                <td class="text-center"> (5)</td>
                <td class="text-center"> (6)</td>
                <td class="text-center"> (7)</td>
                <td class="text-center"> (8)</td>
            </tr>
            <?php $n = 1; ?>
            @foreach ( $titles as $title)
                <tr>
                    <td class="text-center">{{ $n }}</td>
                    <td class="text-left">{{ $title->name }}</td>
                    <td><input type="text" class="form-control" name="III18_{{ $title->id }}_so_luong_gv"
                               value=""
                               placeholder="">
                    </td>
                    <td><input type="text" class="form-control"
                               name="III18_{{ $title->id }}_gv_trong_bien_che_truc_tiep_giang_day"
                               value="" placeholder=""></td>
                    <td><input type="text" class="form-control"
                               name="III18_{{ $title->id }}_gv_hop_dong_dai_han_truc_tiep_giang_day"
                               value=""
                               placeholder=""></td>
                    <td><input type="text" class="form-control"
                               name="III18_{{ $title->id }}_gv_kiem_nhiem_la_can_bo_quan_ly"
                               value="" placeholder=""></td>
                    <td><input type="text" class="form-control"
                               name="III18_{{ $title->id }}_gv_thinh_giang_trong_nuoc"
                               value=""
                               placeholder=""></td>
                    <td><input type="text" class="form-control" name="III18_{{ $title->id }}_gv_quoc_te"
                               value=""
                               placeholder="">
                    </td>
                </tr>
                <?php $n++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
<div class="form-group">
    <label for="" class="control-label text-left col-md-12"><b>19. Thống kê, phân loại giảng viên cơ hữu theo trình độ, giới tính và độ tuổi (số người):</b></label>
</div>
<div class="form-group">
    <div class="col-md-12">
        <table class="table table-striped table-hover" border="1">
            <thead>
                <tr>
                    <th rowspan="2" scope="col" class="text-center vertical-middle">STT</th>
                    <th rowspan="2" scope="col" class="text-center vertical-middle col-md-2">Trình độ/học vị</th>
                    <th rowspan="2" scope="col" class="text-center vertical-middle">Số lượng</th>
                    <th colspan="2" scope="col" class="text-center vertical-middle">Phân loại theo giới tính</th>
                    <th colspan="5" scope="col" class="text-center vertical-middle">Phân loại theo tuổi (người)</th>
                </tr>
                <tr>
                    <th class="text-center vertical-middle">Nam</th>
                    <th class="text-center vertical-middle">Nữ</th>
                    <th class="text-center vertical-middle"><30</th>
                    <th class="text-center vertical-middle">30-40</th>
                    <th class="text-center vertical-middle">41-50</th>
                    <th class="text-center vertical-middle">51-60</th>
                    <th class="text-center vertical-middle">>60</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $titles as $title)
                    <tr>
                    <td class="text-center vertical-middle">{{ $title->id }}</td>
                    <td class="text-left vertical-middle">{{ $title->name }}</td>
                    <td><input type="text" name="III19_{{ $title->id }}_1" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_3" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_4" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_5" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_6" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_7" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_8" class="form-control"></td>
                    <td><input type="text" name="III19_{{ $title->id }}_9" class="form-control"></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>