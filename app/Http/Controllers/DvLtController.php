<?php

namespace App\Http\Controllers;

use App\CbKkGDvLt;
use App\CsKdDvLt;
use App\DmDvQl;
use App\KkGDvLt;
use App\KkGDvLtCt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvLtController extends Controller
{
    public function index(Request $request){
        $inputs = $request->all();

        $kk = isset($inputs['kekhai']) ? $inputs['kekhai'] : 'KK';
        $hang = isset($inputs['hang']) ? $inputs['hang'] : '3';
        $maks = isset($inputs['cskd']) ? $inputs['cskd'] : 'all';


        $itemsPerPage = 4;
        if($kk == 'KK'){
            $ksrd = CbKkGDvLt::join('cskddvlt', 'cbkkgdvlt.macskd', '=', 'cskddvlt.macskd')
                ->groupby('cbkkgdvlt.macskd')
                ->where('loaihang',$hang)
                ->paginate($itemsPerPage);
            if($maks !='all')
                $ksrd = $ksrd->where('macskd',$maks);
            $hotel = CbKkGDvLt::join('cskddvlt', 'cbkkgdvlt.macskd', '=', 'cskddvlt.macskd')
                ->groupby('cbkkgdvlt.macskd')
                ->where('loaihang',$hang)
                ->get();

        }else{
            $ksrd = CsKdDvLt::where('loaihang',$hang)
                ->paginate($itemsPerPage);
            if($maks !='all')
                $ksrd = $ksrd->where('macskd',$maks);
            $hotel = CsKdDvLt::where('loaihang', $hang)
                ->get();

        }

        return view('dvlt.indexshow')
            ->with('kk',$kk)
            ->with('ksrd',$ksrd)
            ->with('hang',$hang)
            ->with('hotel',$hotel)
            ->with('maks',$maks)
            ->with('pageTitle','Danh sách cơ sở kinh doanh cung cấp dịch vụ lưu trú');
    }

    /*public function index($hang)
    {
        $itemsPerPage = 4;
            $ksrd = CsKdDvLt::where('loaihang',$hang)
            ->paginate($itemsPerPage);

        $hotel = CsKdDvLt::where('loaihang',$hang)
            ->get();

        return view('dvlt.index')
            //->withCustomers($ksrd)
            ->with('ksrd',$ksrd)
            ->with('hang',$hang)
            ->with('hotel',$hotel)
            ->with('maks','all')
            ->with('pageTitle','Danh sách cơ sở kinh doanh cung cấp dịch vụ lưu trú');
    }*/


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
        $modeldvql = DmDvQl::where('maqhns',$model->cqcq)
            ->first();
        return view('dvlt.show')
            ->with('model',$model)
            ->with('modelkk',$modelkk)
            ->with('modelkkct',$modelkkct)
            ->with('modelk',$modelk)
            ->with('modeldvql',$modeldvql)
            ->with('pageTitle','Thông tin cơ sở kinh doanh');
    }

    public function view($hang,$cskd){
        $itemsPerPage = 4;
        if($cskd == 'all')
            $ksrd = CsKdDvLt::where('loaihang',$hang)
                ->paginate($itemsPerPage);
        else
            $ksrd = CsKdDvLt::where('macskd',$cskd)
            ->paginate(1);

        $hotel = CsKdDvLt::where('loaihang',$hang)
            ->get();

        return view('dvlt.index')
            ->with('ksrd',$ksrd)
            ->with('hang',$hang)
            ->with('hotel',$hotel)
            ->with('maks',$cskd)
            ->with('pageTitle','Danh sách cơ sở kinh doanh cung cấp dịch vụ lưu trú');
    }

    public function viewct($macskd){
        $model = CsKdDvLt::where('macskd',$macskd)
            ->first();
        $itemsPerPage = 10;
        $modelct = KkGDvLt::where('macskd',$macskd)
            ->orderBy('id', 'esc')
            ->where('trangthai','Duyệt')
            ->paginate($itemsPerPage);
        return view('dvlt.view')
            ->with('model',$model)
            ->with('modelct',$modelct)
            ->with('pageTitle','Giá phòng cơ sở kinh doanh');
    }

    public function getTTph(Request $request){
        $result = array(
            'status' => 'fail',
            'message' => 'error',
        );

        $inputs = $request->all();

        if(isset($inputs['mahs'])){

            $model = KkGDvLtCt::where('mahs',$inputs['mahs'])
                ->get();

            $result['message'] = '<tbody id="ttctgia">';
            if(count($model)>0) {
                foreach ($model as $key=>$tt) {
                    $result['message'] .= '<tr>';
                    $result['message'] .= '<td style="text-align: center">' . ($key +1). '</td>';
                    $result['message'] .= '<td>' . $tt->loaip.' - '.$tt->qccl. '</td>';
                    $result['message'] .= '<td>' . $tt->sohieu. '</td>';
                    $result['message'] .= '<td style="text-align: right">' . number_format($tt->mucgiakk) . '</td>';
                    $result['message'] .= '<td>' . $tt->ghichu . '</td>';
                    $result['message'] .= '</tr>';
                }
            }
            $result['message'] .= '</tbody>';
            $result['status'] = 'success';

        }

        die(json_encode($result));
    }

}
