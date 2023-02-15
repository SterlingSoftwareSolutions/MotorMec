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
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">Action</button></li>
    <li><button class="dropdown-item" type="button">Another action</button></li>
    <li><button class="dropdown-item" type="button">Something else here</button></li>
  </ul>
</div>
      
      <i class="fa fa-bell"></i>
      <i class="fa fa-envelope"></i>
    </div>
 </div>
@endsection