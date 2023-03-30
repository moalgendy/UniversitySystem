<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                        
                    
                    <li>
                    
                            <li> <a href="{{ url('/dash') }}" style="padding-bottom: 30px"><div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">{{ __('dashboard.name') }}</span>
                            </div></a> </li>
                    
                    </li>
                    



                    <!--all users-->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">{{ __('university.managment') }}</li>
                    <!-- menu item Elements-->
                    @if (Auth::user()->status == 'admin')
                    
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#users-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.all_users') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="users-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('all.users') }}">{{ __('dashboard.show_users') }}</a></li>
                            {{-- <li><a href="{{ route('update.users') }}">{{ __('dashboard.update_users') }}</a></li> --}}
                        </ul>
                    </li>

                    <!--facultie -->

                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#elements">
                            <div class="pull-left"><i class="ti-palette"></i><span
                                    class="right-nav-text">{{ __('university.faculties') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="elements" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('facultie.index') }}">{{ __('university.show_fac') }}</a></li>

                        </ul>
                    </li>

                    
                            <!-- classes-->
                <li>
                    <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                        <div class="pull-left"><i class="fa fa-building"></i><span
                                class="right-nav-text">{{ __('classroom.class') }}</span></div>
                        <div class="pull-right"><i class="ti-plus"></i></div>
                        <div class="clearfix"></div>
                    </a>
                    <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                        <li><a href="{{ route('classroom.index') }}">{{ __('classroom.class') }}</a></li>
                    </ul>
                </li>

                @else
                        
                @endif




                    @if (Auth::user()->status == 'learn' || Auth::user()->status == 'admin')
                    
                    <!-- Schedule-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Schedule-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.add_schedual') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Schedule-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ url('dash/Schedule') }}">اضافة جدول</a></li>
                            {{-- <li><a href="{{ route('Dr.index') }}">Show Doctor</a></li> --}}
                        </ul>
                    </li>
                    @else
                        
                    @endif



                    @if (Auth::user()->status == 'doctor' || Auth::user()->status == 'admin')

                    <!-- posts-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Posts-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.add_post') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Posts-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ url('posts') }}">اضافة خبر</a></li>
                            {{-- <li><a href="{{ route('Dr.index') }}">Show Doctor</a></li> --}}
                        </ul>
                    </li>

                    
                    

                    <!-- اجازة-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Holy-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.holy') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Holy-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('holies.index') }}">طلب اجازة</a></li>
                            @else
                        
                            @endif
                            <li>
                    @if (Auth::user()->status == 'hr' || Auth::user()->status == 'admin')

                                <a href="{{ route('holies.show') }}">عرض طلبات الاجازات</a></li>

                        @else

                        @endif
                    
                        </ul>
                    </li>
                    
                    



                    @if (Auth::user()->status == 'complain' || Auth::user()->status == 'admin')
                    
                    <!-- Complaints-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Complaint-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('university.complaints') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Complaint-menu" class="collapse" data-parent="#sidebarnav">
                            {{-- <li><a href="{{ route('Dr.create') }}">Add Doctor</a></li> --}}
                            <li><a href="{{ route('dash.complaint') }}">{{ __('university.show_complaints') }}</a></li>
                        </ul>
                    </li>
                    @else
                        
                    @endif



                    @if (Auth::user()->status == 'course' || Auth::user()->status == 'admin')
                    
                    <!-- Courses-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Course-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.courses') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Course-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('dash.course') }}">إضافة كورس</a></li>
                            <li><a href="{{ route('dash.show_course') }}">عرض الكورسات</a></li>
                            <li><a href="{{ route('dash.aboutcou') }}">إضافة صورة لاخر اخبار المركز</a></li>
                            <li><a href="{{ route('dash.show_aboutcou') }}">عرض اخبار المركز</a></li>

                            <li><a href="{{ route('dash.aboutfa') }}">اضافة صورة لاخر اخبار المعاهد</a></li>
                            <li><a href="{{ route('dash.show_aboutfa') }}">عرض اخبار المعاهد</a></li>



                        </ul>
                    </li>
                    @else
                        
                    @endif

                    @if (Auth::user()->status == 'library' || Auth::user()->status == 'admin')

                    <!-- Library-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#library-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.library') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="library-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('dash.book') }}">إضافة كتاب</a></li>
                            <li><a href="{{ route('dash.show_books') }}">عرض الكتب</a></li>

                        </ul>
                    </li>
                    @else
                        
                    @endif


                    
                    
                    @if (Auth::user()->status == 'security' || Auth::user()->status == 'admin')
                        <!-- security-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#security-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.security') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="security-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('dash.security') }}">إضافة دخول جديد</a></li>
                            {{-- <li><a href="{{ route('dash.show_books') }}">عرض الكتب</a></li> --}}

                        </ul>
                    </li>
                    @else
                        
                    @endif
                    
                    {{-- @endcan --}}
                    @if (Auth::user()->status == 'security manager' || Auth::user()->status == 'admin')

                    <!-- security manager-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#security_manager-menu">
                            <div class="pull-left"><i class="fa fa-building"></i><span
                                    class="right-nav-text">{{ __('dashboard.security_manager') }}</span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="security_manager-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{ route('dash.security_manager') }}">سجل دخول المعهد</a></li>
                            {{-- <li><a href="{{ route('dash.show_books') }}">عرض الكتب</a></li> --}}

                        </ul>
                    </li>
                    @else
                        
                    @endif
                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
