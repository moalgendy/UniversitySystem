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
    مسئول المكتبة
@stop
<!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
        
    {!! Toastr::message() !!}
                    
                    <div class="col-xl-12 mb-30" style="padding-left:0;padding-right:0;">
                        <div class="card card-statistics h-100">
                            <div class="card-body">
                                

                                <div class="col-xs-12">
                                    <div class="col-md-12">
                                        <br>
                                        <form action="{{route('dash.store_category')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* اسم المحاضرة </h6>

                                                <input type="text" name="category" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                            <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">إرسال</button>
                                </form>
                                    </div>
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
