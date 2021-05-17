<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clients;
use DataTables;

class ListedClientController extends Controller
{
    public function index(){
        return view('pages.ClientListed');
    }
    public function banedData(){
       $data= Clients::where('listed',1)->get();
        return Datatables::of($data)->toJson();

    }
    public function ban($id){
        //dd(Clients::find($id));
        Clients::find($id)->update(['listed'=>1]);
        return response()->json(['Message'=>'Cet Utilisateur est Bloqué']);
    }
    public function unban($id){
        //dd(Clients::find($id));
        Clients::find($id)->update(['listed'=>1]);
        return response()->json(['Message'=>'Cet Utilisateur est Restirer de la liste noire']);
    }
}
