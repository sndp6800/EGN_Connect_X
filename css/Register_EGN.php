<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Registration - EGN CONNECT X</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://egnindia.com/images/EGN.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="css/EGN_ConnectX.css">
    <style>
        /* --- Registration-page-specific styles --- */
        .radio-options-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px 10px;
            background: #fdfdfd;
            border: 1px solid #eee;
            padding: 15px;
            border-radius: 8px;
        }
        .radio-option {
            display: flex;
            align-items: center;
            font-size: 0.88rem;
            color: #444;
            cursor: pointer;
        }
        .radio-option input[type="radio"] {
            margin-right: 8px;
            width: 16px;
            height: 16px;
            accent-color: var(--brand-blue);
            cursor: pointer;
        }
        #educatorSubRow {
            background-color: #f0f7ff;
            border: 1px solid #d0e3ff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 18px;
            transition: all 0.4s ease;
        }
        #educatorSubRow label {
            display: block;
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--brand-purple);
            margin-bottom: 10px;
        }
        .hidden-row { display: none; }
        .image-card-wrapper {
            background: #ffffff;
            padding: 28px;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
            border-left: 5px solid var(--brand-blue);
        }
        .image-card-wrapper img {
            width: 100%;
            height: auto;
            border-radius: 12px;
            display: block;
        }
        .error-shake {
            border: 2px solid #ff0000 !important;
            background-color: #fff0f0 !important;
            animation: shake 0.4s;
        }
        @keyframes shake {
            0%   { transform: translateX(0); }
            25%  { transform: translateX(-5px); }
            75%  { transform: translateX(5px); }
            100% { transform: translateX(0); }
        }
        .iti { width: 100%; }
        @media (max-width: 600px) {
            .radio-options-grid { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body>

    <?php include 'EGN_ConnectX_header.php'; ?>

    <section class="page-header-intro">
        <h1>Visitor Registration</h1>
        <p>Join over 20,000 visitors at India's leading education summit. Fill in your details below to secure your free entry pass.</p>
    </section>

    <div class="container register-layout">

        <!-- LEFT: Registration Form -->
        <div class="left-column">
            <h3 class="section-heading">Registration Details</h3>
            <div class="form-card">

                <div id="pop_enq_success" class="log" style="display: none;">
                    <p>Great! <br>We have received your information. <br>We will shortly get back to you with your Details</p>
                </div>
                <div id="pop_enq_fail" class="log" style="display: none;">
                    <p>Oops!! Something Went Wrong Try Later!!!</p>
                </div>

                <form id="visitorForm" novalidate method="post" enctype="multipart/form-data" name="visitorForm">

                    <div class="form-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input id="v_name" name="name" type="text" class="form-control mandatory-field" placeholder="Enter Full Name">
                        </div>
                        <div class="input-group">
                            <label>Designation</label>
                            <select id="v_designation" name="designation" class="form-control mandatory-field">
                                <option value="" selected disabled>Select Designation</option>
                                <option value="Principal">Principal / Head of School</option>
                                <option value="Director">Director / Chairman</option>
                                <option value="Teacher">Teacher / Faculty</option>
                                <option value="Parent">Parent</option>
                                <option value="Student">Student</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Institution / Organisation</label>
                            <input id="v_org" name="organization" type="text" class="form-control mandatory-field" placeholder="Enter Institution/Organization Name">
                        </div>
                    </div>

                    <!-- CATEGORY -->
                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Category <span style="color:red">*</span></label>
                            <div class="radio-options-grid" id="categoryGroup">
                                <label class="radio-option"><input type="radio" name="category" value="Educator"> Educator</label>
                                <label class="radio-option"><input type="radio" name="category" value="Education Supplier"> Education Supplier</label>
                                <label class="radio-option"><input type="radio" name="category" value="Distributor"> Distributor</label>
                                <label class="radio-option"><input type="radio" name="category" value="Govt/Policy"> Govt / Policy Maker</label>
                                <label class="radio-option"><input type="radio" name="category" value="Consultant"> Consultant</label>
                                <label class="radio-option"><input type="radio" name="category" value="NGO"> NGO</label>
                            </div>
                        </div>
                    </div>

                    <!-- EDUCATOR SUB CATEGORY (shown conditionally) -->
                    <div class="hidden-row" id="educatorSubRow">
                        <label>Educator Type <span style="color:red">*</span></label>
                        <div class="radio-options-grid" id="eduSubGroup" style="grid-template-columns: repeat(3, 1fr);">
                            <label class="radio-option"><input type="radio" name="educator_type" value="Early Learning"> Early Learning</label>
                            <label class="radio-option"><input type="radio" name="educator_type" value="K12/School"> K12 / School</label>
                            <label class="radio-option"><input type="radio" name="educator_type" value="Higher Education"> Higher Education</label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Mobile Number</label>
                            <input id="mobile_code" name="phone" type="tel" class="form-control mandatory-field" placeholder="Enter Mobile Number">
                        </div>
                        <div class="input-group">
                            <label>Email Address</label>
                            <input id="v_email" name="email" type="email" class="form-control mandatory-field" placeholder="Enter Email Address">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Country</label>
                            <select id="v_country" name="country" class="form-control mandatory-field">
                                <option value="" disabled selected>Select Country</option>
                                <option value="India">India</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>State</label>
                            <select id="v_state" name="state" class="form-control mandatory-field">
                                <option value="" disabled selected>Select State</option>
                                <option>Maharashtra</option>
                                <option>Delhi</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>City</label>
                            <select id="v_city" name="city" class="form-control mandatory-field">
                                <option value="" disabled selected>Select City</option>
                                <option>Mumbai</option>
                                <option>Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Products of Interest</label>
                            <input id="v_products" name="products_interest" type="text" class="form-control" placeholder="E.g. Smart Boards, ERP Software...">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Comments / Queries</label>
                            <textarea id="v_comments" name="comments" class="form-control" placeholder="Any specific requirements..."></textarea>
                        </div>
                    </div>

                    <!-- Privacy Policy -->
                    <div class="form-row">
                        <div class="input-group full-width">
                            <div style="display:flex; gap:10px; align-items:flex-start;">
                                <input type="checkbox" id="policy" class="mandatory-check" style="margin-top:5px; flex-shrink:0;">
                                <label for="policy" class="privacy-text">
                                    <strong style="color:var(--brand-red);">Privacy Policy *</strong><br>
                                    By filling your correct information in the above form, you agree to receive communications and updates on your contact details about the EGN Connect X exhibition and other initiatives from EGN India Association.
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Captcha -->
                    <div class="form-row">
                        <div class="input-group">
                            <label>3 + 2 = ?</label>
                            <input id="v_captcha" name="captcha" type="text" class="form-control mandatory-field" placeholder="Answer">
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">REGISTER NOW →</button>

                    <p class="gdpr-text">
                        At EGN India, we are committed to protecting and respecting your privacy. We hold, as with most businesses, some personal information about people who may be interested in our products and services. By voluntarily providing us with your personal data by registering for one of our events, subscribing one of our publications or using our website, you are deemed to have agreed to the terms of this Privacy Policy. To know more about our GDPR compliant privacy policy, please write to us at <a href="mailto:enquiry@egnindia.com" style="color:var(--brand-blue);">enquiry@egnindia.com</a>.
                    </p>

                </form>
            </div>
        </div>

        <!-- RIGHT: Event Image -->
        <div class="right-column">
            <h3 class="section-heading">Event Highlights</h3>
            <div class="image-card-wrapper">
                <img src="Images/EGN_experience_image.png" alt="EGN Connect X Event Highlights">
            </div>
        </div>

    </div>

    <?php include 'EGN_ConnectX_footer.php'; ?>

    <script src="https://egnindia.com/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <script>
        // Phone Input
        const input = document.querySelector("#mobile_code");
        if (input) {
            window.intlTelInput(input, {
                initialCountry: "in",
                separateDialCode: true,
                preferredCountries: ["in", "us", "uk", "ae"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
        }

        // Mobile Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
            navLinks.addEventListener('click', (e) => {
                if (e.target.tagName === 'A') navLinks.classList.remove('active');
            });
        }
    </script>

    <script>
        function isValidEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(String(email).trim());
        }

        function isValidPhone(phone) {
            const digits = String(phone).replace(/\D/g, "");
            return digits.length >= 7 && digits.length <= 15;
        }

        function fail(msg, el) {
            alert(msg);
            if (el) el.focus();
            return false;
        }

        $(document).ready(function () {

            // Show/Hide Educator sub-category
            $(document).on("change", "input[name='category']", function () {
                const cat = $("input[name='category']:checked").val();
                if (cat === "Educator") {
                    $("#educatorSubRow").removeClass("hidden-row");
                } else {
                    $("#educatorSubRow").addClass("hidden-row");
                    $("input[name='educator_type']").prop("checked", false);
                }
            });

            // Form Submit
            $("#visitorForm").on("submit", function (e) {
                e.preventDefault();

                const name          = $("#v_name").val().trim();
                const designation   = $("#v_designation").val();
                const organization  = $("#v_org").val().trim();
                const category      = $("input[name='category']:checked").val() || "";
                const educator_type = $("input[name='educator_type']:checked").val() || "";
                const phone         = $("#mobile_code").val().trim();
                const email         = $("#v_email").val().trim();
                const country       = $("#v_country").val();
                const state         = $("#v_state").val();
                const city          = $("#v_city").val();
                const products_interest = $("#v_products").val().trim();
                const comments      = $("#v_comments").val().trim();
                const policy        = $("#policy").is(":checked");
                const captcha       = $("#v_captcha").val().trim();

                if (!name)           return fail("Please enter your name.", $("#v_name")[0]);
                if (!designation)    return fail("Please select your designation.", $("#v_designation")[0]);
                if (!organization)   return fail("Please enter Institution / Organisation.", $("#v_org")[0]);
                if (!category)       return fail("Please select a category.", $("#categoryGroup")[0]);
                if (category === "Educator" && !educator_type)
                                     return fail("Please select Educator Type.", $("#eduSubGroup")[0]);
                if (!phone)          return fail("Please enter mobile number.", $("#mobile_code")[0]);
                if (!isValidPhone(phone))
                                     return fail("Please enter a valid mobile number.", $("#mobile_code")[0]);
                if (!email)          return fail("Please enter email address.", $("#v_email")[0]);
                if (!isValidEmail(email))
                                     return fail("Please enter a valid email address.", $("#v_email")[0]);
                if (!country)        return fail("Please select country.", $("#v_country")[0]);
                if (!state)          return fail("Please select state.", $("#v_state")[0]);
                if (!city)           return fail("Please select city.", $("#v_city")[0]);
                if (!policy)         return fail("Please accept Privacy Policy.", $("#policy")[0]);
                if (!captcha)        return fail("Please answer the captcha.", $("#v_captcha")[0]);
                if (String(captcha).replace(/\s/g, "") !== "5")
                                     return fail("Captcha answer is incorrect.", $("#v_captcha")[0]);

                const payload = {
                    formtype:        "visitor_registration",
                    name:            name,
                    designation:     designation,
                    organization:    organization,
                    category:        category,
                    educator_type:   educator_type,
                    phone:           phone,
                    email:           email,
                    country:         country,
                    state:           state,
                    city:            city,
                    products_interest: products_interest,
                    comments:        comments
                };

                const $btn = $("#visitorForm button[type='submit']");
                $btn.prop("disabled", true).text("Submitting...");

                $.ajax({
                    url: "https://egnindia.com/postformdata.php",
                    type: "POST",
                    data: $.param(payload),
                    success: function (data) {
                        const resp = String(data).trim().toLowerCase();
                        if (resp === "ok") {
                            $("#visitorForm")[0].reset();
                            $("#educatorSubRow").addClass("hidden-row");
                            $("input[name='educator_type']").prop("checked", false);
                            if ($("#pop_enq_success").length) $("#pop_enq_success").show();
                            else alert("Registered successfully.");
                        } else {
                            if ($("#pop_enq_fail").length) $("#pop_enq_fail").show();
                            else alert("Error. Please try again.");
                        }
                    },
                    error: function () {
                        if ($("#pop_enq_fail").length) $("#pop_enq_fail").show();
                        else alert("Network error. Please try again.");
                    },
                    complete: function () {
                        $btn.prop("disabled", false).text("REGISTER NOW →");
                    }
                });
            });
        });
    </script>

</body>
</html>
