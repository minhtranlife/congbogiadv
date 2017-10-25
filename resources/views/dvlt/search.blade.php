@extends('main')

@section('custom-style')
    <link type="text/css" rel="stylesheet" href="{{url('vendors/select2/select2-madmin.css')}}">
@stop


@section('custom-script')
    <script>
        function searchtt(){
            var current_path_url = '/tim_kiem_doanh_nghiep_dvlt?';
            var masothue ='&masothue='+ $('#search_masothue').val();
            var url = current_path_url+masothue;
            window.location.href = url;
        }
    </script>
    <script src="{{url('vendors/select2/select2.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{url('vendors/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{url('js/ui-dropdown-select.js')}}"></script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tìm kiếm doanh nghiệp cung cấp dịch vụ lưu trú
            </h1>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
               <input class="form-control" type="text" id="search_masothue" placeholder="Mã số thuế doanh nghiệp" value="{{$masothue !='' ? $masothue : ''}}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label></label>
                <button class="btn btn-info active" onclick="searchtt()"><i class="glyphicon glyphicon-search"></i>Tìm kiếm</button>
            </div>
        </div>
    </div>

    <!-- /.row -->
    <!-- /.row -->

    <!-- Projects Row -->
    <div id="ttcskd">
    @if(count($ksrd)>0)
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
                <h5>Mã số thuế: {{$ks->masothue}}</h5>
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
    <div class="row text-center">
        <div class="col-lg-12">
            {!! $ksrd->render() !!}
        </div>
    </div>
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