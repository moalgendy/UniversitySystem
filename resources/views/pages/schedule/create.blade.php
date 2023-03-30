@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
    شئون التعليم    
@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
@section('PageTitle')
    شئون التعليم
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
                                        <form action="{{route('store.schedule')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                                        @csrf
                                    
                                        {{-- <div class="form-row">
                                            <h6>* الكلية</h6>
                                            <textarea class="form-control" name="type1" placeholder="اكتب ما تريد ارسالة هنا" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <br>

                                        <div class="form-row">
                                            <h6>* الفرقة</h6>
                                            <textarea class="form-control" name="type2" placeholder="اكتب ما تريد ارسالة هنا" id="" cols="30" rows="10"></textarea>
                                        </div>
                                        <br> --}}
                                        
                                        <div class="form-row">
                                            <div class="form-group col">
                                                <label for="inputCity">Faculties :<span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="facultie_id">
                                                    <option selected >اختر الكلية</option>
                                                    @foreach ($faculties as $facultie )
                                                    <option value="{{ $facultie->id }}">
                                                        {{ $facultie->name }}</option>
                                                @endforeach
                                                </select>
                                                @error('facultie_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="classroom_id">Classroom :<span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                                                    <option selected >اختر الفرقة الدراسية</option>
                                                    @foreach($classrooms as $classroom)
                                                        <option value="{{$classroom->id}}">{{$classroom->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('classroom_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            {{-- <div class="form-group col">
                                                <label for="inputState">Sections :<span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="section_id">
                                                    <option selected >اختر  قسم الكلية</option>
                                                    @foreach($sections as $section)
                                                        <option value="{{$section->id}}">{{$section->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('section_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Notionlities <span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="notionlitie_id">
                                                    <option selected >اختر  الجنسية</option>
                                                    @foreach($notionlities as $notionlitie)
                                                        <option value="{{$notionlitie->id}}">{{$notionlitie->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('notionlitie_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Gender :<span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="gender_id">
                                                    <option selected >اخترالنوع</option>
                                                    @foreach($genders as $gender)
                                                        <option value="{{$gender->id}}">{{$gender->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('gender_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">religions :<span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="religion_id">
                                                    <option selected >اختر الديانة</option>
                                                    @foreach($religions as $religion)
                                                        <option value="{{$religion->id}}">{{$religion->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('religion_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">My Parent : <span class="text-danger">*</span></label>
                                                <select class="custom-select my-1 mr-sm-2" name="parent_id">
                                                    <option selected >اختر والي الامر</option>
                                                    @foreach($my_parents as $my_parent)
                                                        <option value="{{$my_parent->id}}">{{$my_parent->name_father}}</option>
                                                    @endforeach
                                                </select>
                                                @error('parent_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="academic_year">academic_year : <span class="text-danger">*</span></label>
                                                    <select class="custom-select mr-sm-2" name="academic_year">
                                                        <option selected disabled>academic_year...</option>
                                                        @php
                                                            $current_year = date("Y");
                                                        @endphp
                                                        @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                                            <option value="{{ $year}}">{{ $year }}</option>
                                                        @endfor
                                                    </select>
                                                </div>
                                            </div>--}}
                                        </div> 

                                        
                                        <br>
                                        <div class="form-group">
                                            <label> ارفع الصورة</label>
                                            <input type="file" name="image" class="file-upload-default">
                                            {{-- <div class="input-group col-xs-12">
                                            <input type="file" name="image">
                                            </div> --}}
                                        </div>
                                        
                                        
                                        <!-- <div class="form-row">
                                            <div class="form-group col">
                                                <label for="inputCity">Faculties</label>
                                                <select class="custom-select my-1 mr-sm-2" name="facultie_id">
                                                    <option selected >اختر الكلية</option>
                                                    {{-- @foreach ($faculties as $facultie ) --}}
                                                    {{-- <option value="{{ $facultie->id }}"> --}}
                                                        {{-- {{ $facultie->name }}</option> --}}
                                                {{-- @endforeach --}}
                                                </select>
                                                @error('facultie_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Classroom</label>
                                                <select class="custom-select my-1 mr-sm-2" name="classroom_id">
                                                    <option selected >اختر المرحلة الدراسية</option>
                                                    {{-- @foreach($classrooms as $classroom) --}}
                                                        {{-- <option value="{{$classroom->id}}">{{$classroom->name}}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                                @error('classroom_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Sections</label>
                                                <select class="custom-select my-1 mr-sm-2" name="section_id">
                                                    <option selected >اختر  الفرقة الدراسية</option>
                                                    {{-- @foreach($sections as $section) --}}
                                                        {{-- <option value="{{$section->id}}">{{$section->name}}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                                @error('section_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Notionlities</label>
                                                <select class="custom-select my-1 mr-sm-2" name="notionlitie_id">
                                                    <option selected >اختر  الجنسية</option>
                                                    {{-- @foreach($notionlities as $notionlitie) --}}
                                                        {{-- <option value="{{$notionlitie->id}}">{{$notionlitie->name}}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                                @error('notionlitie_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">Gender</label>
                                                <select class="custom-select my-1 mr-sm-2" name="gender_id">
                                                    <option selected >اخترالنوع</option>
                                                    {{-- @foreach($genders as $gender) --}}
                                                        {{-- <option value="{{$gender->id}}">{{$gender->name}}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                                @error('gender_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputState">religions</label>
                                                <select class="custom-select my-1 mr-sm-2" name="religion_id">
                                                    <option selected >اختر الديانة</option>
                                                    {{-- @foreach($religions as $religion) --}}
                                                        {{-- <option value="{{$religion->id}}">{{$religion->name}}</option> --}}
                                                    {{-- @endforeach --}}
                                                </select>
                                                @error('religion_id')
                                                <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>-->
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
