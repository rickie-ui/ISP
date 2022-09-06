<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Payment</title>
  {{-- bootstrap --}}
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  {{-- Custom css --}}
  <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
  
@extends('layout')

@section('content')

<div class="container">
<div class="d-lg-flex">
           
        <div class="box-1 bg-light user">
            <div class="d-flex align-items-center mb-3">
                <img src="{{asset($client->avatar ? asset('storage/' . $client->avatar): asset('/img/avatar.png'))}}" alt="avatar"
                    class="pic rounded-circle">
                <p class="ps-2 name" style="vertical-align:middle">{{$client->name}}</p>
            </div>
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Choose package</p>
                    <p class="fw-lighter"></p>
                </div>
                <p class="dis info my-3">Enjoy high speed internet broadband for the home to stay connected & watch your favorite entertainment.
                </p>
                <div class="radiobtn">
                    <input type="radio" name="box" class="val" id="one" value="2500">
                    <input type="radio" name="box" class="val" id="two" value="3500">
                    <input type="radio" name="box" class="val" id="three" value="4000">
                    <input type="radio" name="box" class="val" id="four" value="5000">
                    
                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Lite Plan
                                    </span>
                                    <span>Ksh.2500</span>
                                </div>
                                <span>Unlimited internet for a month 24/7 support</span>
                            </div>
                        </div>
                    </label>
                    <label for="two" class="box py-2 second">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                       Standard Plan
                                    </span>
                                    <span>Ksh.3500</span>
                                </div>
                                <span>Unlimited internet for a month 24/7 support</span>
                            </div>
                        </div>
                    </label>
                    <label for="three" class="box py-2 third">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                       Plus Plan
                                    </span>
                                    <span>Ksh.4000</span>
                                </div>
                                <span>Unlimited internet for a month 24/7 support</span>
                            </div>
                        </div>
                    </label>

                     <label for="four" class="box py-2 fourth">
                        <div class="d-flex">
                            <span class="circle"></span>
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                      Premium Plan
                                    </span>
                                    <span>Ksh.5000</span>
                                </div>
                                <span>Unlimited internet for a month 24/7 support</span>
                            </div>
                        </div>
                    </label>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Payment Details</p>
                    <p class="dis mb-3">Complete your purchase by providing your payment details</p>
                </div>

             <form  action="/billing/{{$client->id}}" method="POST">
                   @csrf
                   

                        <label for="package" class="dis fw-bold mb-3">Package</label>
                        <select class="form-select" name="package">
                                  <option hidden selected>Select package plan</option>
                                <option value="Lite" >Lite Plan</option>
                                <option value="Standard">Standard Plan</option>
                                <option value="Plus">Plus Plan</option>
                                <option value="Premium">Premium Plan</option>
                            </select>
                            @error('package')
                           <p class="text-danger pt-1">{{$message}}</p>
                           @enderror
                         <div class="my-3 cardname">
                            <label for="amount" class="dis fw-bold mb-2">Amount</label>
                            <input class="form-control" type="text" id="amount" value="{{old('amount')}}" name="amount" readonly>
                            @error('amount')
                           <p class="text-danger pt-1">{{$message}}</p>
                           @enderror
                        </div>

                        <div class="address">
                            <label for="payment" class="dis fw-bold mb-3">Payment method</label>
                            <select class="form-select" name="payment">
                                <option hidden selected>Select payment method</option>
                                <option value="M-PESA">M-PESA</option>
                                <option value="Cash">Cash</option>
                                <option value="Bank transfer">Bank transfer</option>
                                <option value="Skrill">Skrill</option>
                            </select>
                           @error('payment')
                           <p class="text-danger pt-1">{{$message}}</p>
                           @enderror
                        </div>
                            <div class=" my-3">
                                <label for="until" class="dis fw-bold mb-2">Active until</label>
                                
                                    <input class="form-control" type="date" id="month" name="until" value="{{old('until')}}">
                                     @error('until')
                                    <p class="text-danger pt-1">{{$message}}</p>
                                    @enderror
                        
                            </div>
                            <div class="d-flex flex-column dis">
                                <button type="submit" class="btn btn-primary mt-2">Pay Now
                                </button>
                            </div>
                    </form>

            </div>
        </div>

 </div>
    </div>
  
@endsection
     
</body>
</html>