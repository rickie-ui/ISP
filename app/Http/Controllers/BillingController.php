<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use App\Models\Client;
use Illuminate\Support\Facades\DB;

class BillingController extends Controller
{   
    public function billing()
    {
           
    $filtered = DB::table('clients')
            ->leftJoin('transactions', 'clients.id', '=', 'transactions.client_id')
            ->select('clients.id','clients.name','clients.phone','clients.apartment','clients.houseno','transactions.package','transactions.client_id','transactions.payment','transactions.created_at','transactions.amount','transactions.until')
            // ->orderBy('transactions.created_at', 'desc')
            ->latest()
            ->get();

            $clients = $filtered->unique('name');
            
        ;
        return view('billing', ['clients' => $clients]);
    }

    public function edit(Client $client)
    {
        //$client = Client::get(); 

        return view('pay', ['client' => $client]);
    }
    

    //record payment
     public function store(Request $request, $id)
    {

        $formFields = $request->validate([
            'package' => 'required',
            'amount' => 'required|numeric',
            'payment' => 'required',
            'until' => 'required'
        ]);

      $client = Client::find($id);

      

      $formFields['client_id'] = $client->id;

     // dd( $formFields);

      Billing::firstOrCreate($formFields);
                                  

        return redirect('/billing')->with('message','Payment recorded successfully!');
    }

}


