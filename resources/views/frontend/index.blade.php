<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.hedar')

<body>

    <!-- ======= Header ======= -->
    @include('frontend.layouts.navbar')
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    @include('frontend.layouts.hero')
    <!-- End Hero Section -->

    @yield('main-section')

    <!-- ======= Footer ======= -->
    @include('frontend.layouts.footer')
    <!-- End  Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i>
    </a>

    @include('frontend.layouts.script')

</body>

</html>
