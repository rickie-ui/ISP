<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ClientController extends Controller
{
    public function show()
    {
        return view('addClient');
    }

    //add new client

    public function store(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('clients', 'email')],
            'phone' => 'required|numeric',
            'apartment' => 'required',
            'houseno' => 'required',
            'street' => 'required'
        ]);


         if($request->hasFile('avatar')){
            $formFields['avatar'] = $request->file('avatar')->store('logos','public');
        }

         
        $formFields['user_id'] = auth()->id();

       


        Client::Create($formFields);



        return redirect('/manage')->with('message','Client added successfully!');
    }
}
