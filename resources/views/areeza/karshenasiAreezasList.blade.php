<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Kar shenasi Areezas List</title>


    <!-- Bootstrap 4.0-->
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

<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../../images/bg-2.jpg)" data-overlay="7">
<div class="wrapper">

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        @include('includes.sidebar')
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">Kar shenasi Areezas List</h3>
                                <h6 class="box-subtitle">Find tagged Areezas from Karshenasi from here</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                        <tr>
                                            <th>نمبر مسلسل</th>
                                            <th>اسم عارض</th>
                                            <th>نمبر ثبت</th>
                                            <th>حالت</th>
                                            <th>تاریخ</th>
                                            <th>توضیحات</th>
                                            <th>دانلود اسناد</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($karshenasiLists as $list)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$list->areeza->first_name. ' '. $list->areeza->last_name}}</td>
                                                <td>{{$list->areeza->form_random_number}}</td>
                                                @if ($list->status_type == 0)
                                                    <td>حفظ</td>
                                                @endif
                                                @if ($list->status_type == 1)
                                                    <td>صادره</td>
                                                @endif
                                                <td>{{$list->date}}</td>
                                                <td>{{$list->description}}</td>
                                                @if ($list->areeza->downloaded == 1)
                                                    <td>
                                                        <a href="{{url('shekayat_PDF/'. '?areeza_id='.$list->areeza_id)}}" target="_blank" class="dropdown-item" style="color: #ffffff; background-color: #0f9ad8;">
                                                            <i class="fa fa-download"></i> شکایت</a>
                                                        <a href="{{url('downloadIdentityFromKarshenasi/'. $list->areeza->identity_photo.'?areeza_id='.$list->areeza_id)}}" class="dropdown-item" style="color: #ffffff; background-color: #0f9ad8;">
                                                            <i class="fa fa-download"></i> تذکره</a>
                                                        <a href="{{url('response_PDF/'. '?id='.$list->id)}}"  target="_blank" class="dropdown-item"  style="color: #ffffff; background-color: #0f9ad8;">
                                                            <i class="fa fa-download"></i>کامنت کارشناس</a>
                                                    </td>
                                                @endif
                                                @if ($list->areeza->downloaded == 2)
                                                    <td>
                                                        <a href="{{url('shekayat_PDF/'. '?areeza_id='.$list->areeza_id)}}" target="_blank" class="dropdown-item"
                                                           style="color: #ffffff; background-color: red;"><i class="fa fa-download"></i> شکایت</a>
                                                        <a href="{{url('downloadIdentityFromKarshenasi/'. $list->areeza->identity_photo.'?areeza_id='.$list->areeza_id)}}" class="dropdown-item" style="color: #ffffff; background-color: red;">
                                                            <i class="fa fa-download"></i> تذکره</a>
                                                        <a href="{{url('response_PDF/'. '?id='.$list->id)}}" target="_blank" class="dropdown-item"  style="color: #ffffff; background-color: red;">
                                                            <i class="fa fa-download"></i>کامنت کارشناس</a>
                                                    </td>
                                                @endif
                                                <td><a href="{{route('karshenasi_response.edit', $list->id)}}"><i class="fa fa-edit"></i></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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

    <!-- Control Sidebar -->
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


</body>
</html>
