<?php

namespace App\Http\Controllers;

use App\CbKkDvVtXtx;
use App\DonViDvVt;
use App\KkDvVtXtxCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvVtXtxController extends Controller
{

    public function index()
    {
        $itemsPerPage = 8;

        $dnvt = DonViDvVt::where('dvxtx',1)
            ->paginate($itemsPerPage);

        return view('dvvtxtx.index')
            ->with('dnvt',$dnvt)
            ->with('pageTitle','Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe taxi');
    }

    public function show($masothue)
    {
        $model = DonViDvVt::where('masothue',$masothue)
            ->first();

        $modelkk = CbKkDvVtXtx::where('masothue',$masothue)
            ->first();
        //dd($masothue);
        if(isset($modelkk))
            $modelkkct = KkDvVtXtxCt::where('masokk',$modelkk->masokk)
                ->get();
        else
            $modelkkct = '';

        $modelk = DonViDvVt::where('dvxtx',1)
            ->where('masothue','<>',$masothue)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();

        return view('dvvtxtx.show')
            ->with('model',$model)
            ->with('modelkk',$modelkk)
            ->with('modelkkct',$modelkkct)
            ->with('modelk',$modelk)
            ->with('pageTitle','Thông tin doanh nghiệp cung cấp dịch vụ vận tải taxi');
    }


}
