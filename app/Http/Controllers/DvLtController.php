<?php

namespace App\Http\Controllers;

use App\CbKkGDvLt;
use App\CsKdDvLt;
use App\KkGDvLtCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvLtController extends Controller
{
    public function index($hang)
    {
        $itemsPerPage = 4;

        $ksrd = CsKdDvLt::where('loaihang',$hang)
            ->paginate($itemsPerPage);

        //dd($ksrd);

        //dd(getAddMap('86A Trần Phú- Thành Phố Nha Trang'));
        return view('dvlt.index')
            //->withCustomers($ksrd)
            ->with('ksrd',$ksrd)
            ->with('hang',$hang)
            ->with('pageTitle','Danh sách cơ sở kinh doanh cung cấp dịch vụ lưu trú');
    }


    public function show($macskd)
    {
        $model= CsKdDvLt::where('macskd',$macskd)
            ->first();
        //dd($model);
        $modelkk = CbKkGDvLt::where('macskd',$macskd)
            ->first();
        if(isset($modelkk)) {
            $modelkkct = KkGDvLtCt::where('mahs', $modelkk->mahs)
                ->get();
        }else
            $modelkkct = '';
        $modelk = CsKdDvLt::where('macskd','<>',$macskd)
            ->where('loaihang',$model->loaihang)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();
        return view('dvlt.show')
            ->with('model',$model)
            ->with('modelkk',$modelkk)
            ->with('modelkkct',$modelkkct)
            ->with('modelk',$modelk)
            ->with('pageTitle','Thông tin cơ sở kinh doanh');
    }

}
