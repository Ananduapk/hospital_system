
<head>
    <!-- Other head content -->
    <link href="{{ asset('css/header.css') }}" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('hospital') }}">New Medical Center</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('hospital') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('doctors') }}">Doctors</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('services') }}">Services</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('help') }}">Help</a>
          </li>  --}}
        </ul>
        <span class="navbar-text">
        </span>
      </div>
    </div>
</nav>
