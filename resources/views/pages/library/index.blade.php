@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    المكتبة
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    المكتبة
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
                                            <th>اسم الكتاب</th>
                                            <th>الكتاب عن</th>
                                            <th>تعريف الكتاب</th>
                                            <th>صورة الكتاب</th>
                                            <th>العمليات</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $d = 'Dr'; ?>
                                        @foreach($books as $book)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            {{-- <td>{{ $d }}</td> --}}
                                            <td>{{$book->book_name}}</td>
                                            <td>{{$book->book_title}}</td>                                            
                                            <td>{{$book->book_content}}</td>
                                            <td><img style="width: 60px;height: 60px;" src="{{ asset('library/' . $book->book_image) }}"></td>

                                            {{-- <td>{{$doctor->religions->name}}</td>
                                            <td>{{$doctor->genders->name}}</td> --}}
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $book->id }}"
                                        title="edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_course{{ $book->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                                                </td>

                                            </tr>


                                            
<!-- edit_modal_Grade -->
<div class="modal fade" id="edit{{ $book->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                    id="exampleModalLabel">
                    تعديل الكورس
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('library.update',$book->id) }}" method="post" enctype="multipart/form-data">
                @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">اسم الكتاب
                                :</label>
                            <input id="name" type="text" name="name" class="form-control"
                             value="{{ $book->book_name }}">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">الكتاب عن 
                                :</label>
                            <input id="name" type="text" name="title" class="form-control"
                            value="{{ $book->book_title }}">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">تعريف الكتاب
                                :</label>
                            <input id="name" type="text" name="content" class="form-control"
                            value="{{ $book->book_content }}">
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="name" class="mr-sm-2">الصورة
                                :</label>
                                <label>* رفع الصورة </label>
                                <input type="file" name="image" class="file-upload-default" value="{{ asset('library/' . $book->book_image) }}">
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


                                            <div class="modal fade" id="delete_course{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('book.destroy',$book->id)}}" method="get">
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
                                                            <p>Worings</p>
                                                            <input type="hidden" name="id"  value="{{$book->id}}">
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                <button type="submit"
                                                                        class="btn btn-danger">Submit</button>
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
