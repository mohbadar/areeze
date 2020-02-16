<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:31:25 GMT -->
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
<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../../images/arg-afghanistan.jpg) " data-overlay="7">
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
                        <h3 class="page-title">تمام حفظ </h3>
                        <div class="d-inline-block align-items-center">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                    <li class="breadcrumb-item" aria-current="page">حفظ</li>
                                    <li class="breadcrumb-item active" aria-current="page">لست حفظ</li>
                                </ol>
                            </nav>
                        </div>
                    </div>

                    <div class="right-title">
                        <div class="dropdown">
                            <button class="btn btn-outline dropdown-toggle no-caret" type="button" data-toggle="dropdown"><i class="mdi mdi-dots-horizontal"></i></button>

                        </div>

                    </div>
                </div>
            </div>


                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h1 class="" style="text-align:center;">تمام تکمیل</h1>
                                {{--  <h6 class="box-subtitle">Export Invoice List to Copy, CSV, Excel, PDF & Print</h6>--}}
                            </div>

                            <div class="box-body">
                                <div class="table-responsive">
                                    @if(isset($details))
                                        <p> The Search results for your query <b> {{ $query }} </b> are :</p>


                                    <table id="example" class="table table-lg invoice-archive">

                                        <thead>
                                        <tr>
                                            <th>نمبر ثبت</th>
                                            <th>نام</th>
                                            <th>موصوع</th>
                                            <th> نوعیت موصوع </th>
                                            <th>حالت</th>
                                            <th>نمبر </th>
                                            <th>تاریخ</th>
                                            <th>رهنمای</th>

                                            <th class="text-center">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($shekayats as $info)
                                            <tr>
                                                <td>{{$info->id}}</td>
                                                <td>{{$info->first_name . '  '. $info->last_name}}</td>
                                                <td>{{$info->description}}</td>
                                                <td>{{$info->subject->name}}</td>
                                                <td>{{$info->priority->name}}</td>
                                                <td>{{$info->form_random_number}}</td>

                                                <td>{{$info->date}}</td>
                                                <td>

                                                    <a id="openHefzModal" Shekayatform_id="{{$info->id}} " data-toggle="modal" data-target="#hefz_modal" class="btn btn-success btn-sm mt-8  text-center">رهنمای</a>

                                                </td>

                                                <td> <a href="#" class="editFormPopupLink btn btn-warning" {{--Shekayatform_id = "{{$info->id}}"--}} shekayat_form_id="{{$info->shekayatform_id}}" data-toggle="modal" data-target="#myModal"  >{{--<i class="fa fa-pencil shekayatform_id" style="color: #fff !important;" ></i>--}}
                                                        <i  class="fa fa-pencil-square" style="color: #fff !important;" ></i></a></td>


                                            </tr>


                                        @endforeach

                                        </tbody>



                                    </table>

                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </section>
            <div id="hefz_modal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">رهنمای</h4>
                            <a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>
                        </div>
                        <form class="form-horizontal" method="post" action="{{route('guide.store')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="shekayatform_id" class="shekayat_id_value">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="col-md-12">تاریخ</label>
                                    <div class="col-md-12">
                                        <input type="date" name="des_date" class="form-control" required data-validation-required-message="This field is required"> </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12">رهنمای</label>
                                    <div class="col-md-12">
                                        <input class="form-control" required type="text" name="title">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12"> تشریحات </label>
                                    <div class="col-md-12">
                                        <textarea type="text" class="form-control" required name="description" cols="6" rows="4"></textarea>
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
                                                        <input type="hidden" id="shekayat_id" _method="shekayat_id">
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
                                                 <div class="form-group">
                                                     <h5>محتوا<span class="text-danger">*</span></h5>
                                                     <div class="controls">
                                                    {{--     <select name="content_id" id="content_id" required class="form-control">
                                                             <option value="">-محتوا ـ</option>
                                                             @foreach( $contents as $content)
                                                                 <option value="{{$content->id}}">{{$content->content_name}}</option>
                                                             @endforeach
                                                         </select>--}}
                                                     </div>
                                                 </div>
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

                                       <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg mt-8  text-center"  >مسترد </a>

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


    <footer class="main-footer">

    </footer>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">

        <div class="rpanel-title"><span class="btn pull-right"><i class="ion ion-close" data-toggle="control-sidebar"></i></span> </div>
        <!-- Create the tabs -->
        <ul class="nav nav-tabs control-sidebar-tabs">
            <li class="nav-item"><a href="#control-sidebar-home-tab" data-toggle="tab">Chat</a></li>
            <li class="nav-item"><a href="#control-sidebar-settings-tab" data-toggle="tab">Todo</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Users</p>
                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                </div>
                <div class="lookup lookup-sm lookup-right d-none d-lg-block">
                    <input type="text" name="s" placeholder="Search" class="w-p100">
                </div>
                <div class="media-list media-list-hover mt-20">
                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="../../images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="../../images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="../../images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="../../images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-success" href="#">
                            <img src="../../images/avatar/1.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Tyler</strong></a>
                            </p>
                            <p>Praesent tristique diam...</p>
                            <span>Just now</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-danger" href="#">
                            <img src="../../images/avatar/2.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Luke</strong></a>
                            </p>
                            <p>Cras tempor diam ...</p>
                            <span>33 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-warning" href="#">
                            <img src="../../images/avatar/3.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                    <div class="media py-10 px-0">
                        <a class="avatar avatar-lg status-primary" href="#">
                            <img src="../../images/avatar/4.jpg" alt="...">
                        </a>
                        <div class="media-body">
                            <p class="font-size-16">
                                <a class="hover-primary" href="#"><strong>Evan</strong></a>
                            </p>
                            <p>In posuere tortor vel...</p>
                            <span>42 min ago</span>
                        </div>
                    </div>

                </div>

            </div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <div class="flexbox">
                    <a href="javascript:void(0)" class="text-grey">
                        <i class="ti-more"></i>
                    </a>
                    <p>Todo List</p>
                    <a href="javascript:void(0)" class="text-right text-grey"><i class="ti-plus"></i></a>
                </div>
                <ul class="todo-list mt-20">
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_51" class="filled-in">
                        <label for="basic_checkbox_51" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_52" class="filled-in">
                        <label for="basic_checkbox_52" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_53" class="filled-in">
                        <label for="basic_checkbox_53" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_54" class="filled-in">
                        <label for="basic_checkbox_54" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_55" class="filled-in">
                        <label for="basic_checkbox_55" class="mb-0 h-15"></label>
                        <span class="text-line">Maecenas scelerisque</span>
                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_56" class="filled-in">
                        <label for="basic_checkbox_56" class="mb-0 h-15"></label>
                        <span class="text-line">Vivamus nec orci</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_57" class="filled-in">
                        <label for="basic_checkbox_57" class="mb-0 h-15"></label>
                        <!-- todo text -->
                        <span class="text-line">Nulla vitae purus</span>
                        <!-- Emphasis label -->
                        <small class="badge bg-danger"><i class="fa fa-clock-o"></i> 2 mins</small>
                        <!-- General tools such as edit or delete-->
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_58" class="filled-in">
                        <label for="basic_checkbox_58" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_59" class="filled-in">
                        <label for="basic_checkbox_59" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_60" class="filled-in">
                        <label for="basic_checkbox_60" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
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
<script>
    $('#openSaderModal,#openHefzModal').click(function(){
        var id = $(this).attr('Shekayatform_id');
        console.log(id);
        $('.shekayat_id_value').val(id);
    });
</script>

<script>

    $( ".editFormPopupLink" ).click(function() {
        console.log("form id",$(this).attr('shekayatform_id'));
        var form_id =$(this).attr('shekayat_form_id');
    /*    var confirm_id =$(this).attr('shekayat_guides_id');*/
        // alert(form_id);
        $.ajax({
            type:'get',
            url:'{!!URL::to('formget')!!}',
            data:{'id':form_id},
            success:function(data){



                //  console.log('success');
                console.log(data[0]);

                $('#popupForm').attr('action', "{{URL::to('shekayat_form')}}") ;
            /*    $('#confirm_id').val(confirm_id) ;*/
                $('#shekayat_id').val(data[0]['shekayatform_id']) ;
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
                $('#gender').val(data[0]['gender']) ;
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
</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/pages/invoicelist.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 06:31:25 GMT -->
</html>
