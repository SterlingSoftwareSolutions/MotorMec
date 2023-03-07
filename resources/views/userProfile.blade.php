@extends('layouts.app')
@include('sidebar')
@include('header')


@section('content')
<p class="user-profile-h">User Profile Page</p>
<form class=" border border-secondary rounded-3 p-5 mx-auto" method="post" action="/users/{{Auth::user()->id}}}">
        @csrf
        @method('put')

        <div class="row">
          <h4 class="border-bottom border-secondary border-2">Details</h4>
        </div>
        <div class="row g-3">
          <div class="col-md-4">
            <img src="{{asset('images/user.jpg')}}" class="img-fluid rounded-circle" alt=""> <br>
            <label class="form-label" for="customFile">Upload a different photo</label>
            <input type="file" class="form-control" id="customFile" />
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Enter Name" value="{{Auth::user()->name}}">
            </div>
            <div class="mb-3">
              <label for="userName" class="form-label">User Name</label>
              <input name="username" type="text" class="form-control" id="userName" placeholder="Enter User Name" value="{{Auth::user()->username}}">
            </div>
            <div class="mb-3">
              <label for="location" class="form-label">Location</label>
              <input name="location" type="text" class="form-control" id="location" placeholder="Enter location" value="{{Auth::user()->location}}">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input name="email" type="email" class="form-control" id="email" placeholder="Enter Email" value="{{Auth::user()->email}}">
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-3">
              <label for="businessName" class="form-label">Business Name</label>
              <input name="businessName" type="text" class="form-control" id="businessName" placeholder="Enter Business Name" value="{{Auth::user()->businessname}}">
            </div>
            <div class="mb-3">
              <label for="phone" class="form-label">Mobile</label>
              <input name="phone" type="text" class="form-control" id="phone" placeholder="Enter Mobile Number" value="{{Auth::user()->phone}}">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">New Password</label>
              <input name="password" type="password" class="form-control" id="password" placeholder="Enter Password" disabled>
            </div>
            <div class="mb-3">
              <label for="confirmPassword" class="form-label">Confirm Password</label>
              <input name="password_conformation" type="password" class="form-control" id="confirmPassword" placeholder="Enter Confirm Password" disabled>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-secondary me-md-2" href="/">Cancel</a>
              <button class="btn btn-success" type="submit">Update</button>
            </div>
          </div>
        </div>
      </form>
</div>
</div>
@endsection