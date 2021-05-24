<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Region;
use App\Models\Country;
class LocatizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getCountry(Request $request)
    {
        return Country::where('name', 'LIKE', '%' . $request->get('q') . '%')->paginate(10);
    }
    public function getCity(Request $request)
    {
        $region = Region::where('country_id', $request->country)->get(['id']);
        return City::where('name', 'LIKE', '%' . $request->get('q') . '%')
                   ->whereIn('region_id', $region)->paginate(10);
    }
}
