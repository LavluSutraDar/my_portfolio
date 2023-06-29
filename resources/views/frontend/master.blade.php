@extends('frontend.index')

@section('main-section')
    <!-- ======= Hero Section ======= -->
    @foreach ($homes as $home)
        <div id="hero" class="hero route bg-image"
            style="background-image: url({{ asset('backend/home-image/' . $home->image) }})">


            <div class="overlay-itro"></div>
            <div class="hero-content display-table">
                <div class="table-cell">
                    <div class="container">
                        <!--<p class="display-6 color-d">Hello, world!</p>-->
                        <h1 class="hero-title mb-4">{{ $home->name }}</h1>
                        <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $home->title }}"></span></p>

                        <p class="hero-subtitle"><span class="typed" data-typed-items="{{ $home->sub_title }}"></span></p>

                        <p class="pt-3">
                            <a class="btn btn-primary btn js-scroll px-4" href="{{ url($home->resume) }}"
                                role="button">DOWNLOAD RESUME</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- End Hero Section -->
    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    @foreach ($abouts as $about)
                        <div class="col-sm-12">
                            <div class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-5">
                                                <div class="about-img">
                                                    <img src="{{ asset('backend/about-image/' . $about->image) }}"
                                                        class="img-fluid rounded b-shadow-a" alt=""
                                                        style="height: 200px">
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-7">
                                                <div class="about-info">

                                                    <p><span class="title-s">{{ $about->name }}: </span> <span></span></p>
                                                    <p>
                                                        <span class="title-s">Profile: </span>
                                                        <span>
                                                            {{ $about->profile }}
                                                        </span>
                                                    </p>
                                                    <p><span class="title-s">Email: </span> <span>{{ $about->email }}</span>
                                                    </p>
                                                    <p><span class="title-s">Phone: </span>
                                                        <span>(+00) {{ $about->phone }}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-mf">

                                            <p class="title-s">Skill</p>
                                            <span>HTML</span> <span class="pull-right">85%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <span>CSS3</span> <span class="pull-right">75%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 75%"
                                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <span>BOOTSTRAP</span> <span class="pull-right">85%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 85%;"
                                                    aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <span>PHP</span> <span class="pull-right">90%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <span>LARAVEL</span> <span class="pull-right">95%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 95%;"
                                                    aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>

                                            <span>JAVASCRIPT</span> <span class="pull-right">90%</span>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" style="width: 90%"
                                                    aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="about-me pt-4 pt-md-0">
                                            <div class="title-box-2">
                                                <h5 class="title-left">
                                                    About me
                                                </h5>
                                            </div>
                                            <p class="lead">
                                                @php
                                                    echo $about->description;
                                                @endphp
                                            </p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End About Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services-mf pt-5 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Services
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($services as $service)
                        <div class="col-md-4">
                            <div class="service-box">
                                <div class="service-ico">
                                    <span class="ico-circle">
                                        <i class="@php
