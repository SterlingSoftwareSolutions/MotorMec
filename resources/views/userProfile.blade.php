@extends('layouts.app')
@include('sidebar')
@include('header')


@section('content')
<p class="user-profile-h">User Profile Page</p>
<form class="border border-secondary rounded-3 p-5">
  <div class="row">
    <h4 class="border-bottom border-secondary border-2">Details</h4>
  </div>
  <div class="row">
    <div class="col">
      <img src="{{asset('images/user.jpg')}}" class="rounded-circle"  alt=""> <br>
      <label class="form-label" for="customFile">Upload a different photo</label>
      <input type="file" class="form-control" id="customFile" />
    </div>
    <div class="col">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name"><br>
      <label for="location" class="form-label">Location</label>
      <input type="text" class="form-control" id="location" placeholder="Enter location"><br>
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email"><br>
      <label for="password" class="form-label">New Password</label>
      <input type="text" class="form-control" id="password" placeholder="Enter Password"><br>
    </div>
    <div class="col">
      <label for="userName" class="form-label">User Name</label>
      <input type="text" class="form-control" id="userName" placeholder="Enter User Name"><br>
      <label for="mobile" class="form-label">Mobile</label>
      <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number"><br>
      <label for="businessName" class="form-label">Business Name</label>
      <input type="text" class="form-control" id="businessName" placeholder="Enter Business Name"><br>
      <label for="confirmPassword" class="form-label">Confirm Password</label>
      <input type="text" class="form-control" id="confirmPassword" placeholder="Enter Confirm Password"><br>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <button class="btn btn-secondary me-md-2" type="button">Cancel</button>
      <button class="btn btn-success" type="button">Update</button>
    </div>
  </div>
</form>

</div>
</div>
@endsection