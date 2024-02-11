@extends('layouts.app')

@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/services-header.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Services</h2>
            <ol>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li>Services</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->

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
                            <a href="#" class="stretched-link">Lorem Ipsum</a>
                        </h4>
                        <p class="description">
                            Voluptatum deleniti atque corrupti quos dolores et quas
                            molestias excepturi sint occaecati cupiditate non provident
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
                            <a href="#" class="stretched-link">Dolor Sitema</a>
                        </h4>
                        <p class="description">
                            Minim veniam, quis nostrud exercitation ullamco laboris nisi
                            ut aliquip ex ea commodo consequat tarad limino ata
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
                            <a href="#" class="stretched-link">Sed ut perspiciatis</a>
                        </h4>
                        <p class="description">
                            Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur
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
                            <a href="#" class="stretched-link">Magni Dolores</a>
                        </h4>
                        <p class="description">
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa
                            qui officia deserunt mollit anim id est laborum
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
                            <a href="#" class="stretched-link">Nemo Enim</a>
                        </h4>
                        <p class="description">
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque
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
                            <a href="#" class="stretched-link">Eiusmod Tempor</a>
                        </h4>
                        <p class="description">
                            Et harum quidem rerum facilis est et expedita distinctio. Nam
                            libero tempore, cum soluta nobis est eligendi
                        </p>
                    </div>
                </div>
                <!-- End Service Item -->
            </div>
        </div>
    </section>
    <!-- End Our Services Section -->

    <!-- ======= Services Cards Section ======= -->
    <section id="services-cards" class="services-cards">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(assets/img/loan-card-1.jpg)"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Quick Loan Approval</h4>
                                    <p>
                                        Get fast approval for your loan application with our
                                        streamlined process. We understand your urgent financial
                                        needs and provide quick solutions.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(assets/img/loan-card-2.jpg)"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Flexible Repayment Options</h4>
                                    <p>
                                        Choose from a variety of repayment options tailored to
                                        your financial situation. We offer flexibility to ensure
                                        comfortable repayment terms.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(assets/img/loan-card-3.jpg)"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Low Interest Rates</h4>
                                    <p>
                                        Enjoy competitive interest rates on your loans to
                                        minimize costs. We offer affordable financing solutions
                                        to meet your needs.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url(assets/img/loan-card-4.jpg)"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Personalized Loan Solutions</h4>
                                    <p>
                                        Receive personalized loan solutions tailored to your
                                        specific needs. We provide customized financial
                                        assistance to help you achieve your goals.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Card Item -->
            </div>
        </div>
    </section>
    <!-- End Services Cards Section -->

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