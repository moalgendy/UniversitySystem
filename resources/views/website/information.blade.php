@auth

<!-- course-1 section starts  -->

<section class="course-1">

    @foreach ($posts as $post)

    <div class="box">
        {{-- <img style="width: 6rem;height: 7rem;border-radius: 50%;" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt=""> --}}
        <h3>Dr : {{ $post->name }}</h3>
        <p>{{ $post->content }}</p>
        <a href="{{ $post->url }}"><h2 style="color: rgb(204, 8, 8)">{{ $post->url }}</h2></a>
        {{-- <a href="#" class="btn">read more</a> --}}
    </div>

    @endforeach

</section>
<br>
<br>
<br>

{{-- <div class="card border-info mb-3" style="max-width: 18rem;">
    <div class="card-header">{{ Auth::user()->name }}</div>
    <div class="card-body">
        <h5 class="card-title">اهلا بك يا {{ Auth::user()->name }}</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
  </div> --}}
  
  
  @endauth