<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/product/stylesheet.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/stylesNav.css') }}" rel="stylesheet" type="text/css">
    <!-- Card theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styleCard.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('https://storage.googleapis.com/code.getmdl.io/1.0.6/material.red-indigo.min.css') }}">

    <script src="{{ asset('https://code.jquery.com/jquery-3.5.1.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js') }}"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <link rel="stylesheet"
        href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css') }}"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js') }}"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <link href="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css') }}"
        rel="stylesheet">
        <link href="{{asset('https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css')}}" rel='stylesheet'>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    @yield('style')
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <div class="d-flex " id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading bg-light "><a style="color: inherit;" class="nav-link collapsed" href="/#"
                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                        aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-cog"></i>
                        <span>Classes</span>
                    </a></div>
                    <div class="list-group list-group-flush ">
                        <hr class="sidebar-divider">
                        <div class="sidebar-heading"> Teaching</div>
                        @foreach($roll as $tampil)
                        @if ($tampil->status=='guru')
                        @if ($tampil->id_user== Auth::user()->id)
                        <a style="color: inherit;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>{{$tampil->kelas['nama_kelas']}}</span>
                        </a>
                        @endif
                        @endif
                        @endforeach
                        <hr class="sidebar-divider">
                        <div class="sidebar-heading"> Enrolled</div>
                        @foreach($roll as $tampil)
                        @if ($tampil->status=='siswa')
                        @if ($tampil->id_user== Auth::user()->id)
                        <a style="color: inherit;" class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>{{$tampil->kelas['nama_kelas']}}</span>
                        </a>
                        @endif
                        @endif
                        @endforeach
                        <hr class="sidebar-divider">
                        <a style="color: inherit;" class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <img src="{{asset('img/arsip.jpg')}}" style="width:20px">
                            <span>Archived classes</span>
                        </a>
                        <a style="color: inherit;" class="nav-link collapsed" href="#" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <img src="{{asset('img/setting.png')}}" style="width:20px">
                            <span>Pengaturan</span>
                        </a>
                    </div>
            </div>
            <!-- Page content wrapper-->

        </div>
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #fff">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top"
                    style="border-bottom: 1px solid #D3D3D3">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-0 mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Logo -->

                    <h5>
                        <button style="border: unset" id="sidebarToggle">
                            <img src="{{ asset('img/menu.svg') }}" class="rounded-circle" width="20px" height="20px"
                                alt="menu">
                        </button>
                        <img src="{{ asset('img/Google.svg') }}" alt="google">
                        <span style="font-family: 'product_sansregular', Arial, Helvetica, sans-serif">Classroom</span>

                    </h5>
                    <!-- Topbar Navbar -->
                    <div class="col">
                        <ul style="justify-content: center" class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link active" href="/depanguru/{{$id}}" style="color: black;">Forum</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/depanguru/{{$id}}/haltugas" style="color: black;">Tugas Kelas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/depanguru/{{$id}}/anggota"
                                    style="color: black;">Anggota</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/anggota1"
                                    style="color: black;">Nilai</a>
                            </li>
                    </div>

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle" src="{{asset('img/undraw_profile.svg')}}">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </div>
                    </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- End of Sidebar -->
                @yield('content')
            </div>
            <!-- End of Main Content -->

            {{-- <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer --> --}}

        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#summernote').summernote({
          placeholder: 'Umumkan sesuatu ke kelas Anda',
          tabsize: 2,
          height: 100
        });
      </script>
      <!-- Bootstrap core JavaScript-->
      <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
      {{-- <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script> --}}
  
      <!-- Core plugin JavaScript-->
      <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
      {{--
      <!-- Custom scripts for all pages-->
      <script src="js/sb-admin-2.js"></script> --}}
  
      <!-- Page level plugins -->
      <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
  
      <!-- Page level custom scripts -->
      <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
      <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
  
      <!-- Bootstrap core JS-->
      <script src="{{asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js')}}"></script>
      <!-- Core theme JS-->
      <script src="{{asset('js/scriptsNav.js')}}"></script>
      <!-- Card theme JS-->
      <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script>
      <script src="{{asset('https://cdn.rawgit.com/thiagoh/de-animate/0.2.3/dist/jquery.de-animate.min.js')}}"></script>
      <script src="{{asset('https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js')}}"></script>
      <script src="{{asset('js/scriptCard.js')}}"></script>
  
  </body>
  
  </html>