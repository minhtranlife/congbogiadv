<?php

namespace App\Http\Controllers;

use App\CbKkDvVtKhac;
use App\DonViDvVt;
use App\KkDvVtKhacCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvVtChController extends Controller
{

    public function index()
    {
        $itemsPerPage = 8;

        $dnvt = DonViDvVt::where('dvk',1)
            ->paginate($itemsPerPage);

        return view('dvvtch.index')
            ->with('dnvt',$dnvt)
            ->with('pageTitle','Danh sách doanh nghiệp cung cấp dịch vụ vận tải chở hàng');
    }

    public function show($masothue)
    {
        $model = DonViDvVt::where('masothue',$masothue)
            ->first();

        $modelkk = CbKkDvVtKhac::where('masothue',$masothue)
            ->first();
        //dd($masothue);
        if(isset($modelkk))
            $modelkkct = KkDvVtKhacCt::where('masokk',$modelkk->masokk)
                ->get();
        else
            $modelkkct = '';

        $modelk = DonViDvVt::where('dvk',1)
            ->where('masothue','<>',$masothue)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();

        return view('dvvtch.show')
            ->with('model',$model)
            ->with('modelkk',$modelkk)
            ->with('modelkkct',$modelkkct)
            ->with('modelk',$modelk)
            ->with('pageTitle','Thông tin doanh nghiệp cung cấp dịch vụ vận tải chở hàng');
    }


}
