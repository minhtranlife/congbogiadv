<?php

namespace App\Http\Controllers;

use App\CbKkDvVtXb;
use App\DonViDvVt;
use App\KkDvVtXbCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvVtXbController extends Controller
{

    public function index()
    {
        $itemsPerPage = 8;

        $dnvt = DonViDvVt::where('dvxb',1)
            ->paginate($itemsPerPage);

        return view('dvvtxb.index')
            ->with('dnvt',$dnvt)
            ->with('pageTitle','Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe buýt');
    }


    public function show($masothue)
    {
        $model = DonViDvVt::where('masothue',$masothue)
            ->first();

        $modelkk = CbKkDvVtXb::where('masothue',$masothue)
            ->first();
        //dd($masothue);
        if(isset($modelkk))
            $modelkkct = KkDvVtXbCt::where('masokk',$modelkk->masokk)
                ->get();
        else
            $modelkkct = '';

        $modelk = DonViDvVt::where('dvxb',1)
            ->where('masothue','<>',$masothue)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();

        return view('dvvtxb.show')
            ->with('model',$model)
            ->with('modelkk',$modelkk)
            ->with('modelkkct',$modelkkct)
            ->with('modelk',$modelk)
            ->with('pageTitle','Thông tin doanh nghiệp cung cấp dịch vụ vận tải xe buýt');
    }

}
