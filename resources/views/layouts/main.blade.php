<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Si Dalah</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('source') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('source/foto') }}/icon.png">

    <!-- Custom styles for this template-->
    <link href="{{ asset('source') }}/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{ asset('source') }}/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

       <!-- Page Wrapper -->
       <div id="wrapper">



            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center mb-2 mt-2" href="">
                    <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="sidebar-brand-text mx-3">Aplikasi Si Dalah</div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0 mt-2">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/home">
                        <i class="fas fa-fw fa-home"></i>
                        <span>Home</span></a>
                </li>
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Data Sekolah
                </div>
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/guru">
                        <i class="fas fa-fw fa-user-graduate"></i>
                        <span>Data Guru</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/staff">
                        <i class="fas fa-fw fa-user-shield"></i>
                        <span>Data Staff</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/siswa">
                        <i class="fas fa-fw fa-user"></i>
                        <span>Data Siswa</span></a>
                </li>


                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/kelas">
                        <i class="fas fa-fw fa-house-user"></i>
                        <span>Data Kelas</span></a>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/jabatan">
                        <i class="fas fa-fw fa-save"></i>
                        <span>Data Jabatan</span></a>
                </li>

<!-- Divider -->
<hr class="sidebar-divider my-0">
    

    <!-- Nav Item - Dashboard -->
       <li class="nav-item active">
     <a class="nav-link" href="/fasilitas">
        <i class="fas fa-fw fa-building"></i>
        <span>Data Fasilitas</span></a>
         </li>
   
    
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
    
                
    
            </ul>
            <!-- End of Sidebar -->

             <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

              <!-- Main Content -->
              <div id="content">



             <!-- Topbar -->
             <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

     

                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle"
                                src="{{ asset('source') }}/foto/tutwurihandayani.ico">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                            aria-labelledby="userDropdown">
                            
                            <a class="dropdown-item" href="/profile">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                           
                            <div class="dropdown-divider"></div>
                            
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <!-- End of Topbar -->




 <!-- Begin Page Content -->
 <div class="container-fluid">
@yield('content')
 </div>



              </div>

              <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


        </div>
       </div>


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
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" Jika Anda Ingin Keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="btn btn-primary" type="submit">Logout</button>
                    </form>
                   
                </div>
            </div>
        </div>
    </div>



     <!-- Bootstrap core JavaScript-->
     <script src="{{ asset('source') }}/vendor/jquery/jquery.min.js"></script>
     <script src="{{ asset('source') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
     <!-- Core plugin JavaScript-->
     <script src="{{ asset('source') }}/vendor/jquery-easing/jquery.easing.min.js"></script>
 
     <!-- Custom scripts for all pages-->
     <script src="{{ asset('source') }}/js/sb-admin-2.min.js"></script>
 
     <!-- Page level plugins -->
     <script src="{{ asset('source') }}/vendor/chart.js/Chart.min.js"></script>
 
     <!-- Page level custom scripts -->
     <script src="{{ asset('source') }}/js/demo/chart-area-demo.js"></script>
     <script src="{{ asset('source') }}/js/demo/chart-pie-demo.js"></script>

     <!-- Page level plugins -->
    <script src="{{ asset('source') }}/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('source') }}/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('source') }}/js/demo/datatables-demo.js"></script>
 
 </body>
 
 </html>