<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Library</title>
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../../assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/47c2035d63.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />

</head>

<body id="page-top">
  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('home')}}">
        <div class="sidebar-brand-text mx-3"><i class="fa-solid fa-book-open"></i><br>Perpustakaan</div>
      </a>

      
      <hr class="sidebar-divider">

      <div class="sidebar-heading">
        Data-data Peminjaman Buku
      </div>

      <li class="nav-item" >
        <a class="nav-link" href="{{ url('borrowings') }}">
        <i class="fa-solid fa-hand-holding-hand"></i>
          <span>Peminjaman</span></a>
      </li>

      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data-data Buku
      </div>
      
      <li class="nav-item" >
        <a class="nav-link" href="{{ url('books') }}">
          <i class="fas fa-fw fa-book"></i>
          <span>Data Buku</span></a>
      </li>

      <li class="nav-item" >
        <a class="nav-link" href="{{ url('publishers') }}">
        <i class="fa-solid fa-upload"></i>
          <span>Data Penerbit</span></a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Data-data Siswa
      </div>

      <li class="nav-item" >
        <a class="nav-link" href="{{ url('students') }}">
        <i class="fa-solid fa-graduation-cap"></i>
          <span>Data Siswa</span></a>
      </li>

      <li class="nav-item" >
        <a class="nav-link" href="{{ url('rayons') }}">
        <i class="fa-solid fa-school"></i>
          <span>Data Rayon</span></a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" href="{{ url('studentGroups')}}">
        <i class="fa-solid fa-school"></i>
          <span>Data Rombel</span></a>
      </li>


      
      <hr class="sidebar-divider">
      
      
      <div class="sidebar-heading">
        Tambahan
      </div>

      <li class="nav-item"  onclick = "return confirm('Anda yakin akan logout?');">
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
        document.getElementById('log').submit();">
          <i class="fas fa-fw fa-chart-area"></i>
          {{ __('Log Out') }}</a>

          <form id="log" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>

      
      <hr class="sidebar-divider d-none d-md-block">


      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    
    <div id="content-wrapper" class="d-flex flex-column">

      <div id="content">
        <br>
        <div class="container">
          <section class="content">
            @yield('content')
          </section>
        </div>
      </div>

      <footer class="sticky-footer ">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          </div>
        </div>
      </footer>

    </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <script src="assets/admin/vendor/jquery/jquery.min.js"></script>
  <script src="assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="assets/admin/js/sb-admin-2.min.js"></script>
  <script src="assets/admin/vendor/chart.js/Chart.min.js"></script>
  <script src="assets/admin/js/demo/chart-area-demo.js"></script>
  <script src="assets/admin/js/demo/chart-pie-demo.js"></script>
</body>
</html>