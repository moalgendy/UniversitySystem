@include('website.css')

@include('website.header')


<section class="heading">
    <h3>الكورسات المحجوزة</h3>
    {{-- <p> <a href="home.html">home >></a> course-1 </p> --}}
</section>


<!-- blog section starts  -->

<section class="blog">
@foreach ($reservation as $course)
    

    <div class="box">
        <div class="image">

                <img src="{{ asset('Courses/' . $course->courses->image) }}" alt="{{ $course->name }}">
            </div>
            <div class="content">
                {{-- <div class="icons">
                    <p href="#"> <i class="fas fa-clock"></i> {{ $course->created_at }}</p> --}}
                    {{-- <p href="#"> <i class="fas fa-user"></i> by admin </p> --}}
                {{-- </div> --}}
                <h3>{{ $course->courses->name }}</h3>
                <p>{{ $course->courses->content }}</p>
                <form action="{{ route('reservation.destroy',$course->id) }}"
                    method="post">
                @method('Delete')
                @csrf
                <button type="submit" class="btn">حذف الكورس</button>
                </form>
        </div>
    </div>


@endforeach
    


</section>

<!-- blog section ends -->


@include('website.footer')