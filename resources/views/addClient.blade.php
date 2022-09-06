@extends('layout')


@section('content')

<main class="main-content  mt-0">
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url({{asset('img/curved-images/curved-6.jpg')}});">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Add New Client!</h1>
            <p class="text-lead text-white">Let's grow together</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto w-50" >
          <div class="card z-index-0">   
            <div class="card-body" >
              <form role="form text-left " method="POST" action="/addClient/create" enctype="multipart/form-data">
                @csrf
                <label for="name">Full Name</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" name="name"aria-describedby="name-addon" value="{{old('name')}}">
                   @error('name')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="email">Email</label>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="email-addon" value="{{old('email')}}">
                   @error('email')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="phone">Phone number</label>
                <div class="mb-3">
                  <input type="phone" class="form-control" placeholder="Phone number" name="phone" aria-describedby="phone-addon" value="{{old('phone')}}">
                   @error('phone')
                   <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="apartment">Apartment</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Apartment name" name="apartment" aria-describedby="apartment-addon" value="{{old('apartment')}}">
                   @error('apartment')
                   <p class="text-danger pt-1">{{$message}}</p>
                    @enderror
                </div>
                <label for="houseno">Houseno</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="House number" name="houseno" aria-describedby="houseno-addon" value="{{old('houseno')}}">
                   @error('houseno')
                   <p class="text-danger pt-1">{{$message}}</p>
                    @enderror
                </div>
                <label for="street">Location</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Enter location name" name="street" aria-describedby="street-addon" value="{{old('street')}}">
                   @error('street')
                   <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                 <label for="avatar">Avatar</label>
                <div class="mb-3">
                  <input type="file" class="form-control"  name="avatar" aria-describedby="avatar-addon">
                   @error('avatar')
                  <p class="text-danger pt-1">{{$message}}</p>
                  @enderror
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Create Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
     