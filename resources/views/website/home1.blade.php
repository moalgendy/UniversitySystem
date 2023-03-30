
@include('website.header')

<!-- home section starts  -->

<section class="home">

    <div class="image">
        <img src="{{ asset('website/images/home-img.png') }}" alt="">
    </div>

    <div class="content">
    <h3>أهلاً بك في معاهد العبور</h3>
        <p>اهلاً وسهلاً بجميع طلابنا الاعزاء ونتمني لكم التوفيق في حياتكم الدراسية وان تكونوا سعداء داخل الحرم الجامعي  ونرجوا منكم ان تشاركونا مشكلاتكم وارائكم عن طريق الموقع .</p>
        {{-- @auth
        @else
        <a href="{{ route('login') }}" class="btn">سجل دخولك</a> 

        @endauth --}}

        
        
        <a href="{{ route('login') }}" class="btn">سجل دخولك</a> 
        

        
        

        
        

    </div>

</section>

<!-- home section ends -->

<!-- categories section starts  -->

<section class="category">

    <a href="#" class="box">
        <img src="{{ asset('website/images/category-1.png') }}" alt="">
        <h3>علوم الحاسب</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('website/images/category-2.png') }}" alt="">
        <h3>نظم المعلومات</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('website/images/category-3.png') }}" alt="">
        <h3>ادارة الاعمال</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('website/images/category-4.png') }}" alt="">
        <h3>هندسة مدنية ومعمارية</h3>
    </a>

    <a href="#" class="box">
        <img src="{{ asset('website/images/category-5.png') }}" alt="">
        <h3>هندسة الاتصالات</h3>
    </a>

</section>

<!-- categories section ends -->









@include('website.footer')