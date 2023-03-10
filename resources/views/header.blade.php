@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/header.css') }}">
@endsection
@section('header')
<div class="header-bar">
  <button class="btn" id="menu-btn">
    <i class="fa fa-bars"></i>
  </button>
  <a class="navbar-brand" href="#">MotorMec</a>
  <div class="right">
    <i class="fa fa-bell"></i>
    <i class="fa fa-envelope"></i>
    <div class="dropdown">
      <button class="btn dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{asset('images/profile.png')}}" alt="">
      </button>
      <ul class="dropdown-menu profile-menu" aria-labelledby="dropdownMenu2" id="profile-dropdown">
        <li><a class="dropdown-item profile-btn" href="/profile"><i class="fa fa-user align-middle"></i>Profile</a></li>
        <li><a class="dropdown-item profile-btn" href="/billing"><i class="fa fa-credit-card align-middle"></i>Billing</a></li>
        <li><a class="dropdown-item logout-btn" href="/logout"><i class="fas fa-sign-out-alt align-middle"></i>Logout</a></li>
      </ul>
    </div>

  </div>
</div>
@endsection