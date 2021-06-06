<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Contrats;
use App\Models\carInfo;
use App\Models\Parking;
use App\Models\SecondDriver;
use DB;
class ContractsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
      $car=carInfo::find(Parking::find($id)->car_id);
        return Contrats::where('matricule',$car->matricul)->orderBy('id','Desc')->first()->toJson();
    }

    public function printContact($id){
        $data=carInfo::join('car_brands','car_brands.id','car_infos.band_id')
        ->join('contrats','contrats.matricule','car_infos.matricul')
        ->join('clients','clients.id','contrats.client_id')
        ->join('car_models','car_models.id','car_infos.model_id')
        ->join('addresses','addresses.client_id','clients.id')
        ->join('countries','addresses.country','countries.id')
        ->join('cities','cities.id','addresses.ville')
        ->join('identities','identities.client_id','clients.id')
        ->select('countries.name as Country','cities.name as City',
        'car_brands.brand_name as BrandName','car_models.model_name as Model',
        'addresses.*',
        'contrats.*','clients.*','identities.*',
        DB::raw('(select dispo from parkings where car_id=car_infos.id) as dispo'),
        DB::raw('(select fname from second_drivers where client_2=second_drivers.id) as Cfname'),
        DB::raw('(select lname from second_drivers where client_2=second_drivers.id) as Clname'),
        DB::raw('(select permis from second_drivers where client_2=second_drivers.id) as Cpermis'),
        DB::raw('(select ncin from second_drivers where client_2=second_drivers.id) as Cncin'),
        DB::raw('(select date_permis from second_drivers where client_2=second_drivers.id) as Cdate_permis'),
        DB::raw('(select LieuPermis from second_drivers where client_2=second_drivers.id) as CLieuPermis'),
        DB::raw('(select date_retourn from contrats where matricule=car_infos.matricul order by date_retourn desc limit 1) as retDate')
        )->where('contrats.id',$id)
    
        ->orderBy('contrats.id','Desc')->first();
       //dd($data);
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
