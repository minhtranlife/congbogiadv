@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ lưu trú
                <small>tiêu biểu</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->

    <!-- Projects Row -->
    <div class="row">
        @foreach($ksrd as $ks)
        <div class="col-md-3 portfolio-item">
            <a href="{{'cskd-dich-vu-luu-tru/'.$ks->macskd}}">
                    <img class="img-responsive" src="file:///E:/VitualHost/giadichvu.dev/public/images/cskddvlt/4200808560.jpg">
            </a>
            <h3><a href="{{'cskd-dich-vu-luu-tru/'.$ks->macskd}}">{{$ks->tencskd}}</a></h3>
            <div class="ratings" style="color: #ec0;">
                <p>
                    @if($ks->loaihang == '1')
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ks->loaihang == '1.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ks->loaihang == '2')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ks->loaihang == '2.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ks->loaihang == '3')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ks->loaihang == '3.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ks->loaihang == '4')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @elseif($ks->loaihang == '4.5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    @elseif($ks->loaihang == '5')
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    @else
                        {{$ks->loaihang}}
                    @endif
                </p>
            </div>
            <p><i class="glyphicon glyphicon-map-marker"></i> {{$ks->diachikd}}</p>
            <!--p>
                <a href="{{'dvlt/'.$ks->macskd}}" class="btn btn-primary">Xem Chi Tiết</a>
            </p-->
        </div>
        @endforeach
            <div class="col-lg-12">
                <p align="right"><a href="{{url('dich-vu-luu-tru/kekhai=KK&hang=3&cskd=all')}}"  style="color:#5b9bd1">Xem chi tiết...</a></p>
            </div>
    </div>
    <!-- /.row -->

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải xe khách
                <small>tiêu biểu</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Projects Row -->
    <div class="row">
        @foreach($dnvtxk as $dnxk)
        <div class="col-md-3 portfolio-item">
            <a href="{{url('dn-dich-vu-van-tai-xe-khach/'.$dnxk->masothue)}}">
                @if($dnxk->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dnxk->toado}}" alt="">
                @else
                    <img class="img-responsive"
                         src="{{url('images/default.png')}}" alt="750x450">
                @endif
            </a>
            <h3><a href="{{url('dn-dich-vu-van-tai-xe-khach/'.$dnxk->masothue)}}">{{$dnxk->tendonvi}}</a></h3>
            <p style="color: #888; font-size: .85em;">Vận tải xe khách</p>
            <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnxk->diachi}}</p>
        </div>
        @endforeach
            <div class="col-lg-12">
                <p align="right"><a href="{{url('dich-vu-van-tai-xe-khach')}}"  style="color:#5b9bd1">Xem chi tiết...</a></p>
            </div>
    </div>
    <!-- /.row -->
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải xe buýt
                <small>tiêu biểu</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Projects Row -->
    <div class="row">
        @foreach($dnvtxb as $dnxb)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('dn-dich-vu-van-tai-xe-buyt/'.$dnxb->masothue)}}">
                    @if($dnxb->toado != null)
                        <img class="img-responsive"
                             src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dnxb->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="{{url('images/default.png')}}" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dn-dich-vu-van-tai-xe-buyt/'.$dnxb->masothue)}}">{{$dnxb->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải xe buýt</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnxb->diachi}}</p>
            </div>
        @endforeach
            <div class="col-lg-12">
                <p align="right"><a href="{{url('dich-vu-van-tai-xe-buyt')}}"  style="color:#5b9bd1">Xem chi tiết...</a></p>
            </div>
    </div>
    <!-- /.row -->

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải xe taxi
                <small>tiêu biểu</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Projects Row -->
    <div class="row">
        @foreach($dnvtxtx as $dntx)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('dn-dich-vu-van-tai-xe-taxi/'.$dntx->masothue)}}">
                    @if($dntx->toado != null)
                        <img class="img-responsive"
                             src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dntx->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="{{url('images/default.png')}}" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dn-dich-vu-van-tai-xe-taxi/'.$dntx->masothue)}}">{{$dntx->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải xe taxi</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dntx->diachi}}</p>
            </div>
        @endforeach
        <div class="col-lg-12">
            <p align="right"><a href="{{url('dich-vu-van-tai-xe-taxi')}}"  style="color:#5b9bd1">Xem chi tiết...</a></p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải khác
                <small>tiêu biểu</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Projects Row -->
    <div class="row">
        @foreach($dnvtk as $dnch)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('dn-dich-vu-van-tai-cho-hang/'.$dnch->masothue)}}">
                    @if($dnch->toado != null)
                        <img class="img-responsive"
                             src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dntx->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="{{url('images/default.png')}}" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dn-dich-vu-van-tai-cho-hang/'.$dnch->masothue)}}">{{$dnch->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải xe khách</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnch->diachi}}</p>
            </div>
        @endforeach
            <div class="col-lg-12">
                <p align="right"><a href="{{url('dich-vu-van-tai-cho-hang')}}"  style="color:#5b9bd1">Xem chi tiết...</a></p>
            </div>
    </div>




    <!-- /.row -->
@stop