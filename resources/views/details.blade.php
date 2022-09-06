@extends('layout')

 @php
  if (count($bill) == 0 && count($until) == 0) {
    $bill = [0];
    $until = [0];

  }
  @endphp

@section('content')
<main class="main-content  mt-0">
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url({{asset('img/curved-images/curved-6.jpg')}});">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h3 class="text-white mb-2 mt-5">Personal information!</h3>
            <p class="text-lead text-white">Client information</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto w-75" >
          <div class="card z-index-0">   
            <div class="card-body" >

<section style="background-color: #eee;">
  <div class="container py-5">
    <div class="row">
      <div class="col">
        <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#">Manage</a></li>
            <li class="breadcrumb-item"><a href="#">Client</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="{{asset($client->avatar ? asset('storage/' . $client->avatar): asset('/img/avatar.png'))}}" alt="avatar" class="rounded-circle img-fluid" style="width: 100px;height:100px;object-fit:cover;">
            <h5 class="my-3">{{$client['name']}}</h5>
            <p class="text-muted mb-1">{{$client['apartment']. ' Apartment'}}</p>
            <p class="text-muted mb-4">{{$client['street']. ' Street'}}</p>
            <div class="d-flex justify-content-center mb-2">
             <a href="/manage/{{$client->id}}/edit"><button type="button" class="btn btn-primary">Edit</button></a> 
              <button type="button" class="btn btn-outline-primary ms-1">Message</button>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-map-marker-alt fa-lg text-warning"></i>
                <p class="mb-0">{{$client['street']. ' Street'}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3 text-nowrap">
                <i class="fa fa-building fa-lg" style="color: #333333;"></i>
                <p class="mb-0">{{$client['apartment']. ' Apartment'}}</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-stream fa-lg" style="color: #55acee;"></i>
                <p class="mb-0">

                  @php
                      $dateValue = strtotime($until[0]);
                      $month = date("m", $dateValue);
                  @endphp 

                  @if($month < date('m'))
                   {{'No Subscription!'}}
                  @else
                 {{$bill[0] ?? 'No subscription!'}}
                  @endif
                </p>
              </li>
             
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="fa fa-calendar-alt fa-lg" style="color: #3b5998;"></i>
                <p class="mb-0">{{date_format($client['created_at'],"d/m/Y")}}</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$client['name']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$client['email']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{'+254'.$client['phone']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Package</p>
              </div>
              
              <div class="col-sm-9">
                <p class="text-muted mb-0"> 
                  @php
                      $dateValue = strtotime($until[0]);
                      $month = date("m", $dateValue);
                  @endphp  

                  @if($month < date('m'))
                 {{'No Subscription!'}}
                  @else
                 {{$bill[0] ?? 'No subscription!'}}
                  @endif
                  
                </p>
              </div>
              
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">{{$client['street']. ' Street'}}</p>
              </div>
            </div>
          </div>
        </div>
       
        <div class="col-lg-12">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">Transactions</h6>
                </div>
                <div class="col-6 text-end">
                  <button class="btn btn-outline-primary btn-sm mb-0">View All</button>
                </div>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                
                 @foreach($billing as $bill)
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-1 text-dark font-weight-bold text-sm">{{$bill->until}}</h6>
                    <span class="text-xs">{{$bill->package}}</span>
                  </div>
                  <div class="d-flex align-items-center text-sm">
                    {{'Ksh.'.$bill->amount}}
                    <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4"><i class="fas fa-file-pdf text-lg me-1"></i> PDF</button>
                  </div>
                </li>
                @endforeach
               
             
               
              </ul>
            </div>
          </div>
        </div>       
      </div>
    </div>
  </div>
</section>
             
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
     