<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use App\Models\carInfo;
use App\Models\carGallery;
use App\Models\Parking;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.carList');
    }
    public function list(){
        $data=CarInfo::join('car_brands','car_brands.id','car_infos.band_id')
                       ->join('car_models','car_models.id','car_infos.model_id')
                       ->select(['car_infos.*','car_brands.brand_name','car_models.model_name',DB::raw('(select path from car_galleries join car_infos on car_infos.id = car_galleries.car_id limit 1) pic')])->get()
                       ;
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
        
        $info= CarInfo::create(['matricul'=>$request->matricule,
        'body_number'=>$request->vin,
        'color'=>$request->color,
        'date_buy'=>Carbon::createFromFormat('d/m/Y',strval($request->dateAchat))->toDateString(),
        'maisson_achat'=>$request->maison,
        'rate_credit'=>floatval($request->creditRate),
        'car_price'=>floatval($request->prixAchat),
        'credit_date'=>Carbon::createFromFormat('d/m/Y',strval($request->dateCredit))->toDateString(),
        'date_vente'=>Carbon::createFromFormat('d/m/Y',strval($request->dateVente))->toDateString(),
        'prix_vente'=>floatval($request->prixVente),
        'transmission'=>$request->trans[0],
        'carrburant'=>$request->carb,
        'puissance'=>$request->puissance,
        'band_id'=>$request->brand,
        'model_id'=>$request->model,
        'category'=>$request->type,
        'observation'=>$request->note,
        'user_id'=>1]);
        Parking::create(['car_id'=>$info->id,'dispo'=>1,'user_id'=>1]);
        if ($request->photos) {
            foreach ($request->photos as $key => $img) {
                $path = uniqid().'.'.$img->extension();
                $img->move(public_path('cars/pictures'), $path);
                    //$path = str_replace(substr($path, 0, 6) , '', $path);

                $primg = carGallery::create(['car_id'=>$info->id,'path' => $path,'user_id'=>1]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return CarInfo::join('car_brands','car_brands.id','car_infos.band_id')
        ->join('car_models','car_models.id','car_infos.model_id')
        ->select(['car_infos.*','car_brands.brand_name','car_models.model_name'])
        ->where('car_infos.id',$id)->get()->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return CarInfo::find($id)->toJson();
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
        return CarInfo::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return CarInfo::find($id)->delete();
    }
}
