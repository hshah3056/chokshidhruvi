<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('admin-panel.clients.index',compact('clients'));
    }

    public function create()
    {
        $states = State::active()->get();
        $countries = Country::get();
        return view('admin-panel.clients.create',compact('states','countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
                'birth_date' => 'required',
                'client_name' => 'required',
                'contact_no' => 'required',
                'gender' => 'required',
                'email_id' => 'required',
                'package' => 'required',
                'address' => 'required',
                'pin_code' => 'required',
                'client_name' => 'required',
                'city' => 'required',
                'country_id' => 'required',
                'state_id' => 'required',
        ],[
            "country_id.required" => 'Country is required',
            "state_id.required" => 'State is required'
        ]);

        $clientId = rand('10000', '99999');

//        dd($request->email);
         Client::create([
            'name' => $request->client_name,
            'birth_date' => $request->birth_date,
            'client_id' => $clientId,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'email_id' => $request->email_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'pin_code' => $request->pin_code,
            'city' => $request->city,
            'concern' => $request->concern,
            'package' => $request->package,
            'gender' => $request->gender
        ]);

        return redirect()->route('admin-client-list')->with(['success' => 'your records are successfully updated..!']);

    }

    public function edit($id)
    {
        $client = Client::where('id',$id)->first();
        $states = State::active()->get();
        $countries = Country::get();
        return view('admin-panel.clients.edit',[
            'client' => $client,
            'states' => $states,
            'countries' => $countries
        ]);
    }

    public function update(Request $request, $id)
    {
        Client::where('id',$id)->update([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
            'email_id' => $request->email_id,
            'country_id' => $request->country_id,
            'state_id' => $request->state_id,
            'pin_code' => $request->pin_code,
            'city' => $request->city,
            'concern' => $request->concern,
            'package' => $request->package,
            'gender' => $request->gender
        ]);
        return redirect()->route('admin-client-list')->with(['success' => 'Your Records Are Saved with Successfully..!!']);
    }
}
