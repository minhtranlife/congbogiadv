<?php

namespace App\Http\Controllers;

use App\CbKkDvVtXk;
use App\DmDvQl;
use App\DonViDvVt;
use App\KkDvVtXkCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvVtXkController extends Controller
{
    public function index()
    {
        $itemsPerPage = 4;

        $dnvt = DonViDvVt::where('dvxk',1)
            ->where('trangthai','Kích hoạt')
            ->paginate($itemsPerPage);
        $vantai = DonViDvVt::where('dvxk',1)
            ->where('trangthai','Kích hoạt')
            ->get();
        return view('dvvtxk.index')
            ->with('dnvt',$dnvt)
            ->with('vantai',$vantai)
            ->with('ma','all')
            ->with('pageTitle','Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe khách');
    }

    public function show($masothue)
    {
        $model = DonViDvVt::where('masothue',$masothue)
            ->first();

        $modelkk = CbKkDvVtXk::where('masothue',$masothue)
            ->first();
        //dd($masothue);
        if(isset($modelkk))
            $modelkkct = KkDvVtXkCt::where('masokk',$modelkk->masokk)
                ->get();
        else
            $modelkkct = '';

        $modelk = DonViDvVt::where('dvxk',1)
            ->where('masothue','<>',$masothue)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();
        $modeldvql = DmDvQl::where('maqhns',$model->cqcq)
            ->first();

        return view('dvvtxk.show')
            ->with('model',$model)
            ->with('modelkk',$modelkk)
            ->with('modelkkct',$modelkkct)
            ->with('modelk',$modelk)
            ->with('modeldvql',$modeldvql)
            ->with('pageTitle','Thông tin doanh nghiệp cung cấp dịch vụ vận tải chở khách');

    }

    public function view($ma)
    {
        $itemsPerPage = 4;
        if($ma == 'all')
            $dnvt = DonViDvVt::where('dvxk',1)
                ->where('trangthai','Kích hoạt')
                ->paginate($itemsPerPage);
        else
            $dnvt = DonViDvVt::where('masothue',$ma)
                ->paginate(1);
        $vantai = DonViDvVt::where('dvxk',1)
            ->where('trangthai','Kích hoạt')
            ->get();
        return view('dvvtxk.index')
            ->with('dnvt',$dnvt)
            ->with('vantai',$vantai)
            ->with('ma',$ma)
            ->with('pageTitle','Danh sách doanh nghiệp cung cấp dịch vụ vận tải xe khách');
    }

}
