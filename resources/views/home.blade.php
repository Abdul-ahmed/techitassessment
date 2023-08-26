<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TECHIT Assessment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            /* background-image: linear-gradient(to bottom right, #F5F5F5, #29166F, #F5F5F5); */
            /* background-image: linear-gradient(to bottom right, #F5F5F5, #C3BED5, #F5F5F5); */
            background-image: url("{{ asset('assets/img/Mask_group.svg') }}");
            background-repeat: no-repeat, repeat;
            background-size: cover;
        }

        hr {
            width: 50px;
            border-width: 5px;
            color: #29166F;
            border-radius: 10px;
        }

        #addSubjectBtn:hover {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <header class="p-3 mb-3 border-bottom sticky-top bg-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/"
                    class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                    <img src="{{ asset('assets/img/LOGO.svg') }}" alt="adecom college logo">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                </ul>

                <ul class="nav">
                    <img src="{{ asset('assets/img/mail.svg') }}" alt="email icon" class="me-3">
                    <li class="nav-item">
                        <a href="mailto:support@adecom.edu.ng" class="nav-link link-body-emphasis p-0">
                            support@adecom.edu.ng
                        </a>
                        <a href="mailto:enquiries@adecom.edu.ng"
                            class="nav-link link-body-emphasis p-0">enquiries@adecom.edu.ng</a>
                    </li>
                    <img src="{{ asset('assets/img/tel.svg') }}" alt="telephone icon" class="ms-5 me-3">
                    <li class="nav-item">
                        <a href="tel:+2348000001000" class="nav-link link-body-emphasis p-0">+234 800 000 1000</a>
                        <a href="tel:+2347000000000" class="nav-link link-body-emphasis p-0">+234 700 000 0000</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container mt-5 mb-5">
        <p style="color: #29166F; ">Online Application for National Diploma Post UTME Full-time</p>
    </div>
    <main class="container">
        <div
            class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-white border border-light-subtle border-2 border-opacity-10">
            <form class="row g-3 needs-validation" novalidate>
                <div class="row mb-5">
                    <div class="mb-3">
                        <h4 class="fw-bold">Course details</h4>
                        <hr>
                    </div>
                    <div class="col-md-3">
                        <label for="jambNumber" class="form-label fw-medium">Jamb Number</label>
                        <input type="text" class="form-control bg-light" id="jambNumber"
                            placeholder="Enter Jamb Number" name="jamb_number" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Jamb number field required.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="jambYear" class="form-label fw-medium">Jamb Year</label>
                        <select class="form-select bg-light" id="jambYear" name="jamb_year" required>
                            <option selected disabled value="">Select year</option>
                            @for ($i = 1980; $i <= date('Y'); $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid jamb year.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="courseOfStudy" class="form-label fw-medium">Proposed Course of Study</label>
                        <select class="form-select bg-light" id="courseOfStudy" name="course_of_study" required>
                            <option selected disabled value="">Select Course</option>
                            @foreach ($courseOfStudies as $courseOfStudy)
                                <option value="{{ $courseOfStudy->name }}">{{ $courseOfStudy->display_name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid course of study.
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="mb-3">
                        <h4 class="fw-bold">Personal details</h4>
                        <hr>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="surname" class="form-label fw-medium">Surname</label>
                        <input type="text" class="form-control bg-light" id="surname" placeholder="Enter Surname"
                            name="surname" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Surname field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="firstName" class="form-label fw-medium">First Name</label>
                        <input type="text" class="form-control bg-light" id="firstName"
                            placeholder="Enter First Name" name="first_name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            First name field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="middleName" class="form-label fw-medium">Middle Name</label>
                        <input type="text" class="form-control bg-light" id="middleName"
                            placeholder="Enter Middle Name" name="middle_name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Middle name field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="email" class="form-label fw-medium">Email Address</label>
                        <input type="email" class="form-control bg-light" id="email"
                            placeholder="Enter Email Address" name="email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Middle name field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="gender" class="form-label fw-medium">Gender</label>
                        <select class="form-select bg-light" id="gender" name="gender" required>
                            <option selected disabled value="">Select Gender</option>
                            @foreach ($genders as $gender)
                                <option value="{{ $gender->name }}">{{ $gender->display_name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid gender.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="phoneNumber" class="form-label fw-medium">Phone Number</label>
                        <input type="tel" class="form-control bg-light" id="phoneNumber"
                            placeholder="Enter Phone Number" name="phone_number" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Phone number field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="nationality" class="form-label fw-medium">Nationality</label>
                        <select class="form-select bg-light" id="nationality" name="nationality" required>
                            <option selected disabled value="">Select Country</option>
                            @foreach ($nationalities as $nationality)
                                <option value="{{ $nationality->country_name }}">{{ $nationality->country_display_name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="state" class="form-label fw-medium">State</label>
                        <select class="form-select bg-light" id="state" name="state" required>
                            <option selected disabled value="">Select State</option>
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="address" class="form-label fw-medium">Permanent Home Address</label>
                        <input type="text" class="form-control bg-light" id="address"
                            placeholder="Enter Home Address" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Address field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="sponsorName" class="form-label fw-medium">Full Name of Sponsor</label>
                        <input type="text" class="form-control bg-light" id="sponsorName"
                            placeholder="Enter Full Name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Sponsor name field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="sponsorEmail" class="form-label fw-medium">Email Address of Sponsor</label>
                        <input type="text" class="form-control bg-light" id="sponsorEmail"
                            placeholder="Enter Email Address" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Sponsor email field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="relationship" class="form-label fw-medium">Relationship</label>
                        <input type="text" class="form-control bg-light" id="relationship"
                            placeholder="Enter Relationship" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Relationship field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="religion" class="form-label fw-medium">Religion</label>
                        <input type="text" class="form-control bg-light" id="religion"
                            placeholder="Enter Religion" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Religion field is required.
                        </div>
                    </div>
                    <div class="col-md-3 mb-5">
                        <label for="maritalStatus" class="form-label fw-medium">Marital Status</label>
                        <input type="text" class="form-control bg-light" id="maritalStatus"
                            placeholder="Enter Status" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Marital status field is required.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="day" class="form-label fw-medium">Date of Birth</label>
                        <div class="row g-3">
                            <div class="col-auto">
                                <select class="form-select bg-light" id="day" name="day" required>
                                    <option selected disabled value="">Day</option>
                                    @for ($i = 1; $i <= 31; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select bg-light" id="month" name="month" required>
                                    <option selected disabled value="">Month</option>
                                    @for ($i = 1; $i <= 12; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col-auto">
                                <select class="form-select bg-light" id="year" name="year" required>
                                    <option selected disabled value="">Year</option>
                                    @for ($i = 1980; $i <= date('Y'); $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid country.
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="mb-3">
                        <h4 class="fw-bold">Examination Taken</h4>
                        <hr>
                    </div>
                    <div class="col-md-3">
                        <label for="examinationType" class="form-label fw-medium">Examination Type</label>
                        <select class="form-select bg-light" id="examinationType" name="examination_type" required>
                            <option selected disabled value="">Select Examination</option>
                            @foreach ($examTypes as $examType)
                                <option value="{{ $examType->name }}">{{ $examType->display_name }}</option>
                            @endforeach
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid examination type.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="examinationYear" class="form-label fw-medium">Exam Year</label>
                        <select class="form-select bg-light" id="examinationYear" name="examination_year" required>
                            <option selected disabled value="">Select year</option>
                            @for ($i = 1990; $i <= date('Y'); $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                            @endfor
                        </select>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please select a valid exam year.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="examinationNumber" class="form-label fw-medium">Exam No.</label>
                        <input type="text" class="form-control bg-light" id="examinationNumber"
                            placeholder="Enter Exam No." required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Examination number field required.
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="mb-3">
                        <h4 class="fw-bold">First Sitting</h4>
                        <hr>
                    </div>
                    <div class="col-md-3">
                        <label for="subject" class="form-label fw-medium">Subject</label>
                        <input type="text" class="form-control bg-light" name="subject" id="subject"
                            placeholder="Enter Subject" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Subject field required.
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label for="grade" class="form-label fw-medium">Grade</label>
                        <input type="text" class="form-control bg-light" id="grade" name="grade" placeholder="Enter Grade"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Grade field required.
                        </div>
                    </div>
                    <div class="col-md-3 pt-5" id="addSubjectBtn">
                        <span class="m-0 p-0">
                            <img src="{{ asset('assets/img/gala_add.svg') }}" alt="email icon">
                            Add Subject
                        </span>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center">
                    <button class="btn" type="submit" style="background-color: #29166F; color: white;">Submit
                        Application</button>
                </div>
            </form>
        </div>
    </main>

    <div class="py-5 text-center">
        <p><img src="{{ asset('assets/img/copyright.svg') }}" alt="copyright"> 2023. All rights reserved | Developed
            by TECHiT </p>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous">
    </script>
    <script>
        (() => {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script>
        $('#nationality').change(function() {
            var selectedValue = $(this).val()
            var $state = $('#state');
            state.innerHTML = `<option selected disabled value="">Select State</option>`
            var states = {!! json_encode($states) !!}
            for (var key in states) {
                if (states.hasOwnProperty(key)) {
                    var element = states[key];
                    if (element.country_name == selectedValue) {
                        var option = document.createElement('option');
                        option.value = element.state_name;
                        option.textContent = element.state_display_name;
                        state.appendChild(option);
                    }
                }
            }
        });
    </script>
</body>

</html>
