@include('website.css')

@include('website.header')


<section class="heading">
    <h3>المكتبة</h3>
    {{-- <p> <a href="home.html">home >></a> course-1 </p> --}}
</section>


<!-- blog section starts  -->

<section class="blog">
@foreach ($books as $book)
    

    <div class="box">
        <div class="image">
            <img src="{{ asset('library/' . $book->book_image) }}" alt="">
        </div>
        <div class="content">
            <div class="icons" style="margin-bottom: 0; ">
                <p href="#"> <i class="fas fa-user" style="padding-left:7px;"></i>{{ $book->book_title }}</p>
                {{-- <p href="#"> <i class="fas fa-user"></i> by admin </p> --}}
            </div>
            <h3>{{ $book->book_name }}</h3>
            <p>{{ $book->book_content }}</p>
            {{-- <a href="#" class="btn">read more</a> --}}
        </div>
    </div>


@endforeach
    


</section>
<br>
<br>
<br>
<!-- blog section ends -->


@include('website.footer')