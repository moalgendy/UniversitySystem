@include('website.css')

@include('website.header')


<section class="heading">
    <h3>الكورسات</h3>
    {{-- <p> <a href="home.html">home >></a> course-1 </p> --}}
</section>


<!-- blog section starts  -->

<section class="blog">
@foreach ($courses as $course)
    

    <div class="box">
        <div class="image">
            <img src="{{ asset('Courses/' . $course->image) }}" alt="{{ $course->name }}">
        </div>
        <div class="content">
            {{-- <div class="icons">
                <p href="#"> <i class="fas fa-clock"></i> {{ $course->created_at }}</p> --}}
                {{-- <p href="#"> <i class="fas fa-user"></i> by admin </p> --}}
            {{-- </div> --}}
            <h3>{{ $course->name }}</h3>
            <p>{{ $course->content }}</p>
            {{-- <a href="{{ route('course.reserv') }}" class="btn">حجز الكورس</a> --}}
        </div>
    </div>


@endforeach
    


</section>

<!-- blog section ends -->


@include('website.footer')