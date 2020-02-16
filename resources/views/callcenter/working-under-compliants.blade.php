<!DOCTYPE html>
<html lang="en">
<head>
<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:31:25 GMT -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>Edit Areeza</title>

<!-- Bootstrap 4.0-->
<link rel="stylesheet" href="{{asset('assets/vendor_components/bootstrap/dist/css/bootstrap.min.css')}}">

<!-- Bootstrap extend-->
<link rel="stylesheet" href="{{asset('/css/bootstrap-extend.css')}}">

<!-- Theme style -->
<link rel="stylesheet" href="{{asset('/css/master_style.css')}}">

<!-- Hyper Admin skins -->
<link rel="stylesheet" href="{{asset('/css/skins/_all-skins.css')}}">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../../images/arg-afghanistan.jpg)" data-overlay="7">
<div class="wrapper">

    <header class="main-header">
        @include('includes.header')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('includes.sidebar')
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">تحت کار در ریاست شکایات</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page"> شکایات</li>
                                    <li class="breadcrumb-item active" aria-current="page">لست شکایات</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>
                            {{--             <div class="dropdown-menu dropdown-menu-right">
                                             <a class="dropdown-item" href="#"><i class="mdi mdi-share"></i>Activity</a>
                                             <a class="dropdown-item" href="#"><i class="mdi mdi-email"></i>Messages</a>
                                             <a class="dropdown-item" href="#"><i class="mdi mdi-help-circle-outline"></i>FAQ</a>
                                             <a class="dropdown-item" href="#"><i class="mdi mdi-settings"></i>Support</a>
                                             <div class="dropdown-divider"></div>
                                             <button type="button" class="btn btn-success">Submit</button>
                                         </div>--}}
                        </div>

                    </div>
                </div>
            </div>

            <!-- Main content -->
            <section class="content">

                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="box box-inverse box-success">
                            <div class="box-body">
                                <div class="flexbox">
                                    <h5>مجموعه شکایات</h5>
                                    <div class="dropdown">
                                               <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                               <div class="dropdown-menu dropdown-menu-right">
                                                   <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                                   <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                                   <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                               </div>
                                    </div>
                                </div>

                                <div class="text-center my-2">
                                    <div class="font-size-60">{{DB::table('shekayatforms')->count()}}</div>
                                    <span>مجموعه شکایات</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12 ">
                        <div class="box box-inverse box-primary">
                            <div class="box-body">
                                <div class="flexbox">
                                    <h5>تکمیل</h5>
                                    <div class="dropdown">
                                        {{--   <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                           <div class="dropdown-menu dropdown-menu-right">
                                               <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                               <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                               <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                           </div>--}}
                                    </div>
                                </div>

                                <div class="text-center my-2">
                                    <div class="font-size-60">{{ $stat }}</div>
                                    <span>تکمیل</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="box box-inverse box-danger">
                            <div class="box-body">
                                <div class="flexbox">
                                    <h5>حفظ</h5>
                                    <div class="dropdown">

                                    </div>
                                </div>

                                <div class="text-center my-2">
                                    <div class="font-size-60">{{ $sta }}</div>
                                    <span>حفظ</span>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xl-3 col-md-6 col-12">
                        <div class="box box-inverse box-warning">
                            <div class="box-body">
                                <div class="flexbox">
                                    <h5>منصرف</h5>
                                    <div class="dropdown">
                                        {{--   <span class="dropdown-toggle no-caret" data-toggle="dropdown"><i class="ion-android-more-vertical rotate-90"></i></span>
                                           <div class="dropdown-menu dropdown-menu-right">
                                               <a class="dropdown-item" href="#"><i class="ion-android-list"></i> Details</a>
                                               <a class="dropdown-item" href="#"><i class="ion-android-add"></i> Add new</a>
                                               <a class="dropdown-item" href="#"><i class="ion-android-refresh"></i> Refresh</a>
                                           </div>--}}
                                    </div>
                                </div>

                                <div class="text-center my-2">
                                    <div class="font-size-60">{{ $status }}</div>
                                    <span>منصرف</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->

                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h4 class="" style="text-align: center;">تحت کار در ریاست شکایات</h4>
                                <h6 class="box-subtitle"></h6>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">

                                    <table id="example" class="table table-lg invoice-archive">
                                        <thead>
                                        <tr>
                                            <th>شماره مسلسل</th>
                                            <th>اسم</th>
                                            <th>موضوع</th>
                                            <th>نوعیت موضوع</th>
                                            <th>نمبر ثبت</th>
                                            <th>تاریخ</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($confirms as $info)
{{--                                            @if($info->Shekayatform->shake_photocopy != NULL && $info->Shekayatform->passport_photocopy != NULL && $info->Shekayatform->shake_photo != NULL)--}}

                                             <tr>
                                     <td>{{$info->id}}</td>
                                <td>{{$info->Shekayatform->first_name . '  '. $info->Shekayatform->last_name}}</td>
                                                 <td>{{$info->Shekayatform->priority->name}}</td>
                                                 <td>{{$info->Shekayatform->form_random_number}}</td>
                                                 <td>{{$info->Shekayatform->subject->name}}</td>
                                           <td>{{$info->des_date}}</td>
                                 <td class="text-center">


                              <div class="list-icons-item dropdown">

            {{--<a href="{{route('working-under-compliants.edit', $info->id)}}" class="editFormPopupLink btn btn-warning" confirm_id = "{{$info->id}}" shekayat_form_id="{{$info->shekayatform_id}}" data-toggle="modal" data-target="#myModal"  ><i class="fa fa-pencil" style="color: #fff !important;" ></i>
                <i  class="fa fa-pencil-square" style="color: #fff !important;" ></i></a>
--}}
            <a href="{{route('working-under-compliants.edit', $info->id)}}"  class="btn btn-warning"  title="" data-original-title="Edit">
                <i  class="fa fa-pencil-square" style="color: #fff !important;" ></i>
            </a>

            <a class="btn btn-danger" title="" data-original-title="Delete">
                <i class="fa fa-trash" style="color: white;"></i>
            </a>
        </div>



    </td>


</tr>


                                        @endforeach

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </section>
            <!-- /.content -->
        </div>
    </div>
    <!-- /.content-wrapper -->



    <!-- /.control-sidebar -->

    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>

<!-- Hyper Admin App -->
<script src="{{asset('js/template.js')}}"></script>

<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<!-- This is data table -->
<script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>

<!-- Hyper Admin for Data Table -->
<script src="{{asset('js/pages/data-table.js')}}"></script>


</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:31:25 GMT -->
</html>
