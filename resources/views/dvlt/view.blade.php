@extends('main')

@section('custom-style')

@stop


@section('custom-script')
    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAbv4bBMMV0m0Z0m4zEv6TTKcVN4CDhcSE"></script>

@stop

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$model->tencskd}}</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr style="background: #F5F5F5">
                        <th width="2%">STT</th>
                        <th style="text-align: center">Ngày kê khai</th>
                        <th style="text-align: center">Ngày thực hiện</th>
                        <th style="text-align: center">Số công văn</th>
                        <th style="text-align: center">Số công văn <br>liền kề</th>
                        <th style="text-align: center">Thao tác</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($modelct as $key=>$ct)
                        <tr>
                            <td style="text-align: center">{{$key + 1}}</td>
                            <td style="text-align: center">{{getDayVn($ct->ngaynhap)}}</td>
                            <td style="text-align: center">{{getDayVn($ct->ngayhieuluc)}}</td>
                            <td style="text-align: center">{{$ct->socv}}</td>
                            <td style="text-align: center">{{$ct->socvlk}}</td>
                            <td>
                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal" onclick="getTTph({{$ct->mahs}})">Xem chi tiết</button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    <div class="row text-center">
        <div class="col-lg-12">
            {!! $modelct->render() !!}
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông tin về giá phòng</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr style="background: #F5F5F5">
                            <th width="2%">STT</th>
                            <th style="text-align: center">Loại phòng</th>
                            <th style="text-align: center">Số hiệu</th>
                            <th style="text-align: center">Mức giá kê khai</th>
                            <th style="text-align: center">Ghi chú</th>
                        </tr>
                        </thead>
                        <tbody id="ttctgia">

                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script>
        function getTTph(mahs) {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            //alert($('#cskd').val());
            $.ajax({
                url: '/ajax/getTTph',
                type: 'GET',
                data: {
                    _token: CSRF_TOKEN,
                    mahs:  mahs
                },
                dataType: 'JSON',
                success: function (data) {
                    if(data.status == 'success') {
                        //alert(data.message);
                        $('#ttctgia').replaceWith(data.message);
                    }
                }
            })
        }
    </script>


@stop 