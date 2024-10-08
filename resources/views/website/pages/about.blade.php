@extends('website.layouts.master')
@section('title' ,'About Page')
@section('main-content')
<!-- About Section -->

<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="img-box">
                    <img src="{{ asset('assest/images/about-img.png') }}" alt="About Image">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="detail-box">
                    <div class="heading_container">
                        <h2>
                            We Are Feane
                        </h2>
                    </div>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                        in some form, by injected humour, or randomised words which don't look even slightly believable. If you
                        are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in
                        the middle of text. All
                    </p>
                    <a href="#">
                        Read More
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End About Section -->

@endsection
