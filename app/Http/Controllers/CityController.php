<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use Yajra\DataTables\DataTables;

class CityController extends Controller
{
    public function index()
    {
        return view('cities.index');
    }

    public function getCities()
    {
        $cities = City::with('state.country')->select('cities.*');

        return DataTables::of($cities)
            ->addColumn('state', function ($city) {
                return $city->state->name;
            })
            ->addColumn('country', function ($city) {
                return $city->state->country->name;
            })
            ->make(true);
    }
}
