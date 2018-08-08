<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\State;

class CountryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('country');
    }

    public function add()
    {
        $data['state'] = State::getAll();
        return view('addcountry', $data);
    }

    public function addAction(Request $request)
    {
        $country = new Country;
        $country->code = $request->code;
        $country->name = $request->name;
        $country->state = $request->state;
        $country->display_order = $request->order;
        $country->status = $request->status;
        $country->save();
        return redirect('country');
    }

    public function edit(Request $request)
    {
        $countryID = $request->id;
        $data['result'] = Country::getDetail($countryID);
        $data['state'] = State::getAll();
        return view('editcountry', $data);
    }

    public function update(Request $request)
    {
        $country = Country::find($request->id);
        $country->code = $request->code;
        $country->name = $request->name;
        $country->display_order = $request->order;
        $country->status = $request->status;
        $country->save();
        return redirect('country');
    }

    public function delete(Request $request)
    {
        $country = Country::find($request->id);
        $country->delete();
        return redirect('country');
    }

}
