@extends('main')

@section('custom-style')
    <link type="text/css" rel="stylesheet" href="{{url('vendors/select2/select2-madmin.css')}}">
@stop


@section('custom-script')
    <script src="{{url('vendors/select2/select2.min.js')}}"></script>
    <script src="{{url('vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
    <script src="{{url('vendors/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{url('js/ui-dropdown-select.js')}}"></script>
    <script>
        $(function(){

            $('#select_ma').change(function() {
                var ma = $('#select_ma').val();
                var url = '/dich-vu-van-tai-cho-hang/'+ma;

                //var url = current_path_url;
                window.location.href = url;
            });


        })
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải chở hàng
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Tên cơ sở kinh doanh</label>
                <!--div class="col-md-6 col-sm-6 col-xs-6"-->
                <select class="select2-size form-control select2-offscreen" tabindex="-1" title="" id="select_ma" name="select_ma">
                    <option value="all" selected>--  Nhập thông tin doanh nghiệp --</option>
                    @foreach($vantai as $dn)
                        <option value="{{$dn->masothue}}" {{($dn->masothue == $ma) ? 'selected' : ''}}>{{$dn->tendonvi}}</option>
                    @endforeach
                </select>
                <!--/div-->
            </div>
        </div>
    </div>

    <!-- /.row -->
    <!-- /.row -->

    <!-- Projects Row -->
    @if(count($dnvt)!=0)
    <div class="row">

        @foreach($dnvt as $dn)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('dn-dich-vu-van-tai-cho-hang/'.$dn->masothue)}}">
                    @if($dn->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dn->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="http://placehold.it/750x500" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dn-dich-vu-van-tai-cho-hang/'.$dn->masothue)}}">{{$dn->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải chở hàng</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dn->diachi}}</p>
            </div>
        @endforeach
    </div>
    @else
        <div class="row text-center">
            <div class="col-lg-12">
                <p>Không có thông tin!!!</p>
            </div>
        </div>
    @endif
    <!-- /.row -->

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            {!! $dnvt->render() !!}
        </div>
    </div>
    <!-- /.row -->

@stop