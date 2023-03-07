@section('sidebar')
<nav class="navbar navbar-expand-sm d-flex flex-column align-item-start navbar-dark">
  <div class="" id="navbarNav">
    <ul class="navbar-nav d-flex flex-column">
      <li class="nav-item active">
        <a class="nav-link" href="/">Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/">Create New Application</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="applicationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Applications
        </a>
        <ul class="dropdown-menu" aria-labelledby="applicationsDropdown">
          <li><a class="dropdown-item" href="#">All</a></li>
          <li><a class="dropdown-item" href="#">Completed</a></li>
          <li><a class="dropdown-item" href="#">Pending</a></li>
          <li><a class="dropdown-item" href="#">Rejected</a></li>
          <li><a class="dropdown-item" href="#">Draft</a></li>
        </ul>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/">Billing</a>
      </li>
    </ul>
  </div>
</nav>
@endsection
