@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    مركز التدريب
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    مسئول مركز التدريب
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
                    {{-- <input type="checkbox" name="" id=""> --}}
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
                                            <th>#</th>
                                            <th>اسم الدكتور</th>
                                            <th>الطلب</th>
                                            <th>تاريخ الطلب</th>
                                            <th>عدد ايام الاجازة</th>
                                            {{-- <th>عدد الاجازات المتبقيه</th> --}}
                                            <th>العمليات</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $d = 'Dr'; ?>
                                        @foreach($holies as $course)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            {{-- <td>{{ $d }}</td> --}}
                                            <td>{{$course->name}}</td>
                                            <td>{{$course->content}}</td>                                            
                                            <td>{{$course->created_at}}</td>
                                            <td>{{$course->numofday}}</td>
                                            

                                            {{-- <td>
                                                @if ($course->holy_status == 'processing')
                                                <a onclick="return confirm('Are You Sure This Product is delivered!')" href="{{ url('delivered',$course->id) }}" class="btn btn-outline-primary btn">الموافقة</a>
                                                    @else 
                                                    <p style="color: green">تمت الموافقة</p>
                                                @endif
                                            </td> --}}

                                                <td>
                                                    {{-- <a href="{{route('course.edit',$course->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a> --}}
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_course{{ $course->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                                                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#delete_course{{ $course->id }}" title="Delete"><i class="fa fa-check"></i></button>
                                                </td>

                                            </tr>

                                            <div class="modal fade" id="delete_course{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('holies.destroy',$course->id)}}" method="get">
                                                        {{method_field('delete')}}
                                                        {{csrf_field()}}
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">Delete</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>هل تريد تأكيد الحذف ؟</p>
                                                            <input type="hidden" name="id"  value="{{$course->id}}">
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
