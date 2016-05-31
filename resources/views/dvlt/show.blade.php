@extends('main')

@section('custom-style')

@stop


@section('custom-script')

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
        <div class="col-md-6">
            <!--img class="img-responsive" src="https://maps.googleapis.com/maps/api/staticmap?center={{getAddMap($model->diachikd)}}&zoom=17&size=750x450" alt=""-->
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
            <h3>Loại hạng</h3>
            <div class="ratings" style="color: #ec0;">
                <p>
                    @if($model->loaihang == '1')
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($model->loaihang == '1.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($model->loaihang == '2')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($model->loaihang == '2.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($model->loaihang == '3')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($model->loaihang == '3.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($model->loaihang == '4')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($model->loaihang == '4.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($model->loaihang == '5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @else
                        {{$model->loaihang}}
                    @endif
                </p>
            </div>
            <!--p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p-->
            <h3>Thông tin liên hệ</h3>
            <ul class="contact-info">
                <li><i class="glyphicon glyphicon-map-marker"></i> {{$model->diachikd}}</li>
                <li><i class="glyphicon glyphicon-earphone"></i> {{$model->telkd}}</li>
                <!--li><i class="glyphicon glyphicon-envelope"></i> {{$model->faxcskd}}</li-->
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
                        <th>Loại phòng - Quy cách chất lượng</th>
                        <th>Số hiệu phòng</th>
                        <th>Mức giá kê khai</th>
                        <th>Ghi chú</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($modelkkct as $giaph)
                    <tr>
                        <td>{{$giaph->loaip}} - {{$giaph->qccl}}</td>
                        <td>{{$giaph->sohieu}}</td>
                        <td>{{number_format($giaph->mucgiakk)}}</td>
                        <td>{{$giaph->ghichu}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @else
        <h3>Cơ sở kinh doanh dịch vụ lưu trú chưa có kê khai giá gần nhất cho {{(getGeneralConfigs()['tendonvi'])}}</h3>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Cơ sở kinh doanh cung cấp dịch vụ lưu trú cùng loại</h3>
        </div>
        @foreach($modelk as $ksk)
        <div class="col-md-3 portfolio-item">
            <a href="{{$ksk->macskd}}">
                @if($ksk->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$ksk->toado}}" alt="">
                @else
                    <img class="img-responsive"
                         src="http://placehold.it/750x500" alt="750x450">
                @endif
            </a>
            <h3><a href="{{url('dvlt/'.$ksk->macskd)}}">{{$ksk->tencskd}}</a></h3>
            <div class="ratings" style="color: #ec0;">
                <p>
                    @if($ksk->loaihang == '1')
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ksk->loaihang == '1.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ksk->loaihang == '2')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ksk->loaihang == '2.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ksk->loaihang == '3')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ksk->loaihang == '3.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ksk->loaihang == '4')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ksk->loaihang == '4.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ksk->loaihang == '5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @else
                        {{$ksk->loaihang}}
                    @endif
                </p>
            </div>
            <p><i class="glyphicon glyphicon-map-marker"></i>{{$ksk->diachikd}}</p>
            <!--p>
                <a href="#" class="btn btn-primary">Xem Chi Tiết</a>
            </p-->
        </div>
        @endforeach
    </div>
    <!-- /.row -->

@stop 