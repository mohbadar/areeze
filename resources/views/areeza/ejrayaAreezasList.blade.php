<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Ejaraya Areezas List</title>


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
                                <h3 class="box-title">Ejraya Areezas List</h3>
                                <h6 class="box-subtitle">Find Ejraya Areezas from here</h6>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table id="example" class="table table-bordered table-hover display nowrap margin-top-10 w-p100">
                                        <thead>
                                        <tr>
                                            <th>شماره مسلسل</th>
                                            <th>اسم</th>
                                            <th>موضوع</th>
                                            <th>نوعیت موضوع</th>
                                            <th>نمبر ثبت</th>
                                            <th>موبایل</th>
                                            <th> حالت سابقه</th>
                                            <th>تاریخ</th>
                                            <th> حالت جدید</th>
                                            <th>معلومات</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($areezas as $areeza)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$areeza->first_name . '  '. $areeza->last_name}}</td>
                                                <td>{{$areeza->description}}</td>
                                                <td>{{$areeza->subject->name}}</td>
                                                <td>{{$areeza->form_random_number}}</td>
                                                <td>{{$areeza->phone_number}}</td>
                                                @if ($areeza->karshenasiResponse->status_type == 0)
                                                    <td>حفظ</td>
                                                    @else

                                                    <td>صادر</td>
                                                @endif
                                                <td>{{$areeza->date}}</td>
                                                <td>
                                                    <a id="openHefzModal" areeza_id = "{{$areeza->id}}" data-toggle="modal" data-target="#hefz_modal" class="btn btn-danger btn-lg mt-8  text-center"> حفط</a>
                                                    <a id="openSaderModal" areeza_id = "{{$areeza->id}}" data-toggle="modal" data-target="#sader_modal" class="btn btn-success btn-lg mt-8  text-center" >صادره</a>
                                                </td>

                                                <td><a href="{{route('areeza.edit', $areeza->id)}}"><i class="fa fa-edit"></i> ٍEdit </a></td>
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
            <div id="sader_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">صادره</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="{{route('ejraya_sader.store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="areeza_id" class="areeza_id_value">
                                <div class="form-group">
                                    <h5>شماره صادره<span class="text-danger"></span></h5>
                                    <div class="controls">
                                        <input type="number" name="sader_number" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>
                                <div class="form-group">
                                    <h5>مرجع صادره<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="ministry_id" required class="form-control">
                                            <option value="">-مرجع صادره ـ</option>
                                            @foreach($ministries as $ministry)
                                            <option value="{{$ministry->id}}">{{$ministry->name}}</option>
                                                @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5> کاپی به مرجع صادره<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="copy_ministry_ids[]"  multiple id="select" required class="form-control ">
                                            <option value="">- کاپی به  مرجع صادره ـ</option>
                                            @foreach($ministries as $ministry)
                                                <option>{{$ministry->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">فایل</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" required name="signedFile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">  تاریخ صادره</label>
                                    <div class="col-md-12">
                                        <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">  تاریخ ختم</label>
                                    <div class="col-md-12">
                                        <input type="date" name="end_date" class="form-control" required data-validation-required-message="This field is required"> </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">تایید</button>
                                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">بستن</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <div id="hefz_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">حفظ</h4>
                            <a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>
                        </div>
                        <form class="form-horizontal" method="post" action="{{route('ejraya_hefz.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="areeza_id" class="areeza_id_value">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12">تاریخ</label>
                                    <div class="col-md-12">
                                        <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">نمبر حفظ</label>
                                    <div class="col-md-12">
                                        <input class="form-control" required type="number" name="hefz_number">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">فایل</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" required name="signedFile">
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success">تایید</button>
                                <a type="button" class="btn btn-default float-right" data-dismiss="modal">بستن</a>
                            </div>
                        </form>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>

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

<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<!-- This is data table -->
<script src="{{asset('assets/vendor_components/datatable/datatables.min.js')}}"></script>

<!-- Hyper Admin for Data Table -->
<script src="{{asset('js/pages/data-table.js')}}"></script>
<script>
    $('#openSaderModal,#openHefzModal').click(function(){
        var id = $(this).attr('areeza_id');
        console.log(id);
        $('.areeza_id_value').val(id);
    });
</script>

</body>
</html>
