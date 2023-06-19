@foreach ($homes as $home)
    <div id="hero" class="hero route bg-image"
        style="background-image: url({{ asset('backend/home-image/' . $home->image) }})">


        <div class="overlay-itro"></div>
        <div class="hero-content display-table">
            <div class="table-cell">
                <div class="container">
                    <!--<p class="display-6 color-d">Hello, world!</p>-->
                    <h1 class="hero-title mb-4">{{ $home->name }}</h1>
                    {{-- <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $home->title }}"></span></p> --}}
                    
                    <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $home->sub_title }}"></span></p>
                    <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
                </div>
            </div>
        </div>
    </div>
@endforeach
