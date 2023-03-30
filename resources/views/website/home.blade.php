@include('website.css')

<!-- header section starts  -->


@include('website.header')


<!-- header section end  -->



<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="{{ asset('website/images/home-img.png') }}" alt="">
    </div>

    <div class="content">
    <h3>{{ __('website.welcome') }}</h3>
        <h3  style="font-size: 26px;font-weight: 800">{{ __('website.welcome2') }}</h3>
        @auth
        
        @else
        <a href="{{ route('login') }}" class="btn">{{ __('website.signin') }}</a> 

        @endauth

        
        
        {{-- <a href="{{ route('login') }}" class="btn">سجل دخولك</a>  --}}
        

        
        

        
        

    </div>

</section>

<!-- home section ends -->

<!-- categories section starts  -->

<section class="category">

    <a href="{{ route('show.schedule.since') }}" class="box">
        <img src="{{ asset('website/images/category-1.png') }}" alt="">
        <h3>{{ __('website.science') }}</h3>
    </a>

    <a href="{{ route('show.schedule.info') }}" class="box">
        <img src="{{ asset('website/images/category-2.png') }}" alt="">
        <h3>{{ __('website.information') }}</h3>
    </a>

    <a href="{{ route('show.schedule.manage') }}" class="box">
        <img src="{{ asset('website/images/category-3.png') }}" alt="">
        <h3>{{ __('website.business') }}</h3>
    </a>

    <a href="{{ route('show.schedule.build') }}" class="box">
        <img src="{{ asset('website/images/category-4.png') }}" alt="">
        <h3>{{ __('website.architectural') }}</h3>
    </a>

    <a href="{{ route('show.schedule.comu') }}" class="box">
        <img src="{{ asset('website/images/category-5.png') }}" alt="">
        <h3>{{ __('website.communications') }}</h3>
    </a>

</section>

@auth
    

<center>
    <h1 style="padding-top: 50px;padding-bottom: 50px;font-size: 4rem;font-family: 'Amiri Quran',serf;font-weight: 500;">
            آخر الاخبار 
    </h1>
</center>

@endauth

<center>
    @include('website.information')
</center>

<!-- categories section ends -->









@include('website.footer')