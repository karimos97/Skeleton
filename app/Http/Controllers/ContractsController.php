<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Contrats;
use App\Models\CarInfo;
use DB;
class ContractsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function list(){
        $data=Contrats::all();
        return Datatables::of($data)->toJson();
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
        return Contrats::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Contrats::find($id)->toJson();
    }

    public function printContact($id){
        $data=CarInfo::join('car_brands','car_brands.id','car_infos.band_id')
        ->join('contrats','contrats.matricule','car_infos.matricul')
        ->join('clients','clients.id','contrats.client_id')
        ->join('car_models','car_models.id','car_infos.model_id')
        ->select(['car_infos.*','clients.*','car_models.model_name',
        DB::raw('(select dispo from parkings where car_id=car_infos.id) as dispo'),
        DB::raw('(select date_retourn from contrats where matricule=car_infos.matricul order by date_retourn desc limit 1) as retDate')])->get();
        return view('pages.contrat',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Contrats::find($id)->toJson();
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
        return Contrats::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Contrats::find($id)->delete();
    }
}
