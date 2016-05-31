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
            <a href="{{'dvlt/'.$ks->macskd}}">
                @if($ks->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$ks->toado}}" alt="">
                @else
                    <img class="img-responsive"
                         src="http://placehold.it/750x500" alt="750x450">
                @endif
            </a>
            <h3><a href="{{'dvlt/'.$ks->macskd}}">{{$ks->tencskd}}</a></h3>
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
            <a href="{{url('dvvtxk/'.$dnxk->masothue)}}">
                @if($dnxk->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dnxk->toado}}" alt="">
                @else
                    <img class="img-responsive"
                         src="http://placehold.it/750x500" alt="750x450">
                @endif
            </a>
            <h3><a href="{{url('dvvtxk/'.$dnxk->masothue)}}">{{$dnxk->tendonvi}}</a></h3>
            <p style="color: #888; font-size: .85em;">Vận tải xe khách</p>
            <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnxk->diachi}}</p>
        </div>
        @endforeach
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
                <a href="{{url('dvvtxb/'.$dnxb->masothue)}}">
                    @if($dnxb->toado != null)
                        <img class="img-responsive"
                             src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dnxb->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="http://placehold.it/750x500" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dvvtxb/'.$dnxb->masothue)}}">{{$dnxb->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải xe khách</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnxb->diachi}}</p>
            </div>
        @endforeach
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
                <a href="{{url('dvvtxtx/'.$dntx->masothue)}}">
                    @if($dntx->toado != null)
                        <img class="img-responsive"
                             src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dntx->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="http://placehold.it/750x500" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dvvtxtx/'.$dntx->masothue)}}">{{$dntx->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải xe khách</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dntx->diachi}}</p>
            </div>
        @endforeach
    </div>
    <!-- /.row -->

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải chở hàng
                <small>tiêu biểu</small>
            </h1>
        </div>
    </div>
    <!-- /.row -->
    <!-- Projects Row -->
    <div class="row">
        @foreach($dnvtk as $dnch)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('dvvtch/'.$dnch->masothue)}}">
                    @if($dnch->toado != null)
                        <img class="img-responsive"
                             src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dntx->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="http://placehold.it/750x500" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dvvtch/'.$dnch->masothue)}}">{{$dnch->tendonvi}}</a></h3>
                <p style="color: #888; font-size: .85em;">Vận tải xe khách</p>
                <p><i class="glyphicon glyphicon-map-marker"></i> {{$dnch->diachi}}</p>
            </div>
        @endforeach
    </div>
    <!-- /.row -->
@stop