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
                    @foreach ($categories as $category)
                        
                    
                    <div class="col-xl-12 mb-30" style="padding-left:0;padding-right:0;">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                
                                {{-- <a href="{{route('Dr.create')}}" class="btn btn-success btn-sm" role="button"
                                    aria-pressed="true">Add Dr</a><br><br> --}}
                                <form action="{{ route('dash.add_exam') }}" method="post">
                                    @csrf
                                    <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                            data-page-length="50"
                                            style="text-align: center">
                                            <h6>{{ $category->category_name }}</h6>
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>#</th>
                                            <th>السؤال</th>
                                            <th>الاختيارات</th>
                                            <th>الاجابات الصحيحة</th>
                                            <th>درجة الصعوبة</th>
                                            <th>العمليات</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $d = 'Dr'; ?>
                                        @foreach($category->mcqs as $qui)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>
                                                <input type="checkbox" name="sel[]" value="{{ $qui->id }}">
                                            </td>
                                            <td>
                                                {{ $i }}
                                            </td>
                                            <td>{{$qui->qui}}</td>  
                                            <td>
                                                <ol type="a">
                                                <li>{{ $qui->choose1 }}</li>
                                                <li>{{ $qui->choose2 }}</li>
                                                <li>{{ $qui->choose3 }}</li>
                                                <li>{{ $qui->choose4 }}</li>
                                                <li>{{ $qui->choose5 }}</li>
                                                <li>{{ $qui->choose6 }}</li>
                                                </ol>
                                            </td>
                                            <td>
                                                <ul>
                                                <li>{{ $qui->true1 }}</li>
                                                <li>{{ $qui->true2 }}</li>
                                                <li>{{ $qui->true3 }}</li>
                                                <li>{{ $qui->true4 }}</li>
                                                <li>{{ $qui->true5 }}</li>
                                                <li>{{ $qui->true6 }}</li>
                                                </ul>
                                            </td>

                                            <td>{{$qui->status}}</td>
                                            
                                            {{-- <td>{{$qui->status}}</td> --}}
                                            {{-- <td><img style="width: 60px;height: 60px;" src="{{ asset('library/' . $book->book_image) }}"></td> --}}

                                            {{-- <td>{{$doctor->religions->name}}</td>
                                            <td>{{$doctor->genders->name}}</td> --}}
                                                <td>
                                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $qui->id }}"
                                        title="edit"><i class="fa fa-edit"></i></button>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_course{{ $qui->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                                                </td>

                                            </tr>


                                            
                            <!-- edit_modal_Grade -->
                            {{-- <div class="modal fade" id="edit{{ $book->id }}" tabindex="-1" role="dialog"
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
                            </div> --}}


                                            {{-- <div class="modal fade" id="delete_course{{$book->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            </div> --}}
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        
                        </div>
                        
                    
                    </div>
                    @endforeach
                    <br>
                                        
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">إرسال</button>

                </form>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
