<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;
use App\Models\Country;

class StateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('state');
    }

    public function add()
    {
        return view('addstate');

    }

    public function addAction(Request $request)
    {
        $state = new state;
        $state->name = $request->name;
        $state->code = $request->code;
        $state->country_id = $request->countryid;
        $state->display_order = $request->order;
        $state->status = $request->status;
        $state->save();
        return redirect('state');
    }

    public function edit(Request $request)
    {
        $stateID = $request->id;
        $data['result'] = State::getDetail($stateID);
        $data['country'] = Country::getAll();
        return view('editstate', $data);

    }

    public function update(Request $request)
    {
        $state = State::find($request->id);
        $state->name = $request->name;
        $state->code = $request->code;
        $state->country_id = $request->countryid;
        $state->display_order = $request->order;
        $state->status = $request->status;
        $state->save();
        return redirect('state');
    }

    public function delete(Request $request)
    {
        $state = State::find($request->id);
        $state->delete();
        return redirect('state');
    }

}
