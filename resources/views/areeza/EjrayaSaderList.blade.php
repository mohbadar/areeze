<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Ejaraya Sader Areezas List</title>


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
                                <h3 class="box-title">Ejraya Sader Areezas List</h3>
                                <h6 class="box-subtitle">Find Ejraya Sader Areezas from here</h6>
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
                                            <th>صادز نمبرر</th>
                                            <th>وزارت</th>
                                            <th>مراجغ وزارت</th>
                                            <th>موبایل</th>
                                            <th>تاریخ صادر</th>
                                            <th>تاریخ ختم</th>
                                            <th>باقی روز</th>
                                            <th>جواب</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($saders as $sader)
                                            <tr style="background-color: {{$sader->accept_status == 2 ? "#dd6363":""}}" >
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$sader->areeza->first_name . '  '. $sader->areeza->last_name}}</td>
                                                <td>{{$sader->areeza->description}}</td>
                                                <td>{{$sader->areeza->subject->name}}</td>
                                                <td>{{$sader->areeza->form_random_number}}</td>
                                                <td>{{$sader->sader_number}}</td>
                                                <td>{{$sader->ministry->name}}</td>
                                                <td>
                                                    @foreach(json_decode($sader->reference_ministries_copy, true) as $reference)
                                                       {{$reference}} <br>
                                                        @endforeach
                                                </td>
                                                <td>{{$sader->areeza->phone_number}}</td>
                                                <td>{{$sader->date}}</td>
                                                <td>{{$sader->end_date}}</td>
                                                {{$difference = date_diff(new \DateTime($sader->end_date), new \DateTime($sader->date))->format("Days %d") }}
                                                @if($difference == 'Days 0')
                                                <td style="background-color: red">0 Days</td>
                                                    @else
                                                <td>{{$difference}}</td>
                                                    @endif
                                                <td>
                                                    <a id="openResponseModal" sader_id = "{{$sader->id}}" data-toggle="modal" data-target="#response_modal" class="btn btn-success btn-lg mt-8  text-center" >Response</a>
                                                </td>

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
            <div id="response_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">جواب</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" method="post" action="{{route('ministry_response.store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="sader_id" id="sader_id_value">
                                <div class="form-group">
                                    <label class="col-md-12">  تاریخ جواب</label>
                                    <div class="col-md-12">
                                        <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>

                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">فایل</label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control" required name="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">رضایت</label>
                                    <div class="col-md-12">
                                        <select class="form-control" name="acceptStatus">
                                            <option value="" selected>انتخاب کنید</option>
                                            <option value="1">قناعت</option>
                                            <option value="2">عدم قناعت</option>
                                        </select>
                                    </div>
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
    $('#openResponseModal').click(function(){
        var id = $(this).attr('sader_id');
        console.log(id);
        $('#sader_id_value').val(id);
    });
</script>
</body>
</html>
