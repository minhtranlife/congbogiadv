@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">{{$model->tendonvi}}</h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        <div class="col-md-6">
            @if($model->toado != null)
                <img class="img-responsive"
                     src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$model->toado}}" alt="">
            @else
                <img class="img-responsive"
                     src="{{url('images/default.png')}}" alt="750x450">
            @endif
        </div>
        <div class="col-md-6">
            <h3>Cung cấp dịch vụ vận tải</h3>
            <div class="ratings" style="color: #ec0;">
                <p>
                    {{($model->dvxk == 1) ? 'Dịch vụ vận tải hành khách, ' : ''}}{{($model->dvxb == 1) ? 'Dịch vụ vận tải xe buýt, ' : ''}}
                    {{($model->dvxtx == 1) ? 'Dịch vụ vận tải xe taxi, ' : ''}}{{($model->dvk == 1) ? 'Dịch vụ vận tải hàng hóa.' : ''}}
                </p>
            </div>
            <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p-->
            <h3>Thông tin liên hệ</h3>
            <ul class="contact-info">
                @if($model->link !='')
                    <li><i class="glyphicon glyphicon-cloud-upload"></i><a href="http://{{$model->link}}" target="_blank"> Trang chủ</a> </li>
                @endif
                <li><i class="glyphicon glyphicon-map-marker"></i> {{$model->diachi}}</li>
                <li><i class="glyphicon glyphicon-earphone"></i> {{$model->dienthoai}}</li>
                <!--li><i class="glyphicon glyphicon-envelope"></i> {{$model->fax}}</li-->
            </ul>
        </div>
    </div>
    @if($modelkkct != '')
    <div class="row">
        <div class="col-lg-12">
            <h3>Bảng giá dịch vụ - ngày có hiệu lực {{getDayVn($modelkk->ngayhieuluc)}} -  {{(getGeneralConfigs()['tendonvi'])}}
                nhận hồ sơ ngày {{getDayVn($modelkk->ngaynhan)}}</h3>
        </div>
        <div class="col-lg-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr style="background: #F5F5F5">
                        <th width="2%" style="text-align: center">STT</th>
                        <th style="text-align: center" width="40">Loại xe</th>
                        <th style="text-align: center" width="40">Mô tả dịch vụ</th>
                        <th style="text-align: center" width="10%">Mức giá kê khai liền kề</th>
                        <th style="text-align: center" width="10%">Mức giá kê khai</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($modelkkct as $key=>$giaxk)
                    <tr>
                        <td style="text-align: center">{{($key + 1)}}</td>
                        <td>{{$giaxk->loaixe}}</td>
                        <td>{{$giaxk->tendichvu}}</td>
                        <td align="right">{{number_format($giaxk->giakklk)}}</td>
                        <td align="right">{{number_format($giaxk->giakk)}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
        <h3>Đơn vị cung cấp dịch vụ vận tải khác chưa có kê khai giá gần nhất cho {{(getGeneralConfigs()['tendonvi'])}}</h3>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Đơn vị cung cấp dịch vụ vận tải khác cùng loại</h3>
        </div>
        @foreach($modelk as $dnk)
        <div class="col-md-3 portfolio-item">
            <a href="{{url('dn-dich-vu-van-tai-cho-hang/'.$dnk->masothue)}}">
                @if($dnk->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dnk->toado}}" alt="">
                @else
                    <img class="img-responsive"
                         src="{{url('images/default.png')}}" alt="750x450">
                @endif
            </a>
            <h3><a href="{{url('dn-dich-vu-van-tai-cho-hang/'.$dnk->masothue)}}">{{$dnk->tendonvi}}</a></h3>
            <p style="color: #888; font-size: .85em;">Vận tải chở hàng</p>
            <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnk->diachi}}</p>
            <!--p>
                <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
            </p-->
        </div>
        @endforeach
    </div>
    <!-- /.row -->

@stop 