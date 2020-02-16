<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/charts_inline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:29:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://hyper-admin-templates.multipurposethemes.com/images/favicon.ico">

    <title>Dashboard of Areez System </title>

    <!-- Bootstrap 4.0-->


    <!-- Bootstrap extend-->


    <!-- Morris charts -->


    <!-- Theme style -->
    <link rel="stylesheet" href="../css/master_style.css">

    <!-- Hyper Admin skins -->
    <link rel="stylesheet" href="../css/skins/_all-skins.css">






    <!-- Bootstrap 4.0-->
    <link rel="stylesheet" href="../../assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Morris charts -->
    <link rel="stylesheet" href="../../assets/vendor_components/morris.js/morris.css">
    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="../css/bootstrap-extend.css">


    <!-- Theme style -->
    <link rel="stylesheet" href="../css/master_style.css">

    <!-- Hyper Admin skins -->
    <link rel="stylesheet" href="../css/skins/_all-skins.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../../images/bg-2.jpg)" data-overlay="7">
<div class="wrapper">
    <header class="main-header">
        @include('includes.header')
    </header>

    <aside class="main-sidebar">
        <!-- sidebar-->
        @include("includes.sidebar")
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">Inline chart</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Chart</li>
                                    <li class="breadcrumb-item active" aria-current="page">Inline chart</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <!-- callout -->


                <!-- /.callout -->

                <div class="row">
                    <!-- col -->
                    <div class="col-lg-4 col-md-4">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">صادره</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="150" data-height="150" data-bgColor="#ebeff2" data-fgColor="#3e8ef7"  value="{{$stat}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-4">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">حفظ کارشناسی</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="150" data-height="150" data-cursor="true" data-fgColor="#17b3a3" value="{{$kar}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /column -->
                    <!-- column -->
                    <div class="col-lg-4 col-md-4">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">صادره اجراایه</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="150" data-height="150"  data-fgColor="#faa700" data-displayPrevious="true" value="{{DB::table('ejraya_saders')->count()}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">عرایض</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="250" data-height="250" data-fgColor="#ff4c52" data-displayPrevious="true" data-angleArc="250" value="{{DB::table('areezas')->count()}}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Angle offset</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="250" data-height="250" data-angleOffset="85" data-linecap="round" data-fgColor="#0bb2d4" value="85" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">حفط اجرایه</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="150" data-height="150"   data-max="15000" data-step="1000" value="{{DB::table('ejraya_hefzs')->count()}}" data-fgColor="#17b3a3" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Readonly</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="150" data-height="150" data-linecap="round" data-fgColor="#3e8ef7" value="50" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Angle offset and arc</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="150" data-height="150" data-displayPrevious="true" data-fgColor="#ff4c52" data-skin="tron" data-cursor="true" value="65" data-thickness=".2" data-angleOffset="-125" data-angleArc="250" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Readonly</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="220" data-height="220" data-linecap="round" data-fgColor="#0bb2d4" value="80" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".2" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Readonly</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="180" data-height="180" data-linecap="round" data-fgColor="#faa700" value="65" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /col -->
                    <!-- col -->
                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <div class="box-body">
                                <h4 class="box-title">Readonly</h4>
                                <div class="text-center">
                                    <input class="knob" data-width="120" data-height="120" data-linecap="round" data-fgColor="#ff4c52" value="60" data-skin="tron" data-angleOffset="180" data-readOnly="true" data-thickness=".1" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col -->
                </div>


                <div class="col-12">
                    <div class="box">
                        <div class="box-body">
                            <h4 class="box-title">Donute Chart</h4>
                            <div id="donut-chart"></div>
                        </div>
                    </div>
                </div>









                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title text-danger">Sparkline Pie</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center">
                                <div id="sparkline5"></div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title text-blue">Sparkline line</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center">
                                <div class="sparkline" data-type="line" data-spot-Radius="3" data-highlight-Spot-Color="#faa700" data-highlight-Line-Color="#222" data-min-Spot-Color="#ff4c52" data-max-Spot-Color="#745af2" data-spot-Color="#3aa0dc" data-offset="90" data-width="100%" data-height="100px" data-line-Width="1" data-line-Color="#06d79c" data-fill-Color="rgba(57, 204, 204, 0.08)">
                                    7,3,2,5,4,8,6,4,2,8,7,9,4,5,3,4,5,9,7,5
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->

                    <div class="col-lg-4 col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title text-warning">Sparkline Bar</h4>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center">
                                <div class="sparkline" data-type="bar" data-width="100%" data-height="100px" data-bar-Width="5" data-bar-Spacing="10" data-bar-Color="#ff4c52">
                                    7,3,10,5,4,8,6,4,2,4,5,3,4,5
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">

    </footer>
    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js"></script>

<!-- popper -->
<script src="../../assets/vendor_components/popper/dist/popper.min.js"></script>

<!-- Bootstrap 4.0-->
<script src="../../assets/vendor_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- SlimScroll -->
<script src="../../assets/vendor_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

<!-- FastClick -->
<script src="../../assets/vendor_components/fastclick/lib/fastclick.js"></script>

<!-- Hyper Admin App -->
<script src="../js/template.js"></script>

<!-- Hyper Admin for demo purposes -->
<script src="../js/demo.js"></script>

<!-- jQuery Knob -->
<script src="../../assets/vendor_components/jquery-knob/js/jquery.knob.js"></script>

<!-- Sparkline -->
<script src="../../assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>

<!-- Hyper Admin for inline Chart purposes -->
<script src="../js/pages/widget-inline-charts.js"></script>


<script src="../js/pages/widget-morris-charts.js"></script>






</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/charts_inline.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:29:27 GMT -->
</html>
