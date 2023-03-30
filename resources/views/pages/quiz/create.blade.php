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
                                        <form action="{{route('dash.store_qui')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                        <div class="box">
                                            <select name="category_id" class="fancyselect">
                                                <option> اختر المحاضرة</option>

                                                @foreach ($categories as $category)
                                                
                                                <option value="{{ $category->id }}">{{ $category->category_name }}</option>

                                                @endforeach

                                            </select>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* السؤال </h6>

                                                <input type="text" name="qui" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="box">
                                            <select name="status" class="fancyselect">
                                                
                                                <option value="{{ $status }}">اختر درجة الصعوبة</option>
                                                

                                                    <option value="easy" {{ $status == 'easy' }} >سهل</option>

                                                    <option value="average" {{ $status == 'average' }} >متوسط</option>

                                                    <option value="hard" {{ $status == 'hard' }} >صعب</option>

                                            </select>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاختيار الاول </h6>

                                                <input type="text" name="choose1" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاختيار الثاني </h6>

                                                <input type="text" name="choose2" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاختيار الثالث </h6>

                                                <input type="text" name="choose3" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاختيار الرابع </h6>

                                                <input type="text" name="choose4" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاختيار الخامس </h6>

                                                <input type="text" name="choose5" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاختيار السادس </h6>

                                                <input type="text" name="choose6" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <hr>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاجابة الاولي </h6>

                                                <input type="text" name="true1" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاجابة الثانية </h6>

                                                <input type="text" name="true2" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاجابة الثالثة </h6>

                                                <input type="text" name="true3" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاجابة الرابعة </h6>

                                                <input type="text" name="true4" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        
                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاجابة الخامسة </h6>

                                                <input type="text" name="true5" class="form-control">
                                                @error('name')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <div class="col">
                                            <h6>* الاجابة السادسة </h6>

                                                <input type="text" name="true6" class="form-control">
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
