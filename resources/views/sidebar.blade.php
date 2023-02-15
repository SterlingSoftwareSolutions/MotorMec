
@section('sidebar')
<nav class="navbar navbar-expand-sm d-flex flex-column  align-item-start navbar-dark">
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav d-flex flex-column">
      <li class="nav-item active">
        <a class="nav-link" href="/">Dashboard</a>
      </li>
      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Applications
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">All Applications</a></li>
            <li><a class="dropdown-item" href="#">Create Application</a></li>
            <li><a class="dropdown-item" href="#">Pending Applications</a></li>
            <li><a class="dropdown-item" href="#">Completed  Applications</a></li>
            <li><a class="dropdown-item" href="#">Deleted Applications</a></li>
            <li><a class="dropdown-item" href="#">Draft Applications</a></li>
          </ul>
        </li>
    </ul>
  </div>
</nav>

@endsection