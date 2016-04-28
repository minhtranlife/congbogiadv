@extends('main')

@section('custom-style')

@stop


@section('custom-script')

@stop

@section('content')
    <div class="page-content">
        <div id="" class="row">
            <div class="col-lg-12">
                <form id="view_general">
                    <div class="portlet box">

                        <div class="portlet-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <p>Ngày áp dụng: @if(count($modelhs)>0){{getDayVn($modelhs->ngayad)}}@endif</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="tabletrocap" class="table table-hover table-striped table-bordered table-advanced tablesorter">
                                            <thead>
                                            <tr>
                                                <th>Loại phòng/ Quy cách chất lượng</th>
                                                <th>Số hiệu phòng</th>
                                                <th>Giá phòng</th>
                                                <th>Ghi chú</th>
                                            </tr>
                                            </thead>
                                            @if(count($model)>0)
                                            @foreach($model as $ct)
                                            <tbody>
                                                <td>{{$ct->loaip.'-'.$ct->qccl}}</td>
                                                <td>{{$ct->sohieu}}</td>
                                                <td>{{number_format($ct->mucgia)}}</td>
                                                <td>{{$ct->ghichu}}</td>
                                            </tbody>
                                            @endforeach
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p> @if(count($modelhs)>0){!! nl2br(e($modelhs->ghichu)) !!}@endif</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@stop 