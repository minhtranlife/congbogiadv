@extends('main')

@section('custom-style')
    <link type="text/css" rel="stylesheet" href="{{url('vendors/select2/select2-madmin.css')}}">
@stop


@section('custom-script')
    <script>
        $(function(){
            $('#select_kk').change(function() {
                var kk = $('#select_kk').val();
                var hang = $('#select_hang').val();
                var url = '/dich-vu-luu-tru/kekhai='+kk+'&hang='+hang+'&cskd=all';
                window.location.href = url;
            });
            $('#select_hang').change(function() {
                var kk = $('#select_kk').val();
                var hang = $('#select_hang').val();
                var url = '/dich-vu-luu-tru/kekhai='+kk+'&hang='+hang+'&cskd=all';
                window.location.href = url;
            });
            $('#select_cskd').change(function() {
                var kk = $('#select_kk').val();
                var hang = $('#select_hang').val();
                var cskd = $('#select_cskd').val();
                var url = '/dich-vu-luu-tru/kekhai='+kk+'&hang='+hang+'&cskd='+cskd;
                window.location.href = url;
            });
        })
    </script>
    <script src="{{url('vendors/select2/select2.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{url('vendors/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{url('js/ui-dropdown-select.js')}}"></script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ lưu trú
            </h1>

        </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            <div class="form-group">
                <label>Kê khai giá</label>
                <select class="form-control" name="select_kk" id="select_kk" >
                    <option value="CKK" {{($kk == 'CKK') ? 'selected' : ''}}>Chưa kê khai</option>
                    <option value="KK" {{($kk == 'KK') ? 'selected' : ''}}>Đã kê khai</option>
                </select>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
                <label>Loại hạng</label>
                <select class="form-control" name="select_hang" id="select_hang" >
                    <option value="1" {{($hang == 1) ? 'selected' : ''}}>1 sao</option>
                    <option value="2" {{($hang == 2) ? 'selected' : ''}}>2 sao</option>
                    <option value="3" {{($hang == 3) ? 'selected' : ''}}>3 sao</option>
                    <option value="4" {{($hang == 4) ? 'selected' : ''}}>4 sao</option>
                    <option value="5" {{($hang == 5) ? 'selected' : ''}}>5 sao</option>
                    <option value="K" {{($hang == 'K') ? 'selected' : ''}}>Khác (Nhà nghỉ)</option>
                    <option value="CXD" {{($hang == 'CXD') ? 'selected' : ''}}>Chưa xác định (Khách sạn chưa xác định sao)</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Tên cơ sở kinh doanh</label>
                <!--div class="col-md-6 col-sm-6 col-xs-6"-->
                    <select class="select2-size form-control select2-offscreen" tabindex="-1" title="" id="select_cskd" name="select_cskd">
                        <option value="all" selected>-- Nhập thông tin cơ sở kinh doanh --</option>
                        @foreach($hotel as $ks)
                            <option value="{{$ks->macskd}}" {{($ks->macskd == $maks) ? 'selected' : ''}}>{{$ks->tencskd}}</option>
                        @endforeach
                    </select>
                <!--/div-->
            </div>
        </div>
    </div>

    <!-- /.row -->
    <!-- /.row -->

    <!-- Projects Row -->
    <div id="ttcskd">
    @if(count($ksrd)!=0)
    <div class="row">
        @foreach($ksrd as $ks)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('cskd-dich-vu-luu-tru/'.$ks->macskd)}}">
                    @if($ks->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$ks->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="http://placehold.it/750x500" alt="750x450">
                    @endif
                </a>
                <h5><a href="{{url('cskd-dich-vu-luu-tru/'.$ks->macskd)}}"><b>{{$ks->tencskd}}</b></a></h5>
                <div class="ratings" style="color: #ec0;">
                    <p>
                        @if($ks->loaihang == '1')
                            <span class="glyphicon glyphicon-star"></span>
                        @elseif($ks->loaihang == '2')
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        @elseif($ks->loaihang == '3')
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        @elseif($ks->loaihang == '4')
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        @elseif($ks->loaihang == '5')
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                            <span class="glyphicon glyphicon-star"></span>
                        @elseif($ks->loaihang == 'K' ) Khác(Nhà nghỉ)
                        @elseif ($ks->loaihang == 'CXD' ) Chưa xác định (Khách sạn chưa xác định sao)
                        @endif
                    </p>
                </div>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$ks->diachikd}}</p>
            </div>
        @endforeach
    </div>
        @if($maks == 'all')
    <div class="row text-center">
        <div class="col-lg-12">
            {!! $ksrd->render() !!}
        </div>
    </div>
            @endif
    @else
        <div class="row text-center">
            <div class="col-lg-12">
                <p>Không có thông tin!!!</p>
            </div>
        </div>
    @endif
    </div>
    <!-- /.row -->

    <!-- Pagination -->

    <!-- /.row -->


@stop