echo $service->icon; @endphp">
                                        </i>
                                    </span>
                                </div>
                                <div class="service-content">
                                    <h2 class="s-title">{{ $service->title }}</h2>
                                    <p class="s-description text-center">

                                        @php
                                            echo $service->description;
                                        @endphp
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Counter Section ======= -->
        <div class="section-counter paralax-mf bg-image" style="background-image: url(assets/img/counters-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container position-relative">
                <div class="row">
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-check"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="450" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">WORKS COMPLETED</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-journal-richtext"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">YEARS OF EXPERIENCE</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-people"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="550" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">TOTAL CLIENTS</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-lg-3">
                        <div class="counter-box pt-4 pt-md-0">
                            <div class="counter-ico">
                                <span class="ico-circle"><i class="bi bi-award"></i></span>
                            </div>
                            <div class="counter-num">
                                <p data-purecounter-start="0" data-purecounter-end="48" data-purecounter-duration="1"
                                    class="counter purecounter"></p>
                                <span class="counter-text">AWARD WON</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Counter Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="work" class="portfolio-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Portfolio
                            </h3>
                            {{-- <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p> --}}
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @if (count($portfolios) > 0)
                        @foreach ($portfolios as $portfolio)
                            <div class="col-md-4">
                                <div class="work-box">
                                    <a href="" data-gallery="portfolioGallery" class="portfolio-lightbox">
                                        <div class="work-img">
                                            <img src="{{ asset('backend/portfolio-image/' . $portfolio->small_image) }}"
                                                alt="" class="img-fluid">
                                        </div>
                                    </a>
                                    <div class="work-content">
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h2 class="w-title">{{ $portfolio->title }}</h2>
                                                <div class="w-more">
                                                    <span class="w-ctegory">{{ $portfolio->category }}
                                                    </span> /
                                                    <span class="w-date">
                                                        {{ date('d M Y', strtotime($portfolio->created_at)) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="w-like">
                                                    <a href="{{ route('portfolio_details') }}"> <span
                                                            class="bi bi-plus-circle"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif


                </div>

            </div>
        </section>

        <!-- End Portfolio Section -->

        <!-- ======= Testimonials Section ======= -->
        <div class="testimonials paralax-mf bg-image" style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">
                                            <img src="assets/img/testimonial-2.jpg" alt=""
                                                class="rounded-circle b-shadow-a">
                                            <span class="author">Xavi Alonso</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->

                                <div class="swiper-slide">
                                    <div class="testimonial-box">
                                        <div class="author-test">
                                            <img src="assets/img/testimonial-4.jpg" alt=""
                                                class="rounded-circle b-shadow-a">
                                            <span class="author">Marta Socrate</span>
                                        </div>
                                        <div class="content-test">
                                            <p class="description lead">
                                                Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem
                                                ipsum dolor sit amet,
                                                consectetur adipiscing elit.
                                            </p>
                                        </div>
                                    </div>
                                </div><!-- End testimonial item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <div id="testimonial-mf" class="owl-carousel owl-theme">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Testimonials Section -->

        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog-mf sect-pt4 route">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="title-box text-center">
                            <h3 class="title-a">
                                Blog
                            </h3>
                            <p class="subtitle-a">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="line-mf"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Travel</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/testimonial-2.jpg" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/testimonial-2.jpg" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-blog">
                            <div class="card-img">
                                <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt=""
                                        class="img-fluid"></a>
                            </div>
                            <div class="card-body">
                                <div class="card-category-box">
                                    <div class="card-category">
                                        <h6 class="category">Web Design</h6>
                                    </div>
                                </div>
                                <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                                <p class="card-description">
                                    Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent
                                    sapien massa, convallis
                                    a pellentesque nec,
                                    egestas non nisi.
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="post-author">
                                    <a href="#">
                                        <img src="assets/img/testimonial-2.jpg" alt=""
                                            class="avatar rounded-circle">
                                        <span class="author">Morgan Freeman</span>
                                    </a>
                                </div>
                                <div class="post-date">
                                    <span class="bi bi-clock"></span> 10 min
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route"
            style="background-image: url(assets/img/overlay-bg.jpg)">
            <div class="overlay-mf"></div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact-mf">
                            <div id="contact" class="box-shadow-full">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="title-box-2">
                                            <h5 class="title-left">
                                                Send Message Us
                                            </h5>
                                        </div>
                                        <div>
                                            <form action="{{ route('contuct.store') }}" method="POST" class="">
                                                @csrf
                                                <input type="hidden" name="_method" value="POST">

                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" name="name"
                                                                class="form-control @error('name') is-invalid @enderror"
                                                                placeholder="Your Name">

                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control @error('email') is-invalid @enderror"
                                                                name="email" placeholder="Your Email">
                                                            @error('email')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-3">
                                                        <div class="form-group">
                                                            <input type="text"
                                                                class="form-control  @error('subject') is-invalid @enderror"
                                                                name="subject" placeholder="Subject">
                                                            @error('subject')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">

                                                            <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5"
                                                                placeholder="Message"></textarea>



                                                            @error('message')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 text-center">
                                                        <button type="submit"
                                                            class="mt-4 button button-a button-big button-rouded">Send
                                                            Message</button>
                                                    </div>
                                                </div>
                                            </form>


                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="title-box-2 pt-4 pt-md-0">
                                            <h5 class="title-left">
                                                Get in Touch
                                            </h5>
                                        </div>
                                        <div class="more-info">
                                            <p class="lead">
                                                @php
                                                    echo $about->description;
                                                @endphp
                                            </p>
                                            <ul class="list-ico">
                                                <li><span class="bi bi-geo-alt"></span>Dhaka Danmondi(32)</li>
                                                <li><span class="bi bi-phone"></span>{{ $about->phone }}</li>
                                                <li><span class="bi bi-envelope"></span>{{ $about->email }}</li>
                                            </ul>
                                        </div>
                                        <div class="socials">
                                            <ul>
                                                <li><a href="https://www.facebook.com/"><span class="ico-circle"><i
                                                                class="bi bi-facebook"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-instagram"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-twitter"></i></span></a></li>
                                                <li><a href=""><span class="ico-circle"><i
                                                                class="bi bi-linkedin"></i></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
