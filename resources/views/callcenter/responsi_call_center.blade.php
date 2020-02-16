<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 05:56:08 GMT -->
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
<body class="hold-transition skin-info dark-sidebar sidebar-mini dash-transparent rtl bg-img" style="background-image: url(../../images/arg-afghanistan.jpg)!important;" data-overlay="7">
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

                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-header with-border" style="text-align: center !important;">
                        <h4 class="box-title" style="text-align: center !important;"> شکایت</h4>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form novalidate  method="POST" action="{{url('shekayat-form-update').'/'.$shekayat->id}}" enctype="multipart/form-data">

                                    {{csrf_field()}}  {{--{{route('shekayat-form.update',$shekayat->id)}}--}}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <h5>اسم<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="first_name" class="form-control" required data-validation-required-message="This field is required" value="{{$shekayat->first_name}}" > </div>
                                                {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                            </div>
                                            <div class="form-group">
                                                <h5>اسم پدر<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="father_name" class="form-control" required data-validation-required-message="This field is required" value="{{ $shekayat->father_name}}" > </div>
                                                {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                            </div>
                                            <div class="form-group">
                                                <h5>تخلص<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="last_name" class="form-control" required data-validation-required-message="This field is required" value="{{$shekayat->last_name}}"> </div>
                                                {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                            </div>
                                            <div class="form-group">
                                                <h5>وظیفه<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="job_title" class="form-control" required data-validation-required-message="This field is required"  value="{{$shekayat->job_title}}" > </div>
                                                {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                            </div>
                                            <div class="form-group">
                                                <h5>اداره مربوطه<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="text" class="form-control" required data-validation-required-message="This field is required"  value="{{$shekayat->related_office}}"> </div>
                                                {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                            </div>
                                            <div class="form-group">
                                                <h5>ادرس فعلی<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="current_address" class="form-control" required data-validation-required-message="This field is required" value="{{$shekayat->current_address}}"> </div>
                                                {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}
                                            </div>
                                            <div class="form-group">
                                                <h5>ایمیل ادرس <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" required data-validation-required-message="This field is required" value="{{ $shekayat->email}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>سن<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="age" class="form-control" required data-validation-required-message="This field is required" value="{{ $shekayat->age}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>تذکره<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="national_identity_card" data-validation-match-match="password" class="form-control" required value="{{$shekayat->national_identity_card_NO}}"> </div>
                                            </div>
                                            <div class="form-group">
                                                <h5>شماره مبایل <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <div class="input-group">
                                                        <input type="number"  name="phone_number" class="form-control" placeholder="Addon To Right" data-validation-required-message="This field is required" value="{{$shekayat->phone_number}}"> <span class="input-group-addon" id="basic-addon1"><i class="fa fa-dollar"></i></span> </div>
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <h5>جواب سابق علیه  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="old_reply" class="form-control" required data-validation-required-message="This field is required" maxlength="10" value="{{$shekayat->old_reply}}">
                                                </div>

                                            </div>
                                            <div class="form-group">
                                                <h5>نام معروض  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="maaroz_name" class="form-control" required data-validation-required-message="This field is required" maxlength="10" value="{{$shekayat->maaroz_name}}">
                                                </div>

                                            </div>


                                            <div class="col-12">



                                                <div class="form-group">
                                                    <h5>نوعیت <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="priority_id" id="select" required class="form-control">

                                                            @foreach( $types as $type)
                                                                @if($shekayat->priority_id==$type->id)
                                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach( $types as $type)
                                                                @if($shekayat->priority_id!=$type->id)
                                                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>وزارت<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="ministry_id" id="select" required class="form-control">

                                                            @foreach($ministries as $ministrie)
                                                                @if($shekayat->ministry_id==$ministrie->id)
                                                                    <option value="{{$ministrie->id}}">{{$ministrie->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach($ministries as $ministrie)
                                                                @if($shekayat->ministry_id!=$ministrie->id)
                                                                    <option value="{{$ministrie->id}}">{{$ministrie->name}}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <h5>درجه تحصیلی <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="education_level_id" id="select" required class="form-control">

                                                            @foreach($degrees as $degree)
                                                                @if($shekayat->education_level_id==$degree->id)
                                                                    <option value="{{$degree->id}}">{{$degree->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach($degrees as $degree)
                                                                @if($shekayat->education_level_id!=$degree->id)
                                                                    <option value="{{$degree->id}}">{{$degree->name}}</option>
                                                                @endif
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>نوع وظیفه<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="job_id" id="select" required class="form-control">
                                                            @foreach( $jobs as $job)
                                                                @if($shekayat->job_id==$job->id)
                                                                    <option value="{{$job->id}}">{{$job->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach( $jobs as $job)
                                                                @if($shekayat->job_id!=$job->id)
                                                                    <option value="{{$job->id}}">{{$job->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>ولایت<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="province_id" id="select" required class="form-control">
                                                            @foreach( $provinces as $province)
                                                                @if($shekayat->province_id==$province->id)
                                                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach( $provinces as $province)
                                                                @if($shekayat->province_id!=$province->id)
                                                                    <option value="{{$province->id}}">{{$province->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>ولسوالی <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="district_id" id="select" required class="form-control">

                                                            @foreach( $districts as $district)
                                                                @if($shekayat->district_id==$district->id)
                                                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                                                @endif
                                                            @endforeach
                                                            @foreach( $districts as $district)
                                                                @if($shekayat->district_id!=$district->id)
                                                                    <option value="{{$district->id}}">{{$district->name}}</option>
                                                                @endif
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>نوعیت موضوع<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="type_subject_id" id="select" required class="form-control">

                                                            @foreach( $subjects as $prov)
                                                                @if($shekayat->subject_id==$prov->id)
                                                                    <option value="{{$prov->id}}">{{$prov->name}}</option>
                                                                @endif

                                                            @endforeach
                                                            @foreach( $subjects as $prov)
                                                                @if($shekayat->subjects_id!=$prov->id)
                                                                    <option value="{{$prov->id}}">{{$prov->name}}</option>
                                                                @endif

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>ریاست<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="office_id" id="select" required class="form-control">
                                                            @foreach( $aops as $aop)
                                                                @if($shekayat->aop_id==$aop->id)
                                                                    <option value="{{$aop->id}}">{{$aop->name}}</option>
                                                                @endif

                                                            @endforeach
                                                            @foreach( $aops as $aop)
                                                                @if($shekayat->aop_id!=$aop->id)
                                                                    <option value="{{$aop->id}}">{{$aop->name}}</option>
                                                                @endif

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <h5>طریق ارتباطی<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="relation_type_id" id="select" required class="form-control">

                                                            @foreach( $relations as $relation)
                                                                @if($shekayat->relation_id==$relation->id)
                                                                    <option value="{{$relation->id}}">{{$relation->name}}</option>
                                                                @endif

                                                            @endforeach
                                                            @foreach( $relations as $relation)
                                                                @if($shekayat->relation_id!=$relation->id)
                                                                    <option value="{{$relation->id}}">{{$relation->name}}</option>
                                                                @endif

                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <h5>موضوع<span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <textarea name="subject" id="textarea" class="form-control"  cols="8" rows="8"  required placeholder="Textarea text" >{{$shekayat->description}}</textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>


                                        <br><br><br>
                                        <div class="row" style="display: block;">
                                            <div class="col-md-12">
                                                <div class="form-group" >
                                                    <h5>جنسیت <span class="text-danger">*</span></h5>
                                                    <fieldset class="controls" >
                                                        <input name="gender" type="radio" id="radio_1" id="radio_1" value="0" required {{ ($shekayat->gender=="0")? "checked" : "" }}  >
                                                        <label for="radio_1">خانم</label>
                                                    </fieldset>
                                                    <fieldset>
                                                        <input name="gender" type="radio" id="radio_2" value="1" {{ ($shekayat->gender=="1")? "checked" : "" }}>
                                                        <label for="radio_2">اقا</label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                        </div>


                                    </div>
                                    <div class="">
                                        <div class="row">
                                            <hr>
                                            <div class="col-xs-6 col-sm-4">
                                                <h5>فوتوکاپی تذکره / پاسپورت <span class="text-danger">*</span></h5>
                                                <a href="{{url('getDownload/'. $shekayat->identity_photo.'?shekayatform_id='.$shekayat->id)}}" type="button" class="dropdown-item btn btn-info downloadButton" id="custom-button" style="display: inline;"><i class="fa fa-download"></i> Download</a>

                                            </div>

                                            <div class="col-xs-6 col-sm-4">
                                                <h5>  عکس عارض <span class="text-danger">*</span></h5>
                                                <a href="{{url('getDownload/'. $shekayat->complainer_photo.'?shekayatform_id='.$shekayat->id)}}" type="button" class="dropdown-item btn btn-info downloadButton" id="custom-button1" style="display: inline;"><i class="fa fa-download"></i> Download</a>
                                                <!-- Optional: clear the XS cols if their content doesn't match in height -->
                                            </div>

                                            <div class="col-xs-6 col-sm-4">
                                                <h5>فوتوکاپی عریضه / شکایت<span class="text-danger">*</span></h5>
                                                <a href="{{url('getDownload/'. $shekayat->complain_photo.'?shekayatform_id='.$shekayat->id)}}" type="button" class="dropdown-item  btn btn-info downloadButton" id="custom-button2" style="display: inline;"><i class="fa fa-download"></i> Download</a>
                                            </div>
                                        </div>
                                    </div>


                                    <br><br><br>
                                    <input type="submit" name="submit" value="تایید" class="btn btn-success btn-lg mt-8  text-center" >
                                    @if($is_confirmed=='true')
                                        <a href="" data-toggle="modal" data-target="#myModal" class="btn btn-success btn-lg mt-8  text-center"  >جواب</a>
                                    @endif
                                </form>


                                <div id="myModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">جواب</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form class="form-horizontal"  method="POST" action="{{route('confirm.store')}}" enctype="multipart/form-data">

                                                <div class="modal-body">
                                                    {{csrf_field()}}
                                                    <input type="hidden" value="{{$shekayat->id}}" name="shekayatId">
                                                    <div class="form-group">

                                                        <label class="col-md-12">  تاریخ جواب</label>
                                                        <div class="col-md-12">
                                                            <input type="date" name="des_date" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-12">جواب</label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" placeholder="جواب" cols="4"  rows="6" name="description"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <h5>حالت<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="status_id" id="select" required class="form-control">
                                                                <option value="">-حالت ـ</option>
                                                                @foreach( $statuses as $statuse)
                                                                    <option value="{{$statuse->id}}">{{$statuse->status_name}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-success">تایید</button>
                                                    <button type="button" class="btn btn-default float-right" data-dismiss="modal">بستن</button>
                                                </div>
                                            </form>

                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>



                                <br>


                                <div id="myModal2" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">حفظ</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <div class="modal-body">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-md-12">تاریخ</label>
                                                        <div class="col-md-12">
                                                            <input type="date" name="date" class="form-control" required data-validation-required-message="This field is required"> </div>
                                                        {{-- <div class="form-control-feedback"><small>Add <code>required</code> attribute to field for required validation.</small></div>--}}

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="col-md-12">دلایل حفظ</label>
                                                        <div class="col-md-12">
                                                            <textarea class="form-control" placeholder="دلایل حفظ" cols="4" rows="6"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-success" data-dismiss="modal">تایید</button>
                                                <button type="button" class="btn btn-default float-right" data-dismiss="modal">بستن</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>



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
                            <img src="../images/avatar/1.jpg" alt="...">
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
                            <img src="../images/avatar/2.jpg" alt="...">
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
                            <img src="../images/avatar/3.jpg" alt="...">
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
                            <img src="../images/avatar/4.jpg" alt="...">
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
                            <img src="../images/avatar/1.jpg" alt="...">
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
                            <img src="../images/avatar/2.jpg" alt="...">
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
                            <img src="../images/avatar/3.jpg" alt="...">
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
                            <img src="../images/avatar/4.jpg" alt="...">
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
                        <input type="checkbox" id="basic_checkbox_1" class="filled-in">
                        <label for="basic_checkbox_1" class="mb-0 h-15"></label>
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
                        <input type="checkbox" id="basic_checkbox_2" class="filled-in">
                        <label for="basic_checkbox_2" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_3" class="filled-in">
                        <label for="basic_checkbox_3" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_4" class="filled-in">
                        <label for="basic_checkbox_4" class="mb-0 h-15"></label>
                        <span class="text-line">Proin nec mi porta</span>
                        <small class="badge bg-success"><i class="fa fa-clock-o"></i> 3 days</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_5" class="filled-in">
                        <label for="basic_checkbox_5" class="mb-0 h-15"></label>
                        <span class="text-line">Maecenas scelerisque</span>
                        <small class="badge bg-primary"><i class="fa fa-clock-o"></i> 1 week</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_6" class="filled-in">
                        <label for="basic_checkbox_6" class="mb-0 h-15"></label>
                        <span class="text-line">Vivamus nec orci</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 1 month</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_7" class="filled-in">
                        <label for="basic_checkbox_7" class="mb-0 h-15"></label>
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
                        <input type="checkbox" id="basic_checkbox_8" class="filled-in">
                        <label for="basic_checkbox_8" class="mb-0 h-15"></label>
                        <span class="text-line">Phasellus interdum</span>
                        <small class="badge bg-info"><i class="fa fa-clock-o"></i> 4 hours</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5 by-1">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_9" class="filled-in">
                        <label for="basic_checkbox_9" class="mb-0 h-15"></label>
                        <span class="text-line">Quisque sodales</span>
                        <small class="badge bg-warning"><i class="fa fa-clock-o"></i> 1 day</small>
                        <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                        </div>
                    </li>
                    <li class="py-15 px-5">
                        <!-- checkbox -->
                        <input type="checkbox" id="basic_checkbox_10" class="filled-in">
                        <label for="basic_checkbox_10" class="mb-0 h-15"></label>
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



<!-- jQuery 3 -->
<script src="{{asset('assets/vendor_components/jquery-3.3.1/jquery-3.3.1.js')}}"></script>
<!-- Hyper Admin App -->
<script src="{{asset('/js/template.js')}}"></script>

<script src="{{asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')}}"></script>

<style>
    .downloadButton {
        padding: 10px;
        color: white !important;
        background-color: #3399ff;
        border: 1px solid #000;
        border-radius: 5px;
        cursor: pointer;
    }
</style>

</body>

<!-- Mirrored from hyper-admin-templates.multipurposethemes.com/main-rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Nov 2019 05:58:17 GMT -->
</html>
