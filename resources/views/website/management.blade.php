@include('website.css')

@include('website.header')


<section class="heading">
    <h3>جداول ادارة الاعمال </h3>
    {{-- <p> <a href="home.html">home >></a> course-1 </p> --}}
</section>


<!-- blog section starts  -->

<section class="blog">
@foreach ($schedules as $course)
    

    <div class="box">
        <div class="image">
            <img onclick="window.open(this.src)" src="{{ asset('schedules/' . $course->image) }}">
        </div>
        <div class="content">
            {{-- <div class="icons"> --}}
                {{-- <p href="#"> <i class="fas fa-clock"></i> {{ $course->created_at }}</p> --}}
                {{-- <p href="#"> <i class="fas fa-user"></i> by admin </p> --}}
            {{-- </div> --}}
            <h3>{{ $course->classrooms->name }}</h3>
            {{-- <p>{{ $course->content }}</p> --}}
            {{-- <a href="#" class="btn">read more</a> --}}
        </div>
    </div>


@endforeach
    


</section>

<!-- blog section ends -->


@include('website.footer')