@extends('components.layouts.home')
@section('content')

<main class="main">
    <!-- promo section start -->
    <section class="promo">
        <div class="promo-slider">
            <!-- Slide 1 -->
            <div class="promo-slider__item promo-slider__item--style-1">
                <picture>
                    <source srcset="assets/img/prop_back-1.jpeg" media="(min-width: 835px)" />
                    <source srcset="assets/img/prop_back-3.jpeg" media="(min-width: 376px)" />
                    <img class="img--bg" src="assets/img/prop_back-2.jpeg" alt="img" />
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="promo-slider__title">
                                            <span>Find Your Dream Home</span>
                                            <span>Buy or Sell Properties</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="promo-slider__subtitle">
                                            Discover premium houses, lands, and apartments for sale or rent. List your property today or connect with trusted buyers.
                                        </p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button promo-slider__button button--primary" href="{{ url('home/property-list') }}">Explore Listings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="promo-slider__item promo-slider__item--style-2">
                <picture>
                    <source srcset="assets/img/prop_back-2.jpeg" media="(min-width: 835px)" />
                    <source srcset="assets/img/prop_back-2.jpeg" media="(min-width: 376px)" />
                    <img class="img--bg" src="assets/img/prop_back-2.jpeg" alt="img" />
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="promo-slider__title">
                                            <span>Trusted Agents</span>
                                            <br />
                                            <span>Across the Country</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="promo-slider__subtitle">
                                            Our team connects buyers with verified agents for a smooth, transparent, and secure real estate experience.
                                        </p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button promo-slider__button button--primary" href="mailto:support@propertyhub.com">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="promo-slider__item promo-slider__item--style-3">
                <picture>
                    <source srcset="assets/img/prop_back-3.jpeg" media="(min-width: 835px)" />
                    <source srcset="assets/img/prop_back-3.jpeg" media="(min-width: 376px)" />
                    <img class="img--bg" src="assets/img/prop_back-3.jpeg" alt="img" />
                </picture>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                            <div class="align-container">
                                <div class="align-container__item">
                                    <div class="promo-slider__wrapper-1">
                                        <h2 class="promo-slider__title">
                                            <span>Property Deals</span>
                                            <br />
                                            <span>Anytime, Anywhere</span>
                                        </h2>
                                    </div>
                                    <div class="promo-slider__wrapper-2">
                                        <p class="promo-slider__subtitle">
                                            Whether you're in the city or rural area, we help you find or list properties with ease and confidence.
                                        </p>
                                    </div>
                                    <div class="promo-slider__wrapper-3">
                                        <a class="button promo-slider__button button--primary" href="{{ url('home/property-list') }}">Browse Properties</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- promo socials -->
        <ul class="promo-socials">
            <li class="promo-socials__item">
                <a class="promo-socials__link" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </li>
            <li class="promo-socials__item">
                <a class="promo-socials__link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="promo-socials__item">
                <a class="promo-socials__link" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
        </ul>

        <!-- slider nav -->
        <div class="slider__nav slider__nav--promo">
            <div class="promo-slider__count"></div>
            <div class="slider__arrows">
                <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
            </div>
        </div>
    </section>
    <!-- promo section end -->

    <!-- about us section -->
    <section class="section about-us" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="heading heading--primary">
                        <span class="heading__pre-title">About Us</span>
                        <h2 class="heading__title"><span>More About</span> <span>PropertyHub</span></h2>
                    </div>
                    <p><strong>PropertyHub is your trusted platform for real estate buying and selling. We help individuals and agents list, search, and close property deals quickly.</strong></p>
                    <p>Whether you're looking for your next home, a commercial space, or land investment, we’ve got thousands of verified properties ready for you.</p>
                    <p>Our mission is to make property transactions easy, reliable, and transparent.</p>
                    <a class="button button--primary" href="{{ url('home/about-us') }}">Learn More</a>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="info-box">
                        <img class="img--layout" src="assets/img/about_layout.png" alt="img" />
                        <img class="img--bg" src="assets/img/smbg.jpg" alt="img" />
                        <h4 class="info-box__title">A Smart Way to Deal Properties</h4>
                        <p>We simplify the process of buying and selling land, homes, apartments, and commercial spaces.</p>
                        <a class="info-box__link" href="{{ url('home/property-list') }}">Find Property</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us section end -->

    <!-- featured properties section -->
    <section class="section causes">
        <img class="causes__bg" src="assets/img/causes_img.png" alt="img" />
        <div class="container">
            <div class="row align-items-end">
                <div class="col-xl-5">
                    <div class="heading heading--primary">
                        <h2 class="heading__title"><span>Featured</span><span>Properties</span></h2>
                        <p>Looking for the best property deals? Browse through our featured listings below. You can also explore all listings or post your own property.</p>
                    </div>
                </div>
                <div class="col-sm-6 d-flex justify-content-sm-end">
                    <div class="slider__nav causes-slider__nav">
                        <div class="slider__arrows">
                            <div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i></div>
                            <div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="causes-holder offset-margin" id="featured-properties">
                <div class="causes-holder__wrapper">
                    <div class="causes-slider offset-margin">
                        @foreach($property as $prop)
                            <div class="causes-slider__item">
                                <div class="causes-item causes-item--primary">
                                    <div class="causes-item__body p-2 text-center">
                                        <div class="causes-item__top p-0">
                                            <h6 class="causes-item__title mb-0 pb-0">
                                                <a href="{{ url('home/property-booking/' . $prop->id) }}">{{ $prop->title }}</a><br>
                                                <small>{{ $prop->price }}</small>
                                            </h6>
                                        </div>
                                        <div class="causes-item__img m-1">
                                            <img style="overflow:hidden; object-fit:cover; border-radius:15px;" class="img--bg" src="{{ asset('storage/' . $prop->cover_image) }}" alt="img" />
                                        </div>
                                        <a class="mx-auto mt-1 button causes-item__button button--primary" href="{{ url('home/property-booking/' . $prop->id) }}">
                                            View Details
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- featured properties end -->
</main>

@endsection
