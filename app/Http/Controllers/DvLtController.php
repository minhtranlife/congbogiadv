<?php

namespace App\Http\Controllers;

use App\CompanyDvLt;
use App\CtKkGdvLt;
use App\KkGdvLt;
use App\TtQlDvLt;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DvLtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $model = CompanyDvLt::all();

        return view('dvlt.index')
            ->with('model',$model)
            ->with('pageTitle','Khách sạn - Nhà nghỉ');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($masothue)
    {
        $idhs = KkGdvLt::where('masothue',$masothue)
            ->where('trangthai','Duyệt')
            ->max('id');
        $modelhs = KkGdvLt::where('id',$idhs)->first();
        $model = CtKkGdvLt::where('idkk',$idhs)
            ->get();
        $modelttp = TtQlDvLt::where('masothue',$masothue)
            ->get();
        foreach($model as $ct){
            $this->getTTP($modelttp,$ct);
        }
        //dd($model);
        return view('dvlt.show')
            ->with('model',$model)
            ->with('modelhs',$modelhs)
            ->with('pageTitle','Thông tin dịch vụ');
    }

    public function getTTP($ttps,$array){
        foreach($ttps as $ttp){
            if($ttp->maloaip == $array->maloaip) {
                $array->loaip = $ttp->loaip;
                $array->qccl = $ttp->qccl;
                $array->sohieu = $ttp->sohieu;
                $array->ghichu = $ttp->ghichu;
            }
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
