@section('sidebar')
<nav class="navbar navbar-expand-sm d-flex flex-column align-item-start navbar-dark">
  <div class="" id="navbarNav">
    <ul class="navbar-nav d-flex flex-column">
      <li class="nav-item active">
        <a class="nav-link" href="/dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/create-application"><i class="fas fa-plus-circle"></i> Create New Application</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="applicationsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-folder-open"></i> Applications
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="applicationsDropdown">
          <li><a class="dropdown-item" href="/applications"><i class="fas fa-list"></i> All</a></li>
          <li><a class="dropdown-item" href="/applications?status=completed"><i class="fas fa-check-circle"></i> Completed</a></li>
          <li><a class="dropdown-item" href="/applications?status=pending"><i class="fas fa-clock"></i> Pending</a></li>
          <li><a class="dropdown-item" href="/applications?status=rejected"><i class="fas fa-times-circle"></i> Rejected</a></li>
          <li><a class="dropdown-item" href="/applications?status=draft"><i class="fas fa-pencil-alt"></i> Draft</a></li>
        </ul>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/"><i class="fas fa-credit-card"></i> Billing</a>
      </li>
    </ul>
  </div>
</nav>
@endsection
