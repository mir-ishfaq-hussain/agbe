<?php

namespace App\Http\Controllers;
use App\Models\State;
use App\Models\City;
use App\Models\Country;


use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function getStates($country_id)
    {
        $states = State::where('country_id', $country_id)->get();
        return response()->json($states);
    }

    public function getCities($state_id)
    {
        $cities = City::where('state_id', $state_id)->get();
        return response()->json($cities);
    }

    public function getCountries()
    {

        // echo "test";
        $states = Country::all();
        return response()->json($states);
    }
}
