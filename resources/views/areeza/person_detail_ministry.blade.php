<!DOCTYPE html>
<html lang="en">
<head>
<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/contact_userlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:02:03 GMT -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="../../images/favicon.ico">

<title>Kar shenasi List</title>

    <link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

    <!-- Bootstrap extend-->
    <link rel="stylesheet" href="{{asset('/css/bootstrap-extend.css')}}">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('/css/master_style.css')}}">

    <!-- Hyper Admin skins -->
    <link rel="stylesheet" href="{{asset('/css/skins/_all-skins.css')}}">

    <!-- Data Table-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor_components/datatable/datatables.min.css')}}"/>


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../../images/arg-afghanistan.jpg)" data-overlay="7">
<!-- Site wrapper -->
<div class="wrapper">
<header>
    @include('includes.header')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        @include('includes.sidebar')
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">User list</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">Contact</li>
                                    <li class="breadcrumb-item active" aria-current="page">User list</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                           {{-- <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                                <div class="dropdown-divider"></div>
                                <button type="button" class="btn btn-success">Submit</button>--}}
                            </div>
                        </div>

                    </div>
                </div>
            </div>

<br><br>
        <div class="col-lg-3 col-md-4" style="margin-right: 790px;">
            <div class="box no-shadow">
                <div class="box-body">

                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg mt-10 d-block text-center">کاربر جدید</a>
                </div>
            </div>
            <!-- /. box -->
        </div>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div  class="col-12">



                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">شهرت تعقیب کننده</h3>


                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                        <tr>
                                            <th> نمبر ثبت</th>
                                            <th>نام</th>
                                            <th>عنوان وظیفه</th>
                                            <th>ایمل</th>
                                            <th>وزارت</th>
                                            <th>نمبر تماس</th>
                                            <th>action</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($person as $pers)
                                        <tr>
                                            <td>{{$pers->id}}</td>
                                            <td>{{$pers->name}}</td>
                                            <td>{{$pers->job_title}}</td>
                                            <td>{{$pers->email}}</td>
                                            <td>{{$pers->ministry_name}}</td>
                                            <td> {{$pers->phone_number}}</td>
                                            <td class="text-center">
                                                <a href="{{route('person.edit',$pers->id)}}"  class="btn btn-warning"  title="" data-original-title="Edit">
                                                    <i  class="fa fa-pencil-square" style="color: #fff !important;" ></i>
                                                </a>
                                                <form action="{{route('person.destroy', $pers->id)}}" method="post" style="display: inline">
                                                    <input type="hidden"  name="_method" value="DELETE" >
                                                    {{csrf_field()}}
                                                    <button onclick="return confirm('Are you sure?')" type="submit" class="close-icon btn btn-primary btn-outline" >
                                                        <i class="fa fa-trash" style="color: white;"></i></button>


                                                </form>
                                            </td>
                                        </tr>

                                       @endforeach
                                        </tbody>
                                        <tfoot>
                                        <tr>
                                            <th> نمبر ثبت</th>
                                            <th>نام</th>
                                            <th>عنوان وظیفه</th>
                                            <th>ایمل</th>
                                            <th>وزارت</th>
                                            <th>نمبر تماس</th>
                                            <th>action</th>

                                        </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>



                </div>
            </section>
            <!-- /.content -->

        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- Popup Model Plase Here -->

    <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">  وظیفه </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="{{route('person.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="col-md-12">نام</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="نام" name="name">
                            </div>
                            <label class="col-md-12">ایمل</label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="ایمل" name="email">
                            </div>
                            <label class="col-md-12">نمبر</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="نمبر" name="job_title">

                            </div>
                            <label class="col-md-12">نمبر</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="نمبر" name="phone">
                            </div>
                            <label class="col-md-12">وزارت</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="وزارت" name="ministry_name">
                            </div>

                        </div>
                        <div  style="position: center;">


                        </div>

                        <input type="submit" name="submit" value="ثبت" class="btn btn-success" >

                    </form>
                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /Popup Model Plase Here -->

    <footer class="main-footer">
        <div class="pull-right d-none d-sm-inline-block">
            <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Purchase Now</a>
                </li>
            </ul>
        </div>
        &copy; 2018-2019 <a href="https://www.multipurposethemes.com/">Multi-Purpose Themes</a>. All Rights Reserved.
    </footer>

    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->


<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

<!-- Hyper Admin App -->
<script src="{{asset('js/template.js')}}"></script>


<!-- This is data table -->
<script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>

<!-- Hyper Admin for Data Table -->
<script src="{{asset('js/pages/data-table.js')}}"></script>






<!-- Bootstrap 4.0-->
<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<!-- date-range-picker -->
<script src="{{asset('assets/vendor_components/moment/min/moment.min.js')}}"></script>



</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/contact_userlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:02:03 GMT -->
</html>
