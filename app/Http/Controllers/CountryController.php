<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function list(Request $request)
    {
        return ['results' => Country::select(['id', 'name as text'])
        ->where('name', 'LIKE' , '%'.$request->input('term').'%')
        ->take(20)
        ->get()];
    }

    public function visitedCounty(Request $request)
    {
        return $request->user()->visitedCountries()->get();
    }

    public function toVistiCountry(Request $request)
    {
        return $request->user()->ToVisitCountries()->get();

    }

    // public function addVisitedCountry(Request $request)
    // {
    //     $country = Country::findOrFile($request->input('countryID'));
    //     $request->user()->visitedCounty()->attach(($request->input('countryID')));
    //     $request->user()->save();
    //     return ['status' => 'success'];
    // }
}
