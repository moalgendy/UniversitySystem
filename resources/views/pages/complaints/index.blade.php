@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    الشكاوى
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    مسئول الشكاوى
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
                                            <th>الاسم</th>
                                            <th>الايميل</th>
                                            <th>رقم الهاتف</th>
                                            <th>المشكله عن</th>
                                            <th>المشكلة</th>
                                            <th>تم الارسال في</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $i = 0; ?>
                                        <?php $d = 'Dr'; ?>
                                        @foreach($complaints as $complaint)
                                            <tr>
                                            <?php $i++; ?>
                                            <td>{{ $i }}</td>
                                            {{-- <td>{{ $d }}</td> --}}
                                            <td>{{$complaint->name}}</td>
                                            <td>{{$complaint->email}}</td>
                                            <td>{{$complaint->phone}}</td>
                                            <td>{{$complaint->title}}</td>
                                            <td>{{$complaint->content}}</td>
                                            <td>{{$complaint->created_at}}</td>
                                            {{-- <td>{{$doctor->religions->name}}</td>
                                            <td>{{$doctor->genders->name}}</td> --}}
                                                {{-- <td>
                                                    <a href="{{route('Dr.edit',$doctor->id)}}" class="btn btn-info btn-sm" role="button" aria-pressed="true"><i class="fa fa-edit"></i></a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_doctor{{ $doctor->id }}" title="Delete"><i class="fa fa-trash"></i></button>
                                                </td> --}}

                                            </tr>

                                            {{-- <div class="modal fade" id="delete_doctor{{$doctor->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <form action="{{route('Dr.destroy',$doctor->id)}}" method="post">
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
                                                            <input type="hidden" name="id"  value="{{$doctor->id}}">
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
