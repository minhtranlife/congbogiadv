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
                     src="http://placehold.it/750x500" alt="750x450">
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
                    <tr>
                        <th>Tên dịch vụ</th>
                        <th>Quy cách chất lượng</th>
                        <th>Đơn vị tính</th>
                        <th>Mức giá kê khai</th>
                        <th>Mức giá hành lý vượt quy định</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($modelkkct as $giaxk)
                    <tr>
                        <td>{{$giaxk->tendichvu}}</td>
                        <td>{{$giaxk->qccl}}</td>
                        <td>{{$giaxk->dvt}}</td>
                        <td>{{number_format($giaxk->giakk)}}</td>
                        <td>{{number_format($giaxk->giahl)}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
        <h3>Đơn vị cung cấp dịch vụ vận tải taxi chưa có kê khai giá gần nhất cho {{(getGeneralConfigs()['tendonvi'])}}</h3>
    @endif

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Đơn vị cung cấp dịch vụ vận tải taxi cùng loại</h3>
        </div>
        @foreach($modelk as $dnk)
        <div class="col-md-3 portfolio-item">
            <a href="{{$dnk->masothue}}">
                @if($dnk->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dnk->toado}}" alt="">
                @else
                    <img class="img-responsive"
                         src="http://placehold.it/750x500" alt="750x450">
                @endif
            </a>
            <h3><a href="{{url($dnk->masothue)}}">{{$dnk->tendonvi}}</a></h3>
            <p style="color: #888; font-size: .85em;">Vận tải xe taxi</p>
            <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnk->diachi}}</p>
            <!--p>
                <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
            </p-->
        </div>
        @endforeach
    </div>
    <!-- /.row -->

@stop 