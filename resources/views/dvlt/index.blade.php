@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
    <div class="page-content">
        <div class="row">
            @foreach($model as $ksnn)
            <div class="col-lg-3">
                <div class="panel panel-white">
                    <div class="panel-heading">{{$ksnn->tencosokinhdoanh}}</div>
                    <div class="panel-body">
                        <ol>
                            <li>Tên doanh nghiệp: {{$ksnn->tendoanhnghiep}}</li>
                            <li>Mã số thuế: {{$ksnn->masothue}}</li>
                            <li>Địa chỉ: {{$ksnn->diachitruso}}</li>
                            <li>Tel: {{$ksnn->telephone}}</li>
                            <li>Hạng: {{$ksnn->loaihang}} sao</li>
                            <li>Địa chỉ: {{$ksnn->diachikinhdoanh}} </li>
                            <li>Tel: {{$ksnn->telephonekinhdoanh}}</li>
                        </ol>
                        <div align="center">
                            <a href="{{url('dvlt/'.$ksnn->masothue.'/show')}}" class="btn btn-info btn-xs mbs"><i class="fa fa-eye"></i>&nbsp;Giá dịch vụ</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!--END CONTENT--></div>
@stop 