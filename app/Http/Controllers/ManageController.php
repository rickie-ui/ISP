<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Billing;
use Illuminate\Http\Request;

class ManageController extends Controller
{
    public function edit(Client $client)
    {
        return view('edit', ['client' => $client]);
    }
    //return client details
    public function show(Client $client)
    {
        $billing = Billing::latest()->where('client_id', '=', $client->id)->get();
         
        $bill = $billing->pluck('package');
        $until = $billing->pluck('until');
      
        return view('details', ['client' => $client, 'billing' => $billing, 'bill'=> $bill, 'until'=> $until]);
    }
    public function update(Request $request, Client $client)
    {

        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email'],
            'phone' => 'required|numeric',
            'apartment' => 'required',
            'houseno' => 'required',
            'street' => 'required'
        ]);

        if ($request->hasFile('avatar')) {
            $formFields['avatar'] = $request->file('avatar')->store('logos', 'public');
        }


        $client->update($formFields);

        return back()->with('message', 'Details updated successfully!');
    }

    //delete the client
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect('/manage');
    }

    //Manage Clients
    public function manage()
    {
        return view('manage', ['clients' => auth()->user()->clients()->get()]);
    }
}
