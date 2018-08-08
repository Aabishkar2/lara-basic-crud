<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use App\Models\Country;
class CityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('city');
    }

    public function add()
    {
        
        $data['country'] = Country::getAll();
        return view('addcity', $data);
    }

    public function addAction(Request $request)
    {
        $city = new city;
        $city->name = $request->name;
        $city->country = $request->country;
        $city->display_order = $request->order;
        $city->status = $request->status;
        $city->save();
        return redirect('city');
    }

    public function edit(Request $request)
    {
        $cityID = $request->id;
        $data['result'] = City::getDetail($cityID);
        $data['country'] = Country::getAll();
        return view('editcity', $data);

    }

    public function update(Request $request)
    {
        $city = City::find($request->id);
        $city->name = $request->name;
        $city->country = $request->country;
        $city->display_order = $request->order;
        $city->status = $request->status;
        $city->save();
        return redirect('city');
    }

    public function delete(Request $request)
    {
        $city = City::find($request->id);
        $city->delete();
        return redirect('city');
    }
   /*  public function editProfile($id)
    {
      $names = DB::table('countries')->pluck('name'); 
      return view('editprofile', ['name' => $names]);
    }
    */

}

