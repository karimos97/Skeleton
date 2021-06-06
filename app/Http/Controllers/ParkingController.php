<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Parking;
use App\Models\carInfo;
use App\Models\Contrats;
use App\Models\CarRentHestory;
use App\Models\SecondDriver;
use DB;
use Carbon\Carbon;

class ParkingController extends Controller
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
    public function index()
    {
        return view('pages.parking');
    }
    public function list(){ 
        $data= CarInfo::join('car_brands','car_brands.id','car_infos.band_id')
        ->join('car_models','car_models.id','car_infos.model_id')
        ->select(['car_infos.*','car_brands.brand_name',
        'car_models.model_name',DB::raw('(select id from contrats where contrats.matricule=car_infos.matricul order by id desc limit 1) as idContract '),
        DB::raw('(select dispo from parkings where car_id=car_infos.id) as dispo'),
        DB::raw('(select date_retourn from contrats where matricule=car_infos.matricul order by id desc limit 1) as retDate')]);
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
        $sorti=Carbon::createFromFormat('d/m/Y H:i',strval($request->dateSortie))->toDateTimeString();
        $return=Carbon::createFromFormat('d/m/Y H:i',strval($request->dateReturn))->toDateTimeString();
        $car=CarInfo::find($request->voiture);

        if($request->Cfname){
            $dtp=Carbon::createFromFormat('d/m/Y',strval($request->date_permis))->toDateTimeString();
            $sc=SecondDriver::create(['fname'=>$request->Cfname,
                                      'lname'=>$request->Cname,
                                      'permis'=>$request->Cpermis,
                                      'date_permis'=>$dtp,
                                      'LieuPermis'=>$request->lieuPermis,
                                      'ncin'=>$request->Ccin]);
        }
        $cert=Contrats::create(['matricule'=>$car->matricul,
        'duree'=>intval($request->duree),
        'date_sorti'=>$sorti,
        'date_retourn'=>$return,
        'locationPlace'=>'Al Hoceima',
        'current_km'=>intval($request->kilometrage),
        'location_return'=>'Al Hoceima',
        'day_cost'=>floatval($request->cost),
        'total_cost'=>floatval($request->total),
        'avance'=>floatval($request->avance),
        'rest'=>floatval($request->rest),
        'client_id'=>intval($request->client),
        'client_2'=>@$sc->id,
        'user_id'=>1]);
        Parking::where('car_id',$car->id)->update(['dispo'=>0]);
        CarRentHestory::create(['matricule'=>$car->matricul,'date_rent'=>$sorti,'date_retour'=>$return,'dure'=>intval($request->duree),'client_id'=>intval($request->client),'user_id'=>1]);
        
        return response()->json(['Message'=>'Contras Est Ajouter avec Success']);

    }

    public function returnCar(Request $request){
        //dd($request->all());
        $car=CarInfo::find(intval($request->car));
        Contrats::where('matricule',$car->matricul)->update(['date_retourn'=>Carbon::createFromFormat('d/m/Y',strval($request->date))->toDateString(),'resturn_km'=>$request->kilo,'rest'=>$request->rest]);
        Parking::where('car_id',intval($request->car))->update(['dispo'=>1]);
   
        return response()->json(['Message'=>'La Voiture a etes retourner avec success']);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Parking::find($id)->toJson();
    }
    public function getMatricules(Request $request){
        return CarInfo::where('matricul', 'LIKE', '%' . $request->get('q') . '%')->paginate(10);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Parking::find($id)->toJson();
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
        return Parking::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cn=Contrats::find($id);
        $car=carInfo::where('matricul',$cn->matricule)->first();
        Parking::where('car_id',intval($car->id))->update(['dispo'=>1]);
         $cn->delete();
         return response()->json(['Message'=>'La Contras est Supprimer Avec Success']);
    }
}
