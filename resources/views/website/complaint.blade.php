@include('website.css')

    
<!-- header section starts  -->

@include('website.header')

<!-- header section ends -->
{{-- @include('website.alert') --}}

<section class="heading">
    <h3>الشكاوى</h3>
    {{-- <p>الشكاوى <a href="/home"> << الرئيسية</a> </p> --}}
</section>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>رقم المعهد</h3>
            <p>16308</p>
            <p>21040101 (012)</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>ايميل المعهد</h3>
            <p>info@oi.edu.eg</p>
            {{-- <p>anasbhai@gmail.com</p> --}}
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>العنوان</h3>
            <p>كيلو21 طريق القاهرة-بلبيس الصحراوى
                ص.ب 27 مدينة العبور - على بعد 10 دقائق من كارفور العبور وإستاد السلام الدولى .</p>
        </div>

    </div>

    <div class="row">

        


        <form action="{{ route('complaint.store') }}" method="POST">
            @csrf
            <h3>ارسال شكوى</h3>
            <input style="display: none" type="text" name="name" placeholder="الاسم" class="box">
            <input style="display: none" type="phone" name="phone"  placeholder="رقم التليفون" class="box">
            <input style="display: none" type="email" name="email" placeholder="الايميل" class="box">
            <input type="text" name="title" placeholder="عنوان الشكوى" class="box">
            {{-- <input type="text" name="content" placeholder="اكتب الشكوى" class="box"> --}}
            <textarea name="content" placeholder="اكتب الشكوى هنا" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="ارسال الشكوى"  class="btn">
        </form>

        {{-- <iframe class="map" src="https://goo.gl/maps/Qucry9zMZKTD3mUc8" allowfullscreen="" loading="lazy"></iframe> --}}

    </div>

</section>


@include('website.footer')