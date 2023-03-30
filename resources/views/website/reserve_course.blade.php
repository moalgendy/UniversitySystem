@include('website.css')

<!-- header section starts  -->

@include('website.header')

<!-- header section ends -->


<section class="heading">
    <h3>حجز الكورسات</h3>
</section>

<section class="contact">

    {!! Toastr::message() !!}


    <div class="row">


        <form action="{{ route('reservation.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3>حجز الكورسات</h3>
            @if (Auth::user())
            <input style="display: none" type="text" name="name" placeholder="الاسم" class="box">
            <input style="display: none" type="phone" name="phone"  placeholder="رقم التليفون" class="box">
            <input style="display: none" type="email" name="email" placeholder="الايميل" class="box">
            @else
            <input  type="text" name="name" placeholder="الاسم" class="box">
            <input  type="phone" name="phone"  placeholder="رقم التليفون" class="box">
            <input  type="email" name="email" placeholder="الايميل" class="box">
            @endif
            
            <div class="box">
                <select class="fancyselect" name="course_id">
                    @foreach ($courses as $course)
                        <option value="{{ $course->id }}">{{$course->name}}</option>
                    @endforeach
                </select>
            </div>
        <br>
        <br>
        @if (Auth::user())

        @else
            <div class="form-group">
                <label> قم برفع الصورة الشخصية</label>
                <input type="file" name="image" class="file-upload-default">
            </div>
            @endif
            
            <input type="submit" value="حجز الكورس"  class="btn">
            
        </form>

    {{-- toastr script --}}
        <script>
            @if (Session::has('success'))
                toaster.success("{{ session('success') }}")
            @endif
        </script>

        {{-- <iframe class="map" src="https://goo.gl/maps/Qucry9zMZKTD3mUc8" allowfullscreen="" loading="lazy"></iframe> --}}

    </div>

</section>



@include('website.footer')