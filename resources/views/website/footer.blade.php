


<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>{{ __('website.sections') }}</h3>
            <a href="home.html"> <i class="fas fa-arrow-right"></i> {{ __('website.science') }}</a>
            <a href="about.html"> <i class="fas fa-arrow-right"></i> {{ __('website.information') }}</a>
            <a href="course-1.html"> <i class="fas fa-arrow-right"></i> {{ __('website.business') }}</a>
            <a href="course-2.html"> <i class="fas fa-arrow-right"></i> {{ __('website.architectural') }}</a>
            <a href="course-3.html"> <i class="fas fa-arrow-right"></i> {{ __('website.communications') }}</a>

        </div>

        <div class="box">
            <h3>{{ __('website.services') }}</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> {{ __('website.complaints') }}</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> {{ __('website.library') }}</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> {{ __('website.about1') }}</a>

        </div>

        <div class="box">
            <h3>{{ __('website.training') }}</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> {{ __('website.available') }}</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> {{ __('website.reserved') }}</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> {{ __('website.about2') }}</a>

        </div>

        <div class="box">
            <h3>{{ __('website.follow') }}</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> {{ __('website.facebook') }}</a>
            <a href="#"> <i class="fab fa-twitter"></i> {{ __('website.twitter') }}</a>
            <a href="#"> <i class="fab fa-linkedin"></i> {{ __('website.linkedin') }}</a>
            <a href="#"> <i class="fab fa-instagram"></i> {{ __('website.instagram') }}</a>
            {{-- <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a> --}}
            <a href="#"> <i class="fab fa-github"></i> {{ __('website.github') }}</a>
        </div>

    </div>

    <div class="credit">  copyright @ 2022 by <span>Mohamed ALgendy </span> | All rights reserved &copy;  </div>

</section>

<!-- footer section ends -->

<!-- custom js file link  -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
{{-- <script>
    function confirmation(ev) {
        ev.preventDefault();
        var urlToRedirect = ev.currentTarget.getAttribute('href');  
        console.log(urlToRedirect); 
        swal({
            title: "تم ارسال الشكوى بنجاح",
            // text: "You will not be able to revert this!",
            icon: "success",
            buttons: true,
            dangerMode: false,
        })
        .then((willCancel) => {
            if (willCancel) {


                
                window.location.href = urlToRedirect;
                
            }

        //     else{
        //         swal({
        //     title: "Are you sure to cancel this product",
        //     text: "You will not be able to revert this!",
        //     icon: "warning",
        //     buttons: true,
        //     dangerMode: true,
        });
        //     }


        // });

        
    }
</script> --}}


<script src="{{ asset('website/js/script.js') }}"></script>

</body>
</html>