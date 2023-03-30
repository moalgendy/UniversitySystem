<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg')}}" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')

        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">
            <div class="page-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 class="mb-0"> {{ __('dashboard.name') }}</h4>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                        </ol>
                    </div>
                </div>
            </div>
            <!-- widgets -->
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-danger">
                                        <i class="fa fa-building fa-3x"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.count') }}</p>
                                    <h4>{{ \App\Models\Facultie::count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-exclamation-circle mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('facultie') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fa fa-building fa-3x"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('classroom.class') }}</p>
                                    <h4>{{ \App\Models\Classroom::count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('classroom') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                
            
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-warning">
                                        <i class="fa fa-thin fa-users fa-4x"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.doctor') }}</p>
                                    
                                    <h4>{{ \App\Models\User::get()->where('status','=','doctor')->count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-bookmark-o mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-thin fa-users fa-4x"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.student') }}</p>
                                    <h4>{{ \App\Models\User::get()->where('status','=','student')->count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('student') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-thin fa-users fa-4x"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.users') }}</p>
                                    <h4>{{ \App\Models\User::get()->count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('student') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>
                

                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-thin fa-users fa-4x"></i>
                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.courses') }}</p>
                                    <h4>{{ \App\Models\Course::get()->count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('student') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-building fa-3x"></i>

                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.complaints') }}</p>
                                    <h4>{{ \App\Models\Complaint::get()->count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('student') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="clearfix">
                                <div class="float-left">
                                    <span class="text-success">
                                        <i class="fa fa-building fa-3x"></i>

                                    </span>
                                </div>
                                <div class="float-right text-right">
                                    <p class="card-text text-dark">{{ __('dashboard.holies') }}</p>
                                    <h4>{{ \App\Models\Holy::get()->count() }}</h4>
                                </div>
                            </div>
                            <p class="text-muted pt-3 mb-0 mt-2 border-top">
                                {{-- <i class="fa fa-calendar mr-1" aria-hidden="true"></i> --}}
                                <a class="btn btn-primary" href="{{ url('student') }}">عرض</a>
                            </p>
                        </div>
                    </div>
                </div>






            </div>
            
            <!--=================================
            wrapper -->

                        <!--=================================
            footer -->


                <br><br><br><br><br><br><br><br><br><br><br><br>


            @include('layouts.footer')
        </div>      <!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

</body>

</html>
