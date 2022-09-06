
@extends('layout')


@section('content')
    
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 d-flex justify-content-between">
              <h6>Current Subscribers</h6>

              <a class="btn btn-secondary btn-sm" href="/addClient" role="button">
                 <i class="fas fa-plus me-2"></i>
                 Add Client
              </a>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
           
                <table class="display" id="billing">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mobile</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Email</th> 
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Location</th>                  
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Since</th>
                     <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  {{-- @if(count($clients) == 0)
                  <p class="text-center">No Information found!</p>
                  @endif --}}
                  @foreach($clients as $client)           
                    <tr>
                       <td>
                            <a href="/manage/{{$client->id}}/view" class="text-secondary font-weight-bold text-xs">{{$client['name']}}</a>                   
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{"+254".$client['phone']}}</p>
                      </td>

                      <td>
                         <p class="text-xs font-weight-bold mb-0">{{$client['email']}}</p>
                      </td>
                     
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$client['street']}}</p>
                      </td>

                      <td class="align-middle">
                          <span class="text-secondary text-xs font-weight-bold">{{date_format($client['created_at'],"d/m/Y")}}</span>
                      </td>
                       <td class="text-secondary text-xs font-weight-bold d-flex justify-content-between">
												<a href="/manage/{{$client->id}}/edit">
                          <i class="fas fa-user-edit text-secondary text-sm" title="Edit"></i>
                          Edit
                        </a>
												<form method="POST" action="/manage/{{$client->id}}">
                          @csrf
                          @method("DELETE")
                          
                          <button type="submit" class="text-secondary font-weight-bold text-xs border-0 bg-white"> <i class="fa fa-trash text-secondary text-sm"title="delete"></i></button>
                        </form> 
							           </td>
                    </tr>
                          
                    @endforeach
                  </tbody>
                </table>       
            </div>
          </div>
        </div>
      </div>

     @endsection