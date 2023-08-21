<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>منظمة الأغذية والزراعة للأمم المتحدة</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link rel="preconnect" href="{{asset('https://fonts.googleapis.com')}}">
    <link rel="preconnect" href="{{asset('https://fonts.gstatic.com')}}" crossorigin>
    <link href="{{asset('https://fonts.googleapis.com/css2?family=Cairo&display=swap')}}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" >

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"  id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('HomePage')}}">
                <div class="sidebar-brand-icon">
                <img src="{{asset('img/fao.png')}}" style="position: relative; height: 50px; width: 80px"  />        
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active text-center" dir="rtl">
                <a class="nav-link text-center" href="{{ route('HomePage')}}" dir="rtl">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>جميع المزارعين</span></a>
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



                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <h1 class="h3 mb-0 text-gray-800">{{ $farmer->name }}</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                العمر</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $farmer->age }}</div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-user-clock fa-2x text-gray-300"></i>
                                        </div> -->
                                        <img src="{{asset('img/age.png')}}" style="height: 40px; width: 40px;" />

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                مجموع أفراد الأسرة</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $farmer->total_family }}</div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                                        </div> -->
                                        <img src="{{asset('img/family-removebg-preview.png')}}" style="height: 50px; width: 90px; position: relative; left: 20px;" />

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">سنوات الخبرة
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $farmer->experience_years }}</div>
                                            </div>
                                        </div>
                                        <!-- <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div> -->
                                        <img src="{{asset('img/bag-removebg-preview.png')}}" style="position: relative; bottom:10px; height: 70px; width: 70px;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                مجموع الثروة الحيوانية</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $farmer_total }}</div>

                                        </div>
                                        <img src="{{asset('img/goat.png')}}" style="height: 60px; width: 60px;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Content Row -->

                    <div class="row" >

                        <div class="col-xl-8 col-lg-5" dir="rtl">
                                <!-- Progress Small -->
                                <div class="card mb-4" dir="rtl">
                                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" dir="rtl">
                                        <h6 class="m-0 font-weight-bold text-primary">معلومات الثروة الحيوانية</h6>
                                    </div>
                                    <div class="card-body" dir="rtl">
                                        <div>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $ewes_per }}%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p style="float: left;">{{ $ewes_per }}%</p>
                                            <p style="float: right;">نسبة الحملان / النعاج</p>
                                          </div>
                                    </div>
                                    <div class="card-body" style="position: relative; bottom: 30px;" dir="rtl">
                                        <div>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $goat_female_per }}%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p style="float: left;">{{ $goat_female_per }}</p>
                                            <p style="float: right;">معدل عدد الإناث لكل فحل</p>
                                          </div>
                                    
                                    </div>
                                    <div class="card-body" dir="rtl" style="position: relative; bottom: 60px;">
                                        <div>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $farmer->ewes_milking }}%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p style="float: left;">{{ $farmer->ewes_milking }}</p>
                                            <p style="float: right;">عدد النعاج الحلوب</p>
                                          </div>
                                    
                                    </div>
                                    <div class="card-body" dir="rtl" style="position: relative; bottom: 90px;">
                                        <div>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $farmer->ewes_pregnant }}%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p style="float: left;">{{ $farmer->ewes_pregnant }}</p>
                                            <p style="float: right;">عدد النعاج الحامل</p>
                                          </div>
                                    
                                    </div>
                                    <div class="card-body" dir="rtl" style="position: relative; bottom: 120px;">
                                        <div>
                                            <div class="progress mb-4">
                                                <div class="progress-bar" role="progressbar" style="width: {{ $farmer->ewes_dry_not_pregnant }}%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <p style="float: left;">{{ $farmer->ewes_dry_not_pregnant }}</p>
                                            <p style="float: right;">عدد النعاج غير الحامل</p>
                                          </div>
                                    
                                    </div>
                                </div>
                        </div>
                        
                    

                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div dir="rtl"
                                     class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">أنواع الحيوانات</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                             aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">الإعدادات</div>
                                            <a class="dropdown-item" href="#">جفظ</a>
                                            <a class="dropdown-item" href="#">طباعة</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">تقرير</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" dir="rtl">
                                    <div class="chart-pie pt-4 pb-2">
                                        <canvas id="livestockChart"></canvas>
                                    </div>
                                    <!-- <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> الماعز
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> الضأن
                                        </span>

                                    </div> -->
                                </div>
                            </div>
                        </div>

                    </div>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span dir="rtl"> &copy; جميع الحقوق محفوظة لمنظمة الأغذية والزراعية للأمم المتحدة</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <!-- <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script> -->
    <script src="{{asset('https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0')}}"></script>

    <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


const data = {
  labels: [
    'الماعز {{ $farmer_goat_per }}%',
    'الضأن {{ $farmer_lamb_per }}%',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [{{ $farmer_goat}}, {{ $farmer_lamb}}],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
 
    ],
    hoverOffset: 4,
    datalabels: {
      color: '#FFCE56'
  }
  }]
};
// Pie Chart Example
var ctx = document.getElementById("livestockChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,

});

        </script>

    

</body>

</html>