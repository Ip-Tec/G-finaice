@extends('layouts.app')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <h2 data-aos="fade-up">Focus On What Matters</h2>
                <blockquote data-aos="fade-up" data-aos-delay="100">
                    <p>Trust G-Finance to Fuel Your Progress</p>
                    <p class="">
                        From Personal Ventures to Corporate Initiatives, Our Tailored
                        Loan Offerings Drive Sustainable Financial Growth and Success.
                    </p>
                </blockquote>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#why-us" class="btn-get-started">Why Choose Us</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Hero Section -->

<main id="main">
    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Why Choose Us</h2>
            </div>

            <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                <div class="col-xl-5 img-bg" style="background-image: url('assets/img/why-us-bg.jpg')"></div>
                <div class="col-xl-7 slides position-relative">
                    <div class="slides-1 swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Expertise</h3>
                                    <h4 class="mb-3">
                                        Unparalleled expertise for tailored financial solutions.
                                    </h4>
                                    <p>
                                        With years of experience, G-Finance ensures you receive
                                        the best guidance and solutions for your needs.
                                    </p>
                                </div>
                            </div>
                            <!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Flexibility</h3>
                                    <h4 class="mb-3">
                                        Flexible loan options designed around your
                                        circumstances.
                                    </h4>
                                    <p>
                                        Choose terms that align perfectly with your goals at
                                        G-Finance.
                                    </p>
                                </div>
                            </div>
                            <!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Customer-Centric Approach</h3>
                                    <h4 class="mb-3">
                                        Prioritizing your satisfaction every step of the way.
                                    </h4>
                                    <p>
                                        At G-Finance, our customers are at the heart of
                                        everything we do.
                                    </p>
                                </div>
                            </div>
                            <!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Competitive Rates</h3>
                                    <h4 class="mb-3">
                                        Access affordable financing with transparent rates.
                                    </h4>
                                    <p>
                                        Get quick and efficient service from application to
                                        funds disbursal.
                                    </p>
                                </div>
                            </div>
                            <!-- End slide item -->

                            <div class="swiper-slide">
                                <div class="item">
                                    <h3 class="mb-3">Trust and Reliability</h3>
                                    <h4 class="mb-3">
                                        Partner with trust – your financial needs in safe hands.
                                    </h4>
                                    <p>
                                        G-Finance upholds integrity and reliability in all
                                        aspects.
                                    </p>
                                </div>
                            </div>
                            <!-- End slide item -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Why Choose Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Our Services</h2>
            </div>

            <div class="row gy-5">
                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-briefcase" style="color: #f57813"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="#" class="stretched-link">Personal Loans</a>
                        </h4>
                        <p class="description">
                            G-Finance offers flexible personal loan options designed to
                            meet your individual financial needs.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-card-checklist" style="color: #15a04a"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="#" class="stretched-link">Business Loans</a>
                        </h4>
                        <p class="description">
                            Access funding for your business ventures with our tailored
                            business loan solutions.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-bar-chart" style="color: #d90769"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="#" class="stretched-link">Debt Consolidation</a>
                        </h4>
                        <p class="description">
                            Consolidate your debts into one manageable payment with our
                            debt consolidation services.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-binoculars" style="color: #15bfbc"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="#" class="stretched-link">Mortgages</a>
                        </h4>
                        <p class="description">
                            Find your dream home with our mortgage financing options
                            tailored to your needs.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-brightness-high" style="color: #f5cf13"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="#" class="stretched-link">Investment Solutions</a>
                        </h4>
                        <p class="description">
                            Grow your wealth with our diverse range of investment products
                            and services.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->

                <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon flex-shrink-0">
                        <i class="bi bi-calendar4-week" style="color: #1335f5"></i>
                    </div>
                    <div>
                        <h4 class="title">
                            <a href="#" class="stretched-link">Financial Planning</a>
                        </h4>
                        <p class="description">
                            Secure your financial future with our comprehensive financial
                            planning services.
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->
            </div>
        </div>
    </section>
    <!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>Unlock Your Financial Potential Today</h3>
                    <p>
                        Take the first step towards achieving your financial goals.
                        Explore our diverse range of financial solutions tailored to
                        your needs.
                    </p>
                    <a class="cta-btn" href="./loan/#loan-application-form">Get a Loan</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Call To Action Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Testimonials</h2>
            </div>

            <div class="slides-3 swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    <!-- Testimonial 1: John Doe -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                I am extremely satisfied with the services provided by
                                G-Finaice. They exceeded my expectations and delivered
                                excellent results.
                            </p>
                            <div class="profile mt-auto">
                                <img src="../assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="" />
                                <h3>John Doe</h3>
                                <h4>Client</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <!-- Testimonial 2: Jane Smith -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p>
                                Working with G-Finaice was a great experience. Their
                                professionalism and attention to detail impressed me. I
                                would highly recommend their services.
                            </p>
                            <div class="profile mt-auto">
                                <img src="../assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="" />
                                <h3>Jane Smith</h3>
                                <h4>Client</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <!-- Testimonial 3: Michael Johnson -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p>
                                G-Finaice helped me streamline my finances and achieve my
                                financial goals. I appreciate their expertise and dedication
                                to customer satisfaction.
                            </p>
                            <div class="profile mt-auto">
                                <img src="../assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="" />
                                <h3>Michael Johnson</h3>
                                <h4>Client</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <!-- Testimonial 4: Emily Brown -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                I couldn't be happier with the support I received from
                                G-Finaice. Their team went above and beyond to assist me and
                                provided valuable insights.
                            </p>
                            <div class="profile mt-auto">
                                <img src="../assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="" />
                                <h3>Emily Brown</h3>
                                <h4>Client</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->

                    <!-- Testimonial 5: David Wilson -->
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                            </div>
                            <p>
                                G-Finaice offers top-notch financial services. They are
                                knowledgeable, reliable, and always ready to help. I'm glad
                                I chose them for my financial needs.
                            </p>
                            <div class="profile mt-auto">
                                <img src="../assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="" />
                                <h3>David Wilson</h3>
                                <h4>Client</h4>
                            </div>
                        </div>
                    </div>
                    <!-- End testimonial item -->
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- End Testimonials Section -->
</main>
<!-- End #main -->
@endsection