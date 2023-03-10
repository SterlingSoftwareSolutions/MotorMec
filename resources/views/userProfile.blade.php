@extends('layouts.app')
@include('sidebar')
@include('header')


@section('content')
<p class="user-profile-h">User Profile Page</p>

<form class=" border border-secondary rounded-3 p-5 mx-auto">
  <div class="row">
    <h4 class="border-bottom border-secondary border-2">Details</h4>
  </div>
  <div class="row g-3">
    <div class="col-md-4">
      <img src="{{asset('images/user.jpg')}}" class="img-fluid rounded-circle" alt=""> <br>
      <label class="form-label" for="customFile">Upload a different photo</label>
      <input type="file" class="form-control" id="imagefile" />
    </div>
    <div class="col-md-4">
      <h5 class="font-weight-bold mb-3">Information</h5>
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter Name">
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">Location</label>
        <input type="text" class="form-control" id="location" placeholder="Enter location">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" placeholder="Enter Email">
      </div>
      <div class="mb-3">
        <label for="userName" class="form-label">User Name</label>
        <input type="text" class="form-control" id="userName" placeholder="Enter User Name">
      </div>
      <div class="mb-3">
        <label for="mobile" class="form-label">Mobile</label>
        <input type="text" class="form-control" id="mobile" placeholder="Enter Mobile Number">
      </div>
      <div class="mb-3">
        <label for="businessName" class="form-label">Business Name</label>
        <input type="text" class="form-control" id="businessName" placeholder="Enter Business Name">
      </div>
    </div>
    <div class="col-md-4">
      <h5 class="font-weight-bold mb-3">Change Password</h5>
      <div class="mb-3">
        <label for="password" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter Current Password">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter New Password">
      </div>
      <div class="mb-3">
        <label for="confirmPassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm New Password">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-secondary me-md-2" type="button">Cancel</button>
        <button class="btn btn-success" type="button">Update</button>
      </div>
    </div>
  </div>
</form>


</div>
</div>
@endsection

@include('footer')
