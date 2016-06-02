@extends('main')

@section('custom-style')
@stop


@section('custom-script')
    <script>
        $(function(){

            $('#select_hang').change(function() {
                var hang = $('#select_hang').val();
                var url = '/dich-vu-luu-tru/ks-'+hang+'-sao';

                //var url = current_path_url;
                window.location.href = url;
            });
        })
    </script>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dịch vụ lưu trú
                <select name="select_hang" id="select_hang">
                    <option value="1" {{($hang == 1) ? 'selected' : ''}}>1 sao</option>
                    <option value="1.5" {{($hang == 1.5) ? 'selected' : ''}}>1.5 sao</option>
                    <option value="2" {{($hang == 2) ? 'selected' : ''}}>2 sao</option>
                    <option value="2.5" {{($hang == 2.5) ? 'selected' : ''}}>2.5 sao</option>
                    <option value="3" {{($hang == 3) ? 'selected' : ''}}>3 sao</option>
                    <option value="3.5" {{($hang == 3.5) ? 'selected' : ''}}>3.5 sao</option>
                    <option value="4" {{($hang == 4) ? 'selected' : ''}}>4 sao</option>
                    <option value="4.5" {{($hang == 4.5) ? 'selected' : ''}}>4.5 sao</option>
                    <option value="5" {{($hang == 5) ? 'selected' : ''}}>5 sao</option>
                </select>
            </h1>

        </div>
    </div>

    <!-- /.row -->
    <!-- /.row -->

    <!-- Projects Row -->
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
            {!! $ksrd->render() !!}
        </div>
    </div>
    <!-- /.row -->

@stop