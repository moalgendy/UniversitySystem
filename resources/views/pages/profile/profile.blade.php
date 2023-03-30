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
        <div class="card-body">
          <section style="background-color: #eee;">
            <center>
                <div class="col">
                  
                    <div class="col-lg-4">
                      <div class="card-body text-center">
                        @if (Auth::user()->profile_photo_path)
                            <img   style="width: 150px;border-radius: 10px;height: 200px;" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
                        @else
                            <img  style="width: 150px;border-radius: 10px;height: 200px;" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                        @endif
                        {{-- <img src="{{ asset('assets/images/blog/01.jpg') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;"> --}}
                        <h5 style="font-family: cairo" class="my-3">عدد ايام الاجازه المتبقية {{ Auth::user()->numofholy }}</h5>
                        <p class="text-mted mb-1">{{ Auth::user()->email }}</p>
                        {{-- <p class="text-mted mb-4">Doctor</p> --}}
                        <div class="table-responsive">
                          <table class="table table-hover table-sm table-bordered p-0" data-page-length="50" style="text-align: center">
                            <thead>
                              <tr>
                                <th>الوظيفة</th>
                                <th>الاسم</th>
                                <th>الايميل</th>
                                <th>الحالة</th>
                                <th>ghmhg</th>
                                <th>ghmghm</th>
                                <th>ghm</th>
                                <th>hgmhfgm</th>
                              </tr>
                            </thead>
                            <?php $d = 'Dr' ; ?>
                            <tbody>
                              <td>{{ $d }}</td>
                              <td>{{ Auth::user()->name }}</td>
                              <td>{{ Auth::user()->email }}</td>
                              <td>{{ Auth::user()->status }}</td>
                              <td>ghhggh</td>
                              <td>hghg</td>
                              <td>ghhgghgh</td>
                              <td>hgghghgh</td>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                </div>
              
                {{-- <div class="col-lg-8">
                  <div class="card mb-4">
                    <div class="card-body">
                      <form action="{{ route('profile.update',Auth::user()->id) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">اسم المستخدم</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">
                              <input type="text" name="name_ar" value="{{ Auth::user()->name }}" class="form-control">
                            </p>
                          </div>
                        </div>
                        <hr> --}}
                      
                        {{-- <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">en</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">
                              <input type="text" name="name_en" value="{{ Auth::user()->getTranslation('name','en') }}" class="form-control">
                            </p>
                          </div>
                        </div>
                        <hr> --}}

                        {{-- <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">الايميل</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">
                              <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
                            </p>
                          </div>
                        </div>
                        <hr>

                        <div class="row">
                          <div class="col-sm-3">
                            <p class="mb-0">كلمة المرور</p>
                          </div>
                          <div class="col-sm-9">
                            <p class="text-muted mb-0">
                              <input type="password" id="password" name="password" value="" class="form-control">
                            </p><br><br>

                            <input type="checkbox" class="form-check-input" onclick="myFunction()" id="exampleCheck1">
                            <label class="form-check-lable" for="exampleCheck1">اظهار كلمة المرور</label>
                          </div>
                        </div>
                        <hr>

                        <a href="{{ route('profile.edit',Auth::user()->id) }}">ju]dg</a> --}}

                      {{-- </form>
                    </div>
                  </div>
                </div> --}}
                
              </div>
            </center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            

                    



          






            <!--=================================
    wrapper -->

                <!--=================================
    footer -->


{{-- <br><br><br><br><br><br><br><br><br><br><br><br> --}}


            @include('layouts.footer')
          </section>
          </div>
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>
  </div>

    <!--=================================
 footer -->
 @section('js')
            @toastr_js
            @toastr_render
            <script>
              function myFunction(){
                var x = document.getElementById("password");
                if (x.type === "password") {
                  x.type = "text";
                } else {
                  x.type = "password";
                }
              }
            </script>
          @endsection*

    @include('layouts.footer-scripts')

</body>

</html>
