@section('header')
 <div class="header">
      <button class="btn" id="menu-btn">
      <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="#">MotorMec</a>
    <div class="right">
    <div class="dropdown">
  <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
  <img src="{{asset('images/profile.png')}}" alt="">
  </button>
  <ul class="dropdown-menu profile-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item profile-btn" type="button">Profile</button></li>
    <li><button class="dropdown-item profile-btn" type="button">Billing</button></li>
    <li><button class="dropdown-item logout-btn" type="button">Logout</button></li>
  </ul>
</div>
      
      <i class="fa fa-bell"></i>
      <i class="fa fa-envelope"></i>
    </div>
 </div>
@endsection