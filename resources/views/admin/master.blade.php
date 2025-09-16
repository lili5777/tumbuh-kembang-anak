<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
    }

    @media (min-width: 992px) {
    #sidebar {
      position: fixed;
      top: 0;
      left: 0;
      height: 100vh; /* sidebar full tinggi */
    }
    .content {
      margin-left: 220px; /* sesuai lebar sidebar */
    }
  }
  </style>
</head>

<body class="bg-light">

  {{-- Navbar untuk toggle sidebar di mobile --}}
  <nav class="navbar navbar-dark bg-dark d-lg-none">
    <div class="container-fluid">
      <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar"
        aria-controls="sidebar">
        ☰ Menu
      </button>
    </div>
  </nav>

  @include('admin.sidebar')

  <main class="content p-3">
    @yield('content')
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>