@extends('layout')


@section('content')

<main class="main-content  mt-0">
  <section class="min-vh-100 mb-8">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url({{asset('img/curved-images/curved-6.jpg')}});">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h3 class="text-white mb-2 mt-5">Personal information!</h3>
            <p class="text-lead text-white">Update your personal information</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto w-50" >
          <div class="card z-index-0">   
            <div class="card-body" >
              <form role="form text-left "  method="POST" action="/information/{{$user->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <label for="username">Username</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Name" name="username"aria-describedby="name-addon" value="{{$user->username}}">
                   @error('name')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="email">Email</label>
                <div class="mb-3">
                  <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="email-addon" value="{{$user->email}}">
                   @error('email')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="fullName">Full Name</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Full Name" name="fullName"aria-describedby="name-addon" value="{{$user->fullName}}">
                   @error('fullName')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="description">Description</label>
                <div class="mb-3">
                  <textarea class="form-control" placeholder="Description" rows="4" name="description"> {{$user->description}}</textarea>
                   @error('description')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="phone">Phone number</label>
                <div class="mb-3">
                  <input type="phone" class="form-control" placeholder="Phone number" name="phone" aria-describedby="phone-addon" value="{{$user->phone ?? "723498765"}}">
                   @error('phone')
                   <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>
                <label for="location">Location</label>
                <div class="mb-3">
                  <input type="text" class="form-control" placeholder="Location" name="location"aria-describedby="location-addon" value="{{$user->location}}">
                   @error('location')
                     <p class="text-danger pt-1">{{$message}}</p>
                   @enderror
                </div>

                 <label for="avatar">Avatar</label>
                <div class="mb-3">
                  <input type="file" class="form-control"  name="avatar" aria-describedby="avatar-addon" value="{{$user->avatar}}">
                   @error('avatar')
                  <p class="text-danger pt-1">{{$message}}</p>
                  @enderror
                </div>

                
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Update Account</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection
     