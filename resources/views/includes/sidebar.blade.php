<section class="sidebar">

    <div class="user-profile">
        <div class="ulogo">
            <a href="index.html">
                <!-- logo for regular state and mobile devices -->
                <span><b>Areeza</b></span>
            </a>
        </div>
    </div>

    <!-- sidebar menu-->
    <ul class="sidebar-menu" data-widget="tree">


        <li class="treeview active">
            <a href="#">
                <i class="ti-dashboard"  style="color:#ffffff;"></i>
                <span>داشبورد</span>
                <span class="pull-right-container" >
              <i class="fa fa-angle-right pull-right"  ></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{('dashboard')}}"><i class="ti-more" style="color:#ffffff;"></i>داشبورد</a></li>

            </ul>
        </li>
        <li class="header nav-small-cap"></li>


        <li class="treeview">
            <a href="#">
                <i class="ti-write" style="color:#ffffff;"></i>
                <span>ثبت جدید</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms_advanced.html"><i class="ti-more" ></i>پشتو</a></li>
                <li><a href="{{url('shekayat-form/create ')}}"><i class="ti-more" ></i>دری</a></li>
                <li><a href="{{url('shekayat-form')}}"><i class="ti-more" ></i>تایددنمودن</a></li>



            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ti-layout-grid4" style="color:#ffffff;"></i>
                <span>تحلیل و تدقیق</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('wait_for_document')}}"><i class="ti-more"></i>معطل</a></li>
                <li><a href="{{url('working-under-compliants')}}"><i class="ti-more"></i>تحت کار در شکایات</a></li>
                <li><a href="{{url('download_document')}}"><i class="ti-more"></i>دانلود</a></li>
                <li><a href="{{url('guidance')}}"><i class="ti-more"></i>رهنمای</a></li>
                <li><a href="{{url('complete')}}"><i class="ti-more"></i>تکمیل</a></li>
                <li><a href="{{url('preservation')}}"><i class="ti-more"></i>حفظ</a></li>
                <li><a href="{{url('give_up_call')}}"><i class="ti-more"></i>منصرف</a></li>
                <li><a href="{{url('reject')}}"><i class="ti-more"></i>منتطر</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="ti-write" style="color:#ffffff;"></i>
                <span>ثبت عریضه</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="pages/forms_advanced.html"><i class="ti-more"></i>پشتو</a></li>
                <li><a href="{{route('areeza.create')}}"><i class="ti-more"></i>دری</a></li>




            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ti-check-box" style="color:#ffffff;"></i>
                <span>تحلیل و کارشناسی</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('areeza')}}"><i class="ti-more"></i>کارشناسی</a></li>
                <li><a href="{{url('karshenasi_response')}}"><i class="ti-more"></i>دانلود</a></li>
                <li><a href="{{('ejraya_list')}}"><i class="ti-more"></i>تحت کار در عریضه </a></li>
                <li><a href="{{('ejraya_sader')}}"><i class="ti-more"></i>صادره</a></li>
                <li><a href="{{('list_replay')}}"><i class="ti-more"></i>جواب</a></li>
                <li><a href="{{('returned')}}"><i class="ti-more"></i>مسترد شده</a></li>
                <li><a href="{{url('completed_list')}}"><i class="ti-more"></i>تکمیل شده</a></li>
                <li><a href="{{url('ejraya_hefz')}}"><i class="ti-more"></i> حفظ شده</a></li>

            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="ti-package" style="color:#ffffff;"></i>
                <span>گزارش</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('guide')}}"><i class="ti-more"></i>مجموع عرایض و شکایات</a></li>

            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ti-palette" style="color:#ffffff"></i>
                <span>تعقیب</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('followed_list')}}"><i class="ti-more"></i>لست تعقیب</a></li>
                <li><a href="{{url('person')}}"><i class="ti-more"></i>شهرت تعقیب کننده</a></li>

            </ul>
        </li>

        <li class="header nav-small-cap"></li>

        <li class="treeview">
            <a href="#">
                <i class="ti-email" style="color:#ffffff;"></i> <span>ایمل</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('email')}}"><i class="ti-more"></i>Inbox</a></li>

            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ti-user" style="color:#ffffff;" ></i>
                <span>پروفایل</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">

                <li><a href="{{url('user')}}"><i class="ti-more"></i>لیست کارمندان</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="ti-layout-grid2" style="color:#ffffff;"></i>
                <span>جلسه</span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">

                <li><a href="{{url('event')}}"><i class="ti-more"></i>جنتری</a></li>

            </ul>
        </li>





        <li class="treeview">
            <a href="#">
                <i class="ti-themify-favicon-alt" style="color:#ffffff;"></i>
                <span>چت    </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{url('chat')}}"><i class="ti-more" style="color:#ffffff;"></i>چت </a></li>




            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="ti-layout-grid4" style="color:#ffffff;"></i>
                <span>دیگر موارد </span>
                <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{route('type.index')}}"><i class="ti-more"></i>نوعیت</a></li>
                <li><a href="{{route('ministries.index')}}"><i class="ti-more"></i>وزارت</a></li>
{{--                <li><a href="{{route('contents.index')}}"><i class="ti-more"></i>محتوا</a></li>--}}
                <li><a href="{{route('degree.index')}}"><i class="ti-more"></i>تحصیل</a></li>
                <li><a href="{{route('job.index')}}"><i class="ti-more"></i> وظیفه </a></li>
                <li><a href="{{route('province.index')}}"><i class="ti-more"></i>ولایت</a></li>
                <li><a href="{{route('districts.index')}}"><i class="ti-more"></i>ولسوالی</a></li>
                <li><a href="{{route('aop_office.index')}}"><i class="ti-more"></i>AOP ریاست های</a></li>
                <li><a href="{{route('statuses.index')}}"><i class="ti-more"></i>حالت</a></li>
                <li><a href="{{route('subject.index')}}"><i class="ti-more"></i>موضوع</a></li>
                <li><a href="{{route('relation.index')}}"><i class="ti-more"></i>  نوع ارتباطی</a></li>
            </ul>
        </li>


        <li>
            <a href="pages/auth_login.html">
                <i class="ti-power-off"></i>
                <span>Log Out</span>
            </a>
        </li>

    </ul>
</section>
