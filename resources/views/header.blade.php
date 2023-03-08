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
      <ul class="dropdown-menu profile-menu" aria-labelledby="dropdownMenu2">
        <li><a href="/profile" class="dropdown-item profile-btn">Profile</a></li>
        <li><a href="/billing" class="dropdown-item profile-btn">Billing</a></li>
        <li>
          <form action="{{url('logout')}}" method="POST">
            @csrf
            <button type="submit" class="dropdown-item logout-btn">Logout</button>
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>
@endsection