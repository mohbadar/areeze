<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:31:25 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/favicon.ico">

    <title>Kar shenasi List</title>


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
<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../images/arg-afghanistan.jpg)" data-overlay="7">
<div class="wrapper">

    <header class="main-header">
        @include('includes.header')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        @include('includes.sidebar')
    </aside>


    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h3 class="page-title">لست معطل</h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">لست معطل</li>
                                    <li class="breadcrumb-item active" aria-current="page">لست معطل</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Main content -->
            <section class="content">


                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="" style="text-align:center;">لست معطل</h1>
                                {{--  <h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>--}}
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">

                                    <table id="example" class="table table-lg invoice-archive">
                                        <thead>
                                        <tr>
                                            <th>شماره مسلسل</th>
                                            <th>اسم</th>
                                         {{--   <th>موضوع</th>--}}
                                            <th>نوعیت موضوع</th>
                                            <th>نمبر ثبت</th>
                                            <th>نوعیت موضوع</th>
                                            <th>حالت</th>
                                            <th>تاریخ</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($confirms as $confirm)
                                            @if($confirm->Shekayatform->identity_photo == NULL && $confirm->Shekayatform->complain_photo == NULL && $confirm->Shekayatform->complainer_photo == NULL)
                                                <tr>
                                                    <td>{{$confirm->id}}</td>
                                                    <td>{{$confirm->Shekayatform->first_name . '  '. $confirm->Shekayatform->last_name}}</td>
                                                  {{--  <td>{{$confirm->Shekayatform->description}}</td>--}}
                                                    <td>{{$confirm->Shekayatform->priority->name}}</td>
                                                    <td>{{$confirm->Shekayatform->form_random_number}}</td>
                                                       <td>{{$confirm->Shekayatform->subject->name}}</td>

                                                    <td>{{$confirm->status->status_name}}</td>
                                                    <td>{{$confirm->des_date}}</td>
                                                    <td class="text-center">


                                                        <div class="list-icons-item dropdown">

                                                            <a href="#" class="editFormPopupLink btn btn-warning" confirm_id = "{{$confirm->id}}" shekayat_form_id="{{$confirm->shekayatform_id}}" data-toggle="modal" data-target="#myModal"  >{{--<i class="fa fa-pencil" style="color: #fff !important;" ></i>--}}
                                                                <i  class="fa fa-pencil-square" style="color: #fff !important;" ></i></a>

                                                            <a class="btn btn-danger" title="" data-original-title="Delete">
                                                                <i class="fa fa-trash" style="color: white;"></i>
                                                            </a>
                                                        </div>



                                                    </td>


                                                </tr>

                                            @endif
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
    <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">مسترد</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <form novalidate  method="POST" id="popupForm"  action="" enctype="multipart/form-data" >
                        <input type="hidden" name="_method" value="put" />
                        <input type="hidden" id="shekayat_id" name="shekayat_id">
                        <input type="hidden" id="confirm_id" name="confirm_id">
                        {{--                        <input type="hidden" id="shekayat_id" _method="shekayat_id">--}}
                        {{csrf_field()}}

                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <h5>اسم<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="first_name" name="first_name" class="form-control" required data-validation-required-message="This field is required" > </div>

                                </div>
                                <div class="form-group">
                                    <h5>اسم پدر<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="father_name" id="father_name" class="form-control" required data-validation-required-message="This field is required"  > </div>

                                </div>
                                <div class="form-group">
                                    <h5>تخلص<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="last_name" name="last_name" class="form-control" required data-validation-required-message="This field is required" > </div>

                                </div>
                                <div class="form-group">
                                    <h5>وظیفه<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="job_title" name="job_title" class="form-control" required data-validation-required-message="This field is required"  > </div>

                                </div>

                                <div class="form-group">
                                    <h5>ادرس فعلی<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="current_address" name="current_address" class="form-control" required data-validation-required-message="This field is required" > </div>

                                </div>
                                <div class="form-group">
                                    <h5>ایمیل ادرس <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="email" id="email" name="email" class="form-control" required data-validation-required-message="This field is required" > </div>
                                </div>
                                <div class="form-group">
                                    <h5>سن<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="number"  id="age" name="age" class="form-control" required data-validation-required-message="This field is required" > </div>
                                </div>
                                <div class="form-group">
                                    <h5>تذکره<span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="number" id="national_identity_card" name="national_identity_card" data-validation-match-match="password" class="form-control" required > </div>
                                </div>
                                <div class="form-group">
                                    <h5>شماره مبایل <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <div class="input-group">
                                            <input type="number"  id="phone_number" name="phone_number" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required" > <span class="input-group-addon" id="basic-addon1"><i class="fa fa-dollar"></i></span> </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>جواب سابق علیه  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="old_reply" name="old_reply" class="form-control" required data-validation-required-message="This field is required" maxlength="10" >
                                    </div>

                                </div>
                                <div class="form-group">
                                    <h5> نام معروض  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" id="maaroz_name" name="maaroz_name" class="form-control" required data-validation-required-message="This field is required" maxlength="10" >
                                    </div>

                                </div>


                                <div class="col-12">


                                    <div class="form-group">
                                        <h5>نوعیت <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="type_id" id="type_id" required class="form-control">
                                                <option value="">-نوعیت ـ</option>
                                                @foreach( $types as $type)
                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <h5>وزارت<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="ministry_id" id="ministry_id" required class="form-control">
                                                <option value="">-وزارت ـ</option>
                                                @foreach( $ministries as $ministrie)
                                                    <option value="{{$ministrie->id}}">{{$ministrie->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                               {{--     <div class="form-group">
                                        <h5>محتوا<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="content_id" id="content_id" required class="form-control">
                                                <option value="">-محتوا ـ</option>
                                                @foreach( $contents as $content)
                                                    <option value="{{$content->id}}">{{$content->content_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>--}}
                                    <div class="form-group">
                                        <h5>درجه تحصیلی <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="education_level_id" id="education_level_id" required class="form-control">
                                                <option value="">-درجه تحصیلی ـ</option>
                                                @foreach( $degrees as $degree)
                                                    <option value="{{$degree->id}}">{{$degree->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>نوع وظیفه<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="job_id" id="job_id" required class="form-control">
                                                <option value="">-نوع وظیفه ـ</option>
                                                @foreach( $jobs as $job)
                                                    <option value="{{$job->id}}">{{$job->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>ولایت<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="province_id" id="province_id" required class="form-control">
                                                <option value="">-ولایت ـ</option>
                                                @foreach( $provinces as $province)
                                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>ولسوالی <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="district_id" id="district_id" required class="form-control">
                                                @foreach($districts as $district)
                                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>نوعیت موضوع<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="type_subject_id" id="type_subject_id" required class="form-control">
                                                <option value="">-نوعیت موضوع ـ</option>
                                                @foreach( $subjects as $subject)
                                                    <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>ریاست<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="office_id" id="office_id" required class="form-control">
                                                <option value="">-ریاست ـ</option>
                                                @foreach( $aops as $aop)
                                                    <option value="{{$aop->id}}">{{$aop->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>طریق ارتباطی<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <select name="relation_type_id" id="relation_type_id" required class="form-control">
                                                <option value="">-طریق ارتباطی ـ</option>
                                                @foreach( $relations as $relation)
                                                    <option value="{{$relation->id}}">{{$relation->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>موضوع<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <textarea name="subject" id="subject" class="form-control" required placeholder="Textarea text" ></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>فوتوکاپی تذکره / پاسپورت <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="identity_photo" id="identity_photo" class="form-control" required >  </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>فوتوکاپی عریضه / شکایت<span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="complain_photo" id="complain_photo" class="form-control" required > </div>
                                    </div>
                                    <div class="form-group">
                                        <h5>  عکس عارض <span class="text-danger">*</span></h5>
                                        <div class="controls">
                                            <input type="file" name="complainer_photo" id="complainer_photo" class="form-control" required > </div>

                                    </div>
                                </div>
                            </div>

                            <div class="row" style="display: block;">
                                <div class="col-md-12">
                                    <div class="form-group" >
                                        <h5>جنسیت <span class="text-danger">*</span></h5>
                                        <fieldset class="controls" >
                                            <input name="gender" type="radio" id="gender" value="0" required >
                                            <label for="radio_1">خانم</label>
                                        </fieldset>
                                        <fieldset>
                                            <input name="gender" type="radio" id="gender" value="1" >
                                            <label for="radio_2">اقا</label>
                                        </fieldset>
                                    </div>
                                </div>

                            </div>


                        </div>
                        <input type="submit" name="submit" value="تایید" class="btn btn-success btn-lg mt-8  text-center" >
                        {{--   @if($is_confirmed=='true')
                               <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg mt-8  text-center"  >مسترد </a>
                           @endif--}}
                    </form>

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>


<footer class="main-footer">

</footer>
<!-- Control Sidebar -->

<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>


<!-- ./wrapper -->
<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>
<script>

    $( ".editFormPopupLink" ).click(function() {
        var form_id =$(this).attr('shekayat_form_id');
        var confirm_id =$(this).attr('confirm_id');
        // alert(form_id);
        $.ajax({
            type:'get',
            url:'{!!URL::to('getform')!!}',
            data:{'id':form_id},
            success:function(data){



                //  console.log('success');
                console.log(data[0]);

                $('#popupForm').attr('action', "{{URL::to('shekayat-form-update')}}") ;
                $('#confirm_id').val(confirm_id) ;
                $('#shekayat_id').val(data[0]['id']) ;
                $('#first_name').val(data[0]['first_name']) ;
                $('#father_name').val(data[0]['father_name']) ;
                $('#last_name').val(data[0]['last_name']) ;
                $('#age').val(data[0]['age']) ;
                $('#job_title').val(data[0]['job_title']) ;
                $('#phone_number').val(data[0]['phone_number']) ;
                 $('#national_identity_card').val(data[0]['national_identity_card_NO']) ;
                $('#current_address').val(data[0]['current_address']) ;
                $('#email').val(data[0]['email']) ;
                $('#maaroz_name').val(data[0]['maaroz_name']) ;
                $('#old_reply').val(data[0]['old_reply']) ;
                $('#gender').attr('checked', 'checked');
                $('#subject').val(data[0]['description']).attr('selected', true);
                $('#type_id').val(data[0]['priority_id']).attr('selected', true);
                $('#ministry_id').val(data[0]['ministry_id']).attr('selected', true);
                $('#content_id').val(data[0]['content_id']).attr('selected', true);
                $('#education_level_id').val(data[0]['educational_level_id']).attr('selected', true);
                $('#district_id').val(data[0]['district_id']).attr('selected', true);
                $('#province_id').val(data[0]['province_id']).attr('selected', true);
                $('#office_id').val(data[0]['chairmanship_id']).attr('selected', true);
                $('#job_id').val(data[0]['job_id']).attr('selected', true);
                $('#type_subject_id').val(data[0]['subject_id']).attr('selected', true);
                $('#relation_type_id').val(data[0]['related_id']).attr('selected', true);






            },
            error:function(){

            }
        });
    });
</script>

<!-- ./wrapper -->


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

<!-- Morris.js charts -->
{{--
<script src="http://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>--}}
























</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:31:25 GMT -->
</html>
