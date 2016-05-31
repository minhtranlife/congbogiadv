@extends('main')

@section('custom-style')
@stop


@section('custom-script')
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ vận tải chở hàng
            </h1>

        </div>
    </div>

    <!-- /.row -->
    <!-- /.row -->

    <!-- Projects Row -->
    @if(count($dnvt)!=0)
    <div class="row">

        @foreach($dnvt as $dn)
            <div class="col-md-3 portfolio-item">
                <a href="{{url('dvvtch/'.$dn->masothue)}}">
                    @if($dn->toado != null)
                    <img class="img-responsive"
                         src="https://maps.googleapis.com/maps/api/staticmap?zoom=17&amp;size=750x425&amp;sensor=false&amp;
                            maptype=roadmap&amp;markers=color:red|{{$dn->toado}}" alt="">
                    @else
                        <img class="img-responsive"
                             src="http://placehold.it/750x500" alt="750x450">
                    @endif
                </a>
                <h3><a href="{{url('dvvtch/'.$dn->masothue)}}">{{$dn->tendonvi}}</a></h3>
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