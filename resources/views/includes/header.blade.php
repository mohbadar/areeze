<script type="text/javascript">
  
   $(document).ready(function(){

     $.ajax({
            url:  '/notifications',
            type:  'get',
            dataType:  'json',
            success: function  (data){

                console.log("data: ", data)
                   $('.notifications').empty();
                   var rows =  '';
                   data.notifications.forEach(item => {
                        rows += `
                        <li><a href="/notifications/${item.id}">${item.description}</a></li>
                        `
                })
               $('.notifications').append(rows);
           }
       });

   });
</script>

<header class="main-header">
    <!-- Logo -->
    <a href="index.html" class="logo">
        <!-- mini logo -->
        <div class="logo-mini">
            <span class="light-logo"><img src="../../images/logo-light.png" alt="logo"></span>
            <span class="dark-logo"><img src="../../images/logo-dark.png" alt="logo"></span>
        </div>
        <!-- logo-->
        <div class="logo-lg">
            <span class="light-logo"><img src="../../images/logo-light-text.png" alt="logo"></span>
            <span class="dark-logo"><img src="../../images/logo-dark-text.png" alt="logo"></span>
        </div>
    </a>
    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="ti-align-left"></i>
            </a>
            <a id="toggle_res_search" data-toggle="collapse" data-target="#search_form" class="res-only-view" href="javascript:void(0);"><i class="mdi mdi-magnify"></i></a>
            <form id="search_form" role="search" class="top-nav-search pull-left collapse ml-20" method="post" action="/search">
                {{ csrf_field() }}
                <div class="input-group">
                    <input type="text" name="q"  class="form-control" placeholder="Search">
                    <span class="input-group-btn">
				<button type="button" class="btn  btn-default" data-target="#search_form" data-toggle="collapse" aria-label="Close" aria-expanded="true"><i class="mdi mdi-magnify"></i></button>
				</span>
                </div>
            </form>

        </div>

        <div class="navbar-custom-menu r-side">
            <ul class="nav navbar-nav">

                <!-- Notifications -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                    </a>
                    <ul class="dropdown-menu animated flipInY">

                        <li class="header">
                            <div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
                                <div class="flexbox">
                                    <div>
                                        <span class="font-light">Notifications</span>
                                    </div>
                                    <div class="font-size-40">
                                        <i class="mdi mdi-message-alert"></i>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu sm-scrol notifications">
                          
                            </ul>
                        </li>
                        <li class="footer"><a href="#" class="text-white bg-danger">View all</a></li>
                    </ul>
                </li>
                <!-- Messages -->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-email"></i>
                    </a>
                    <ul class="dropdown-menu animated flipInY">

                        <li class="header">
                            <div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
                                <div class="flexbox">
                                    <div>
                                        <h3 class="mb-0 mt-0">5 New</h3>
                                        <span class="font-light">Messages</span>
                                    </div>
                                    <div class="font-size-40">
                                        <i class="mdi mdi-email-alert"></i>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu sm-scrol">
                                <li><!-- start message -->
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../images/user2-160x160.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Lorem Ipsum
                                                <small><i class="fa fa-clock-o"></i> 15 mins</small>
                                            </h4>
                                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                                        </div>
                                    </a>
                                </li>
                                <!-- end message -->
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Nullam tempor
                                                <small><i class="fa fa-clock-o"></i> 4 hours</small>
                                            </h4>
                                            <span>Curabitur facilisis erat quis metus congue viverra.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Proin venenatis
                                                <small><i class="fa fa-clock-o"></i> Today</small>
                                            </h4>
                                            <span>Vestibulum nec ligula nec quam sodales rutrum sed luctus.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../images/user3-128x128.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Praesent suscipit
                                                <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                            </h4>
                                            <span>Curabitur quis risus aliquet, luctus arcu nec, venenatis neque.</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="pull-left">
                                            <img src="../../images/user4-128x128.jpg" class="rounded-circle" alt="User Image">
                                        </div>
                                        <div class="mail-contnet">
                                            <h4>
                                                Donec tempor
                                                <small><i class="fa fa-clock-o"></i> 2 days</small>
                                            </h4>
                                            <span>Praesent vitae tellus eget nibh lacinia pretium.</span>

                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer">
                            <a href="#" class="text-white bg-info">See all e-Mails</a></li>
                    </ul>
                </li>
                <!-- Tasks-->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-bulletin-board"></i>
                    </a>
                    <ul class="dropdown-menu animated flipInY">

                        <li class="header">
                            <div class="bg-img text-white p-20" style="background-image: url(../../images/user-info.jpg)" data-overlay="5">
                                <div class="flexbox">
                                    <div>
                                        <h3 class="mb-0 mt-0">6 New</h3>
                                        <span class="font-light">Tasks</span>
                                    </div>
                                    <div class="font-size-40">
                                        <i class="mdi mdi-bulletin-board"></i>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu sm-scrol">
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Lorem ipsum dolor sit amet
                                            <small class="pull-right">30%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 30%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">30% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Vestibulum nec ligula
                                            <small class="pull-right">20%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-info" style="width: 20%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Donec id leo ut ipsum
                                            <small class="pull-right">70%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-success" style="width: 70%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">70% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Praesent vitae tellus
                                            <small class="pull-right">40%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-warning" style="width: 40%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">40% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Nam varius sapien
                                            <small class="pull-right">80%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-primary" style="width: 80%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                                <li><!-- Task item -->
                                    <a href="#">
                                        <h3>
                                            Nunc fringilla
                                            <small class="pull-right">90%</small>
                                        </h3>
                                        <div class="progress xs">
                                            <div class="progress-bar progress-bar-info" style="width: 90%" role="progressbar"
                                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <!-- end task item -->
                            </ul>
                        </li>
                        <li class="footer"><a href="#" class="text-white bg-warning">View all tasks</a></li>
                    </ul>
                </li>

                <!-- User Account-->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="../../images/avatar/7.jpg" class="user-image rounded-circle" alt="User Image">
                    </a>
                    <ul class="dropdown-menu animated flipInX">
                        <!-- User image -->
                        <li class="user-header bg-img" style="background-image: url(../../images/user-info.jpg)" data-overlay="3">
                            <div class="flexbox align-self-center">
                                <img src="../../images/avatar/7.jpg" class="float-left rounded-circle" alt="User Image">
                                <h4 class="user-name align-self-center">
                                    <span>Samuel Brus</span>
                                    <small>samuel@gmail.com</small>
                                </h4>
                            </div>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-person"></i> My Profile</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-bag"></i> My Balance</a>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Inbox</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion ion-settings"></i> Account Setting</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)"><i class="ion-log-out"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                            <div class="p-10"><a href="javascript:void(0)" class="btn btn-sm btn-rounded btn-success">View Profile</a></div>
                        </li>
                    </ul>
                </li>


                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-cog fa-spin"></i></a>
                </li>

            </ul>
        </div>
    </nav>
</header>
