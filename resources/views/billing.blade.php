@extends('layout')


@section('content')
    
    <div class="container-fluid py-4">

      <div class="row">
        <div class="col-md-12 mx-auto mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">Billing Information</h6>
             
            </div>
           <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0 m-2">
                <table class="display responsive nowrap" id="billing">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mobile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Apartment</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Package</th>           
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Amount(Ksh)</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Until</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                      <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                  </thead>
                    <tbody>

                  {{-- @if(count($data) == 0)
                  <p class="text-center">No Information found!</p>
                  @endif --}}
                  
                  @foreach($clients as $client)
                         
                   <tr>
                      <td>                     
                        <a href="/manage/{{$client->id}}/view" class="text-secondary font-weight-bold text-xs text-decoration-none" data-toggle="tooltip" data-original-title="View user"><h6 class="mb-0 text-sm">{{$client->name}}</h6></a>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{"+254".$client->phone}}</p>
                      </td>

                      <td class="align-middle">
                         <p class="text-xs font-weight-bold mb-0">{{$client->apartment}}</p>
                      </td>
                     
                      <td class="align-middle text-sm">
                        <span class="text-secondary text-xs font-weight-bold">{{$client->payment ?? 'N/A'}}</span>
                      </td>
                      <td class="align-middle  text-sm">
                        <span class="text-secondary text-xs font-weight-bold">{{$client->package ?? 'N/A'}}</span>
                      </td>
                      <td class="align-middle ">
                        <span class="text-secondary text-xs font-weight-bold">{{$client->amount ?? 'N/A' }}</span>
                      </td>
                       @php
                       $dateValue = strtotime($client->until);
                       $until = date("d/m/Y", $dateValue);
                      @endphp
                        <td class="align-middle">
                          @if($until ==='01/01/1970')
                            <p class="text-xs font-weight-bold mb-0">{{'N/A'}}</p>
                          @else
                         <p class="text-xs font-weight-bold mb-0">{{$until}}</p>
                         @endif
                      </td>

                    @php
                      $dateValue = strtotime($client->until);
                      $month = date("m", $dateValue);
                    @endphp  

                  @if($month < date('m'))
                   <td class="text-primary text-xs font-weight-bold"> 
                          <span class="btn-default bg-danger text-white border rounded py-1 px-2 me-4 shadow-sm text-decoration-none">
															<i class="fa fa-wrench"></i>&ensp;Inactive
												 </span>
                        </td>
                  @else
                    <td class="text-primary text-xs font-weight-bold"> 
                          <span class="btn-default bg-success text-white border rounded py-1 px-2 me-4 shadow-sm text-decoration-none">
															<i class="fas fa-wifi"></i>&ensp;Active
												 </span>
                        </td>
                      
                  @endif
                    


                         
                       
      
                       <td class="text-secondary text-xs font-weight-bold">      
												<a href="/billing/{{$client->id}}/pay" class="btn-default bg-secondary text-white border rounded p-1 me-4 shadow-sm text-decoration-none">
															<i class="fa fa-bookmark-o"></i>&ensp;Record Payment
												 </a>
                         
                         
												<a href="#" class="btn-default bg-info text-white border rounded p-1 me-4 shadow-sm text-decoration-none">
													<i class="fa fa-bell-o"></i>&ensp;Send Reminder
													</a> 
							           </td>
                        
                         
                    </tr> 
                        
                  @endforeach
                      
                  </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endsection