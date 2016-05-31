<?php

namespace App\Http\Controllers;

use App\CbKkGDvLt;
use App\CsKdDvLt;
use App\DmHhTn;
use App\DmHhXnK;
use App\DonViDvVt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\GeneralConfigs;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        $ksrd = CsKdDvLt::orderByRaw("RAND()")
            ->take(4)
            ->get();

        $dnvtxk = DonViDvVt::where('dvxk',1)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();
        //dd($dnvtxk);
        $dnvtxtx = DonViDvVt::where('dvxtx',1)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();
        $dnvtxb = DonViDvVt::where('dvxb',1)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();
        $dnvtk = DonViDvVt::where('dvk',1)
            ->orderByRaw("RAND()")
            ->take(4)
            ->get();
        return view('dashboard')
            ->with('ksrd',$ksrd)
            ->with('dnvtxk',$dnvtxk)
            ->with('dnvtxtx',$dnvtxtx)
            ->with('dnvtxb',$dnvtxb)
            ->with('dnvtk',$dnvtk)
            ->with('pageTitle', 'Công bố giá dịch vụ');

    }



}
