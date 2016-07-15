@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div role="tabpanel">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="fa fa-list-alt">
                                </span> Báo cáo tự đánh giá
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="fa fa-caret-down pull-right"></span></a>
                            </h3>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table table-hover" id="sidebar">
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"> Thông tin chung</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Giới thiệu khái quát</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"> Cán bộ giảng viên, nhân viên</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"> Người học</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"> NCKH & CGCN</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"> CSVC, thư viện, tài chính</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <span class="fa fa-list-alt">
                                </span> Báo cáo đánh giá ngoài
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="fa fa-caret-down pull-right"></span></a>
                            </h3>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse in">
                            <div class="panel-body">
                                <table class="table table-hover" id="sidebar">
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"> Tiêu chuẩn 1</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"> Tiêu chuẩn 2</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"> Tiêu chuẩn 3</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"> Tiêu chuẩn 4</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab5" aria-controls="tab5" role="tab" data-toggle="tab"> Tiêu chuẩn 5</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="fa fa-circle-o text-danger"></span><a href="#tab6" aria-controls="tab6" role="tab" data-toggle="tab"> Tiêu chuẩn 6</a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-9">
            <div class="well">
                <div class="tab-content">
                    <form action="/institution/{{ $institution->id }}/sar/addSar" method="post" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div role="tabpanel" class="tab-pane active" id="tab1">
                            <h2 class="text-center">Thông tin chung</h2>
                            <hr>
                            @include('sar.insert.p1')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab2">
                            <h2 class="text-center">Giới thiệu khái quát</h2>
                            <hr>
                            @include('sar.insert.p2')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab3">
                            <h2 class="text-center">Cán bộ giảng viên, nhân viên</h2>
                            <hr>
                            @include('sar.insert.p3')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab4">
                            <h2 class="text-center">Người học</h2>
                            <hr>
                            @include('sar.insert.p4')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab5">
                            <h2 class="text-center">Nghiên cứu khoa học và chuyển giao công nghệ</h2>
                            <hr>
                            @include('sar.insert.p5')
                        </div>
                        <div role="tabpanel" class="tab-pane" id="tab6">
                            <h2 class="text-center">Cơ sở vật chất, thư viện, tài chinh</h2>
                            <hr>
                            @include('sar.insert.p6')
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@push('footer-scripts')
    <script type="text/javascript">
        /*--- Sidebar ---*/
        $('#accordion table tr td a').on('click',function(){
            $('#accordion table tr td:has(.fa-circle)').find('span').removeClass('fa-circle').addClass('fa-circle-o');
            $(this).parent().find('span').removeClass('fa-circle-o').addClass('fa-circle');    
        });
        /*--- Page 1 ---*/
        $('input[name="type"]').on('change', function(){
            if ($(this).val() == "Khac") {
                $('input[name="another_type"]').show();
            } else 
            {
                $('input[name="another_type"]').hide();
            }
        })
        /*--- Period ---*/
        $('input[name="period_start"], input[name="period_end"').on('blur',function(){
            var start_time = parseInt($('input[name="period_start"]').val());
            var end_time = parseInt($('input[name="period_end"]').val());
            for (var i = 1; i <= 5; i++) {
                var period = 'period_' + i;
                var period_start = start_time + i - 1;
                var period_end = start_time + i;
                $('span[class="'+period+'"]').html(period_start + ' - ' + period_end);
                $('input[type="hidden"][class="'+period+'"]').val(period_start + '-' + period_end);
                // console.log(period);
                // console.log(period_start);
                // console.log(period_end);
            };
        });
    </script>
@endpush