<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Custom textarea for this template-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    
    <!-- Custom fonts for this template-->
    <link href="vendor/product/stylesheet.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/stylesNav.css" rel="stylesheet" type="text/css">
    <!-- Card theme CSS (includes Bootstrap)-->
    <link href="css/styleCard.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.red-indigo.min.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->

        <div class="d-flex " id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
            </div>
            <!-- Page content wrapper-->

        </div>
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top"
                    style="border-bottom: 1px solid #D3D3D3">

                    <!-- Sidebar Toggle (Topbar) -->
                    {{-- <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-0 mr-3">
                        <i class="fa fa-bars"></i>
                    </button> --}}

                    <!-- Logo -->

                    <h5 style="height: 30px;vertical-align:middle;align-items: center;text-align:center" 1>
                        <button class="nav-item" style="border: unset;background-color:unset;" id="sidebarToggle">
                            <img src="{{asset('img/close.svg')}}" class="rounded-circle" width="22px" height="22px"
                                alt="close">
                        </button>
                        <span class="nav-item" style="font-family: 'product_sansregular', Arial, Helvetica, sans-serif">Tugas</span>

                    </h5>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <h5>
                            <a class="bnt bnt-tugas" role="button" href="#!" style="text-decoration: unset;font-weight:unset;line-height:unset;
                            height:30px;border-radius:5px 0px 0px 5px">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Tugaskan</span>
                            </a>
                        </h5>
                        {{-- <div class="topbar-divider d-none d-sm-block"></div> --}}

                        <!-- Nav Item - User Information -->
                        <h5>
                        <li class="nav-item dropdown no-arrow" style="vertical-align: middle">
                            <a class="bnt bnt-primary nav-link dropdown-toggle " role="button" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height: 30px;font-size:unset;border-radius:0px 5px 5px 0px">
                                <img class="img-profile rounded-circle" src="{{asset('img/arrow-drop.svg')}}" width="20px" height="20px">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Tugaskan
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Jadwalkan
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Simpan draf
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hapus draf
                                </a>
                            </div>
                        </li></h5>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- End of Sidebar -->
                @yield('content')
            </div>
            <!-- End of Main Content -->

            {{--
            <!-- Footer -->
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
<!-- Bootstrap summernote JavaScript-->
    <script>
    $('#summernote').summernote({
      placeholder: 'Petunjuk (Opsional)',
      tabsize: 2,
      height: 100
    });
  </script>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    {{--
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.js"></script> --}}

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scriptsNav.js"></script>
    <!-- Card theme JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/thiagoh/de-animate/0.2.3/dist/jquery.de-animate.min.js"></script>
    <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
    <script src="js/scriptCard.js"></script>
</body>

</html>