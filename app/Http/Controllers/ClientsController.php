<?php

namespace App\Http\Controllers;
use DataTables;
use Illuminate\Http\Request;
use App\Models\Clients;
use App\Models\Address;
use App\Models\Identity;
use App\Models\IdentityGallery;
use Carbon\Carbon;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.datatables');
    }
    public function list(){
        $data=Clients::where('listed',0)->get();
        return Datatables::of($data)->toJson();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $dt=Carbon::createFromFormat('d/m/Y',strval($request->date))->toDateString();

        $sex=$request->sex[0];
       $Cl= Clients::create(['fname'=>$request->fname,
                              'lname'=>$request->lname,
                              'sex'=>$sex,
                              'company'=>$request->company,
                              'date_birth'=>$dt,
                              'phone1'=>$request->phone,
                              'phone2'=>"",
                              'email'=>$request->email,
                              'observation'=>$request->note,
                              'user_id'=>1]);

            $adr=Address::create(['address'=>$request->address,
                                  'ville'=>$request->city,
                                  'country'=>$request->country,
                                  'zip_code'=>$request->zip,
                                  'client_id'=>$Cl->id,
                                  'user_id'=>1]);

            $id=Identity::create(['passport'=>$request->npassport,
                                  'pass_expire'=>date('Y-m-d'),
                                  'cin'=>$request->ncin,
                                  'cin_expire'=>date('Y-m-d'),
                                  'permis'=>$request->npermis,
                                  'permis_expire'=>date('Y-m-d'),
                                  'client_id'=>$Cl->id,'user_id'=>1]);
            $path = "/productImages/no-image.png";
            if ($request->permis) {
                foreach ($request->permis as $key => $img) {
                    $path = uniqid().'.'.$img->extension();
                    $img->move(public_path('Client/Identity/Permis'), $path);
                        $path = str_replace(substr($path, 0, 6) , '', $path);

                    $primg = IdentityGallery::create(['identityId'=>$id->id,'type' =>1, 'path' => $path]);
                }
            }

            if ($request->cin) {
                foreach ($request->cin as $key => $img) {
                    $path = uniqid().'.'.$img->extension();
                    $img->move(public_path('Client/Identity/Cin'), $path);
                        $path = str_replace(substr($path, 0, 6) , '', $path);

                    $primg = IdentityGallery::create(['identityId'=>$id->id,'type' =>2, 'path' => $path]);
                }
             }
             if ($request->passport) {
                foreach ($request->passport as $key => $img) {
                    $path = uniqid().'.'.$img->extension();
                    $img->move(public_path('Client/Identity/Pssport'), $path);
                        $path = str_replace(substr($path, 0, 6) , '', $path);

                    $primg = IdentityGallery::create(['identityId'=>$id->id,'type' =>3, 'path' => $path]);
                }
             }

            return response()->json(['Message'=>'New Client Added Successfuly','Error'=>false]);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Clients::join('addresses','addresses.client_id','clients.id')
                      ->join('identities','identities.client_id','clients.id')
                      ->join('countries','addresses.country','countries.id')
                      ->join('cities','cities.id','addresses.ville')
                      ->select('clients.id',
                               'clients.fname',
                               'clients.lname',
                               'clients.sex',
                               'clients.company',
                               'clients.date_birth',
                               'clients.phone1 as phone',
                               'clients.email',
                               'clients.observation as note',
                               'addresses.address',
                               'addresses.ville as city',
                               'addresses.country',
                               'addresses.zip_code',
                               'addresses.ville',
                               'countries.name as countryName',
                               'cities.name as cityName',
                               'identities.passport',
                               'identities.cin',
                               'identities.permis'
                               )->where('clients.id',$id)->first()->toJson();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Clients::join('addresses','addresses.client_id','clients.id')
                      ->join('identities','identities.client_id','clients.id')
                      ->select('clients.id',
                               'clients.fname',
                               'clients.lname',
                               'clients.sex',
                               'clients.company',
                               'clients.date_birth',
                               'clients.phone1 as phone',
                               'clients.email',
                               'clients.observation as note',
                               'addresses.address',
                               'addresses.ville as city',
                               'addresses.country',
                               'addresses.zip_code',
                               'identities.passport',
                               'identities.cin',
                               'identities.permis'
                               )->where('clients.id',$id)->toJson();


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

        $dt=Carbon::createFromFormat('Y-m-d',strval($request->date))->toDateString();

        $sex=$request->sex[0];
       $Cl= Clients::find($id)->update(['fname'=>$request->fname,
                              'lname'=>$request->lname,
                              'sex'=>$sex,
                              'company'=>$request->company,
                              'date_birth'=>$dt,
                              'phone1'=>$request->phone,
                              'phone2'=>"",
                              'email'=>$request->email,
                              'observation'=>$request->note,
                              'user_id'=>1]);

            $adr=Address::where('client_id',$id)->update(['address'=>$request->address,
                                  'ville'=>$request->city,
                                  'country'=>$request->country,
                                  'zip_code'=>$request->zip,
                                  'client_id'=>$id,
                                  'user_id'=>1]);

            $id=Identity::where('client_id',$id)->update(['passport'=>$request->npassport,
                                  'pass_expire'=>date('Y-m-d'),
                                  'cin'=>$request->ncin,
                                  'cin_expire'=>date('Y-m-d'),
                                  'permis'=>$request->npermis,
                                  'permis_expire'=>date('Y-m-d'),
                                  'client_id'=>$id,'user_id'=>1]);
            $path = "/productImages/no-image.png";
            $id=Identity::where('client_id',$id)->first();
            if($id){
                IdentityGallery::where('identityId',$id->id)->delete();
            }

            if ($request->permis) {
                foreach ($request->permis as $key => $img) {
                    $path = uniqid().'.'.$img->extension();
                    $img->move(public_path('Client/Identity/Permis'), $path);
                        $path = str_replace(substr($path, 0, 6) , '', $path);

                    $primg = IdentityGallery::create(['identityId'=>$id->id,'type' =>1, 'path' => $path]);
                }
            }

            if ($request->cin) {
                foreach ($request->cin as $key => $img) {
                    $path = uniqid().'.'.$img->extension();
                    $img->move(public_path('Client/Identity/Cin'), $path);
                        $path = str_replace(substr($path, 0, 6) , '', $path);

                    $primg = IdentityGallery::create(['identityId'=>$id->id,'type' =>2, 'path' => $path]);
                }
             }
             if ($request->passport) {
                foreach ($request->passport as $key => $img) {
                    $path = uniqid().'.'.$img->extension();
                    $img->move(public_path('Client/Identity/Pssport'), $path);
                        $path = str_replace(substr($path, 0, 6) , '', $path);

                    $primg = IdentityGallery::create(['identityId'=>$id->id,'type' =>3, 'path' => $path]);
                }
             }

            return response()->json(['Message'=>'Client Updated Successfuly','Error'=>false]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Clients::find($id)->delete();
    }
}
