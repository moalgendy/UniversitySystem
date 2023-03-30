<header class="header">

    <a href="/" class="logo"> <i class="fas fa-graduation-cap"></i> {{ __('website.logo') }} </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            
            @if (Route::has('login'))
                    @auth
                    <li>
                    
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">
                    @if (Auth::user()->profile_photo_path)
                        <img class="h-12 w-12 rounded-full object-cover" style="width: 2rem;height: 2rem;border-radius: 9999px;" src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}" />
                    @else
                        <img class="h-12 w-12 rounded-full object-cover" style="width: 2rem;height: 2rem;border-radius: 9999px;" src="{{Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" /> 
                    @endif
                    <span class="caret"></span></a>
                        
                    <ul class="dropdown-menu">
                        {{-- <li><a href="{{ url('user/profile') }}">البروفايل</a></li> --}}
                        @if (Auth::user()->status == 'student')
                            
                        @else
                        <li><a href="{{ route('dashboard') }}">{{ __('university.admin') }}</a></li>

                        @endif
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('website.logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form></li>
                    </ul>
                    </li>
                @else

                <li><a href="#">{{ __('website.register') }} +</a>
                    <ul>
                        <li><a href="{{ route('login') }}">{{ __('website.signin') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('website.register2') }}</a></li>
                    </ul>
                </li>
                
                @endauth
                @endif
                
                </li>

                <li><a href="#">@if (App::getLocale() == 'ar')
                    العربية
                <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
                @else
                {{ LaravelLocalization::getCurrentLocaleName() }}
                <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
                @endif</a>
                    <ul>
                        
                        <li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                        </li>
    
                    </ul>
                </li>
            
            <li><a href="#">{{ __('website.services') }} +</a>
                <ul>
                    <li><a href="{{ route('complaints') }}">{{ __('website.complaints') }}</a></li>
                    <li><a href="{{ route('library') }}">{{ __('website.library') }}</a></li>
                    <li><a href="{{ route('aboutfa') }}">{{ __('website.about1') }}</a></li>
                </ul>
            </li>

            <li><a href="#">{{ __('website.sections') }} +</a>
                <ul>
                    <li><a href="{{ route('show.schedule.since') }}">{{ __('website.science') }}</a></li>
                    <li><a href="{{ route('show.schedule.info') }}">{{ __('website.information') }}</a></li>
                    <li><a href="{{ route('show.schedule.manage') }}">{{ __('website.business') }}</a></li>
                    <li><a href="{{ route('show.schedule.build') }}">{{ __('website.architectural') }}</a></li>
                    <li><a href="{{ route('show.schedule.comu') }}">{{ __('website.communications') }}</a></li>
                </ul>
            </li>
            <li><a href="#">{{ __('website.training') }} +</a>
                <ul>
                    <li><a href="{{ route('courses') }}">{{ __('website.available') }}</a></li>
                    <li><a href="{{ route('reservation.index') }}">{{ __('website.book') }}</a></li>

                    @if (Auth::user())
                    <li><a href="{{ route('course.reserva') }}">{{ __('website.reserved') }}</a></li>

                    @else

                    @endif
                    <li><a href="{{ route('aboutcou') }}">{{ __('website.about2') }}</a></li>
                </ul>
            </li>
            <li><a href="/">{{ __('website.home') }}</a></li>
        </ul>


        {{-- language selector --}}
        
        {{-- <div class="btn-group mb-1 nav-item dropdown">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                @if (App::getLocale() == 'ar')
                {{ LaravelLocalization::getCurrentLocaleName() }}
            <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
            @else
            {{ LaravelLocalization::getCurrentLocaleName() }}
            <img src="{{ URL::asset('assets/images/flags/US.png') }}" alt="">
            @endif
            </button>
            <div class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                @endforeach
            </div>
            </div> --}}


    </nav>

</header>

<!-- header section ends -->