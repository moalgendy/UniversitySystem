@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    جميع المستخدمين
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    جميع المستخدمين
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">

    {!! Toastr::message() !!}

        {{-- <div class="col">
            <form method="GET" action="{{ route('Dr.index') }}">
                <div class="form-row align-items-center">
                    <div class="col">
                        <input type="search" name="search" class="form-control mb-2" id="inlineFormInput"
                            placeholder="البحث هنا ">
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                </div>
            </form>
        </div> --}}
            {{-- <div class="card card-statistics h-100">
                <div class="card-body"> --}}
                    
        <div class="col-xl-12 mb-30" style="padding-left:0;padding-right:0;">
        <div class="card card-statistics h-100">
            <div class="card-body">
                
                {{-- <a href="{{route('Dr.create')}}" class="btn btn-success btn-sm" role="button"
                    aria-pressed="true">Add Dr</a><br><br> --}}
                
                    <div class="table-responsive">
                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                            data-page-length="50"
                            style="text-align: center">
                        <thead>
                        <tr>
                            <th>اي دي</th>
                            <th>الاسم</th>
                            <th>الايميل</th>
                            <th>الحالة</th>
                            <th>رقم الهاتف</th>
                            <th>العنوان</th>
                            <th>ايام الاجازات المتبقية</th>
                            <th>العمليات</th>

                        </tr>
                        </thead>
                        <tbody>
                        
                        @foreach($users as $user)
                            <tr>
                            
                            <td>{{ $user->id }}</td>
                            {{-- <td>{{ $d }}</td> --}}
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>                                            
                            <td>{{$user->status}}</td>                                            
                            <td>{{$user->phone}}</td>                                            
                            <td>{{$user->address}}</td>                                            
                            <td>{{$user->numofholy}}</td>                                            
                            
                            <td>
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                    data-target="#edit{{ $user->id }}"
                                    title="edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_course{{ $user->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>

                        <div class="modal fade" id="delete_course{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form action="{{route('holies.destroy',$user->id)}}" method="get">
                                    {{method_field('delete')}}
                                    {{csrf_field()}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">الحذف</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>هل تريد تأكيد الحذف ؟</p>
                                        <input type="hidden" name="id"  value="{{$user->id}}">
                                    </div>
                                    <div class="modal-footer">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">الغاء</button>
                                            <button type="submit"
                                                    class="btn btn-danger">تأكيد</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- edit_modal_Grade -->
                        <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            تعديل المستخدمين
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- add_form -->
                                        <form action="{{ route('update.users',$user->id) }}" method="post">
                                        @method('patch')
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">الاسم
                                                        :</label>
                                                    <input id="name" type="text" name="name" class="form-control"
                                                        value="{{ $user->name }}">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">الايميل
                                                        :</label>
                                                    <input id="name" type="email" name="email" class="form-control"
                                                        value="{{ $user->email }}">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">رقم الهاتف
                                                        :</label>
                                                    <input id="name" type="text" name="phone" class="form-control"
                                                        value="{{ $user->phone }}">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">العنوان
                                                        :</label>
                                                    <input id="name" type="text" name="address" class="form-control"
                                                        value="{{ $user->address }}">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">الباسورد
                                                        :</label>
                                                    <input id="name" type="password" name="text" class="form-control"
                                                        value="">
                                                </div>

                                            </div>

                                            

                                            {{-- <div class="row">
                                                <div class="col">
                                                    <label for="name" class="mr-sm-2">Name
                                                        :</label>
                                                    <input id="name" type="text" name="name" class="form-control"
                                                        value="{{ $user->name }}">
                                                </div>

                                            </div> --}}
                                            <div class="col">
                                                <label for="Name_en"
                                                    class="mr-sm-2">الصلاحية
                                                    :</label>

                                                <div class="box">
                                                    <select name="status" class="fancyselect">
                                                        <option value="{{ $user->status }}">اختر الصلاحية</option>

                                                            <option value="admin" {{ $user->status == 'admin' }} >Admin</option>

                                                            <option value="doctor" {{ $user->status == 'doctor' }} >Doctor</option>

                                                            <option value="security" {{ $user->status == 'security' }} >Security</option>

                                                            <option value="security manager" {{ $user->status == 'security manager' }} >Security manager</option>

                                                            <option value="student" {{ $user->status == 'student' }} >Student</option>
                                                            
                                                            <option value="complain" {{ $user->status == 'complain' }} >Complain</option>
                                                        
                                                            <option value="learn" {{ $user->status == 'learn' }} >Learn</option>
                                                            
                                                            <option value="library" {{ $user->status == 'library' }} >Library</option>

                                                            <option value="hr" {{ $user->status == 'hr' }} >Hr</option>

                                                            <option value="course" {{ $user->status == 'course' }} >Course</option>

                                                    </select>
                                                </div>

                                            <br><br>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">الغاء</button>
                                                <button type="submit"
                                                    class="btn btn-success">تأكيد</button>
                                            </div>
                                        </form>
                                </div>
                            </div>
                            
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        </div>
                {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
