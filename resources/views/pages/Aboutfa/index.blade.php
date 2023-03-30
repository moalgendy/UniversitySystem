@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
عن المعاهد
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
عن المعاهد
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
                                            <th>#</th>
                                            <th>نبذه عن الخبر</th>
                                            <th>تم الانشاء في</th>
                                            <th>الصورة</th>
                                            <th>العمليات</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        @foreach($courses as $course)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            {{-- <td>{{ $d }}</td> --}}
                                            <td>{{$course->title}}</td>                                          
                                            <td>{{$course->created_at}}</td>
                                            <td><img style="width: 120px;height: 60px;" src="{{ asset('Aboutfa/' . $course->image) }}"></td>

                                            {{-- <td>{{$doctor->religions->name}}</td>
                                            <td>{{$doctor->genders->name}}</td> --}}
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $course->id }}"
                                        title="edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_course{{ $course->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                                                </td>

                                            </tr>

<!-- edit_modal_Grade -->
<div class="modal fade" id="edit{{ $course->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    تعديل الخبر
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('aboutfa.update',$course->id) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">
                                :</label>
                            <input id="name" type="text" name="title" class="form-control"
                            value="{{ $course->title }}">
                        </div>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">الصورة
                                :</label>
                                <label>* رفع الصورة </label>
                                <input type="file" name="image" class="file-upload-default" value="{{ asset('aboutfa/' . $course->image) }}">
                        </div>
                        
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
    </div>
</div>


                                            <div class="modal fade" id="delete_course{{$course->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('course.destroy',$course->id)}}" method="get">
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
