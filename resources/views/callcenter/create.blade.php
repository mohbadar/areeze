<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 05:56:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Create Areeza</title>

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
<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../images/arg-afghanistan.jpg) " data-overlay="7">
<div class="wrapper">

    <header class="main-header">
        @include('includes.header')
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar-->
        @include("includes.sidebar")
    </aside>
    <div class="content-wrapper">
        <div class="container-full">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        {{--   <h3 class="page-title">Form Validation</h3>--}}
                        <div class="d-inline-block align-items-center">
                            <nav>
                                {{--      <ol class="breadcrumb">
                                          <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                          <li class="breadcrumb-item" aria-current="page">Forms</li>
                                          <li class="breadcrumb-item active" aria-current="page">Form Validation</li>
                                      </ol>--}}
                            </nav>
                        </div>
                    </div>
                    <div class="right-title">

                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                @include('includes.successmessage')
                <div class="box-header with-border" style="text-align: center !important;">
                    <h4 class="box-title" style="text-align: center !important;"> شکایت</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form novalidate  method="post" action="{{route('shekayat-form.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <h5>اسم<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="first_name" class="form-control" required data-validation-required-message="This field is required" > </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                        </div>
                                        <div class="form-group">
                                            <h5>اسم پدر<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="father_name" class="form-control" required data-validation-required-message="This field is required" > </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                        </div>
                                        <div class="form-group">
                                            <h5>تخلص<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="last_name" class="form-control" required data-validation-required-message="This field is required" > </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                        </div>
                                        <div class="form-group">
                                            <h5>وظیفه<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="job_title" class="form-control" required data-validation-required-message="This field is required" > </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                        </div>
                                        <div class="form-group">
                                            <h5>اداره مربوطه<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="related_office" class="form-control" required data-validation-required-message="This field is required" > </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                        </div>

                                        <div class="form-group">
                                            <h5>ادرس فعلی<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="current_address" class="form-control" required data-validation-required-message="This field is required" > </div>
                                            {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                        </div>
                                        <div class="form-group">
                                            <h5>ایمیل ادرس <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required"> </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>سن<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="number" name="age" class="form-control" required data-validation-required-message="This field is required"> </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>تذکره<span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="number" name="national_identity_card" data-validation-match-match="password" class="form-control" required> </div>
                                        </div>
                                        <div class="form-group">
                                            <h5>شماره مبایل <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <div class="input-group">
                                                    <input type="number"  name="phone_number" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required"> <span class="input-group-addon" id="basic-addon1"><i class="fa fa-dollar"></i></span> </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>جواب سابق علیه  <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="old_reply" class="form-control" required data-validation-required-message="This field is required" maxlength="10">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <h5>معروض  <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="maaroz_name" class="form-control" required data-validation-required-message="This field is required" maxlength="10">
                                            </div>

                                        </div>


                                        <div class="col-12">



                                            <div class="form-group">
                                                <h5>نوعیت <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="priority_id" id="select" required class="form-control">
                                                        <option value="">-نوعیت ـ</option>
                                                        @foreach( $priorities as $prioritie)
                                                            <option value="{{$prioritie->id}}">{{$prioritie->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>وزارت<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="ministry_id" id="select" required class="form-control">
                                                        <option value="">-وزارت ـ</option>
                                                        @foreach( $ministries as $ministrie)
                                                            <option value="{{$ministrie->id}}">{{$ministrie->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <h5>درجه تحصیلی <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="education_level_id" id="select" required class="form-control">
                                                        <option value="">-درجه تحصیلی ـ</option>
                                                        @foreach( $edu_levels as $degree)
                                                            <option value="{{$degree->id}}">{{$degree->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>نوع وظیفه<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="job_id" id="select" required class="form-control">
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
                                                    <select name="province_id" id="select" required class="form-control">
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
                                                    <select name="district_id" id="select" required class="form-control">
                                                        <option value="">-ولسوالی ـ</option>
                                                        @foreach( $districts as $district)
                                                            <option value="{{$district->id}}">{{$district->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>نوعیت موضوع<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="subject_id" id="subject_id" required class="form-control">
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
                                                    <select name="office_id" id="select" required class="form-control">
                                                        <option value="">-ریاست ـ</option>
                                                        @foreach( $chairmanships as $aop)
                                                            <option value="{{$aop->id}}">{{$aop->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>طریق ارتباطی<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="related_id" id="select" required class="form-control">
                                                        <option value="">-طریق ارتباطی ـ</option>
                                                        @foreach( $relateds as $relation)
                                                            <option value="{{$relation->id}}">{{$relation->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>تاریخ <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>موضوع<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea name="subject" id="textarea" class="form-control" required placeholder="Textarea text" rows="5" cols="8"></textarea>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row" style="display: block;">
                                            <div class="col-md-12">
                                                <div class="form-group" >
                                                    <h5>جنسیت <span class="text-danger">*</span></h5>
                                                    <fieldset class="controls" >
                                                        <input name="gender" type="radio" id="radio_1" value="1" required>
                                                        <label for="radio_1">خانم</label>
                                                    </fieldset>
                                                    <fieldset style="color:#ffffec;">
                                                        <input name="gender" type="radio" id="radio_2" value="2" >
                                                        <label for="radio_2">اقا</label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>

                                        <input type="submit" name="submit" value="ثبت" class="btn btn-success btn-lg"  style="position: center;" >
                                    </div>
                                </div>
                            </form>

                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
</div>



<!-- Control Sidebar -->

<!-- /.control-sidebar -->

<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->



<!-- jQuery 3 -->

<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>
<!-- Hyper Admin App -->
<script src="{{asset('/js/template.js')}}"></script>
<script>
    $("#success-alert").fadeTo(90000, 80000).slideUp(80000, function(){
        $("#success-alert").slideUp(80000);
    });
</script>

</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 05:58:17 GMT -->
</html>
