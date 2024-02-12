@extends('layouts.app')

@section('content')

<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('../assets/img/about-header.jpg')">
        <div class="container position-relative d-flex flex-column align-items-center">
            <h2>Get Loan Form</h2>
            <ol>
                <li><a href="{{ route('welcome') }}">Home</a></li>
                <li>Loan</li>
            </ol>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container position-relative" data-aos="fade-up">
            <div class="row gy-4 d-flex justify-content-end">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <!-- Loan Application Form -->
                    <form id="loan-application-form" class="loan-form ph-email-form" action="{{ route('contact.submitLoan') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <!-- First Name, Middle Name, Last Name -->
                            <div class="col-md-4 mb-3">
                                <label for="first_name" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" required />
                                <div class="invalid-feedback">
                                    Please enter your first name.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="middle_name" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" />
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="last_name" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" required />
                                <div class="invalid-feedback">
                                    Please enter your last name.
                                </div>
                            </div>
                        </div>

                        <!-- Date of Birth, Gender, Marital Status -->
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="date_of_birth" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" required />
                                <div class="invalid-feedback">
                                    Please enter your date of birth.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="gender" class="form-label">Gender</label>
                                <select class="form-select" id="gender" name="gender" required>
                                    <option value="">Select</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your gender.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="marital_status" class="form-label">Marital Status</label>
                                <select class="form-select" id="marital_status" name="marital_status" required>
                                    <option value="">Select</option>
                                    <option value="single">Single</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="widowed">Widowed</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select your marital status.
                                </div>
                            </div>
                        </div>

                        <!-- Home Address, Nationality -->
                        <div class="mb-3">
                            <label for="home_address" class="form-label">Home Address (Verifiable)</label>
                            <input type="text" class="form-control" id="home_address" name="home_address" required />
                            <div class="invalid-feedback">
                                Please enter your home address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="nationality" class="form-label">Nationality</label>
                            <input type="text" class="form-control" id="nationality" name="nationality" required />
                            <div class="invalid-feedback">
                                Please enter your nationality.
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required />
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>

                        <!-- Occupation, Monthly Income -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="occupation" class="form-label">Occupation</label>
                                <input type="text" class="form-control" id="occupation" name="occupation" required />
                                <div class="invalid-feedback">
                                    Please enter your occupation.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="monthly_income" class="form-label">Monthly Income</label>
                                <input type="number" class="form-control" id="monthly_income" name="monthly_income" required />
                                <div class="invalid-feedback">
                                    Please enter your monthly income.
                                </div>
                            </div>
                        </div>

                        <!-- Home Tel, Mobile -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="home_tel" class="form-label">Home Tel</label>
                                <input type="tel" class="form-control" id="home_tel" name="home_tel" />
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="mobile" class="form-label">Mobile</label>
                                <input type="tel" class="form-control" id="mobile" name="mobile" required />
                                <div class="invalid-feedback">
                                    Please enter your mobile number.
                                </div>
                            </div>
                        </div>

                        <!-- Total Loan Amount, Loan Duration -->
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="total_loan_amount" class="form-label">Total Loan Amount ($[USD] £[GBP] €[EURO])</label>
                                <input type="number" class="form-control" id="total_loan_amount" name="total_loan_amount" required />
                                <div class="invalid-feedback">
                                    Please enter the total loan amount.
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="loan_duration" class="form-label">Loan Duration (Years)</label>
                                <input type="number" class="form-control" id="loan_duration" name="loan_duration" required />
                                <div class="invalid-feedback">
                                    Please enter the loan duration in years.
                                </div>
                            </div>
                        </div>

                        <!-- Purpose for Loan -->
                        <div class="mb-3">
                            <label for="loan_purpose" class="form-label">Purpose for Loan</label>
                            <textarea class="form-control" id="loan_purpose" name="loan_purpose" rows="3" required></textarea>
                            <div class="invalid-feedback">
                                Please enter the purpose for the loan.
                            </div>
                        </div>

                        <!-- Have You Applied For Loan Before -->
                        <div class="mb-3 form-check">
                            <!-- Add hidden input to ensure a value is always submitted -->
                            <input type="hidden" name="applied_before" value="false">
                            <input type="checkbox" class="form-check-input" id="applied_before" name="applied_before" value="true" />
                            <label class="form-check-label" for="applied_before">I Have Applied For Loan Before</label>
                        </div>

                        <!-- Copy of Valid ID Card -->
                        <div class="mb-3 form-group">
                            <label for="id_card" class="form-label">Copy of Valid ID Card</label>
                            <input type="file" class="form-control" id="id_card" name="id_card" accept="image/*" onchange="previewImage(event)" required>
                            <div class="invalid-feedback">
                                Please upload a copy of your valid ID card.
                            </div>
                            <!-- Image preview -->
                            <img id="image-preview" src="#" alt="Image Preview" style="display: none; max-width: 10%; margin-top: 10px; border-radius: 10%;">
                        </div>

                        <script>
                            function previewImage(event) {
                                var input = event.target;
                                var reader = new FileReader();

                                reader.onload = function() {
                                    var imgElement = document.getElementById('image-preview');
                                    imgElement.src = reader.result;
                                    imgElement.style.display = 'block';
                                }

                                reader.readAsDataURL(input.files[0]);
                            }
                        </script>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">
                                Your message has been sent. Thank you!
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>

                        @if ($errors->any())
                        <div class="alert alert-danger mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif


                    </form>
                    <!-- End Loan Application Form -->
                </div>

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                    <!-- Contact Information -->
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0"></i>
                        <div>
                            <h4>Location:</h4>
                            <p>A108 Adam Street, New York, NY 535022</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h4>Email:</h4>
                            <p>info@example.com</p>
                        </div>
                    </div>
                    <!-- End Info Item -->

                    <div class="info-item d-flex">
                        <i class="bi bi-phone flex-shrink-0"></i>
                        <div>
                            <h4>Call:</h4>
                            <p>+1 5589 55488 55</p>
                        </div>
                    </div>
                    <!-- End Info Item -->
                    <!-- End Contact Information -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->
</main>
<!-- End #main -->


@endsection