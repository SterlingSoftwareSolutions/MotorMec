@extends('layouts.app')
@include('sidebar')
@include('header')


@section('content')
<p class="user-profile-h">User Profile Page</p>

<!-- <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1"  placeholder="Enter Name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
  <button type="submit" class="btn btn-primary">Cancel</button>

</form> -->
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



<!-- <div class="row">
        <div class="col-md-4 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5"  ><span class="font-weight-bold">Upload a different photo</span><span> </span>
            </div>
        </div>
        <div class="col-md-4 border-right">
            <div class="p-3 py-5">
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Name</label><input type="text" class="form-control" placeholder="first name" value=""></div>
                    <div class="col-md-6"><label class="labels">Surname</label><input type="text" class="form-control" value="" placeholder="surname"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">PhoneNumber</label><input type="text" class="form-control" placeholder="enter phone number" value=""></div>
                    <div class="col-md-12"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address" value=""></div>
                </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div> -->
</div>
</div>


@endsection