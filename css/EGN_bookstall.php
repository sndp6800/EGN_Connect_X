<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Your Stall - EGN CONNECT X</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://egnindia.com/images/EGN.png" />
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- International Telephone Input CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
    <link rel="stylesheet" href="css/EGN_ConnectX.css">
</head>
<body>

    <!-- ============================= -->
    <!-- HEADER INCLUDE                -->
    <!-- ============================= -->
    <?php include 'EGN_ConnectX_header.php'; ?>

    <section class="page-header-intro">
        <h1>Book Your Stall</h1>
        <p>Secure your spot at EGN CONNECT X and showcase your brand to India's top educators, investors, and school leaders. Fill in the details below to begin your reservation.</p>
    </section>

    <div class="container">
        <!-- FORM COLUMN -->
        <div class="left-column">
            <h3 class="section-heading">STALL ENQUIRY FORM</h3>
            <div class="form-card">
                <form id="bookingForm">
                    <div id="pop_enq_success" class="log" style="display: none;">
                        <p>Great! <br />We have received your information. <br />We will shortly get back to you with your Details</p>
                    </div>
                    <div id="pop_enq_fail" class="log" style="display: none;">
                        <p>Oops!! Something Went Wrong Try Later!!!</p>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Name</label>
                            <input id="full_name" name="name" type="text" class="form-control" placeholder="Full Name" required>
                        </div>
                        <div class="input-group">
                            <label>Designation</label>
                            <select id="designation" name="designation" class="form-control" required>
                                <option value="" disabled selected>Select Designation</option>
                                <option value="Director">Director</option>
                                <option value="Manager">Manager</option>
                                <option value="Sales Head">Sales Head</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Mobile Number</label>
                            <input id="mobile_code" name="phone" type="tel" class="form-control" placeholder="Mobile Number" required>
                        </div>
                        <div class="input-group">
                            <label>Email Address</label>
                            <input id="email" name="email" type="email" class="form-control" placeholder="Email Address" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Institution / Organization</label>
                            <input id="organization" name="organization" type="text" class="form-control" placeholder="Company / School Name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Country</label>
                            <select id="country" name="country" class="form-control" required>
                                <option value="" selected disabled>Select Country</option>
                                <option value="IN">India</option>
                                <option value="US">USA</option>
                                <option value="GB">UK</option>
                                <option value="AU">Australia</option>
                                <option value="CA">Canada</option>
                                <option value="AE">UAE</option>
                                <option value="SG">Singapore</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>State</label>
                            <input id="state" name="state" type="text" class="form-control" placeholder="State/Region">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group">
                            <label>Pincode</label>
                            <input type="text" id="pincode" name="pincode" class="form-control" placeholder="Enter Pincode" onkeyup="fetchLocation()">
                            <small id="pincode-msg" style="color:#666; font-size:0.75rem; margin-top:2px;">Detects details for India, USA, etc.</small>
                        </div>
                        <div class="input-group">
                            <label>City</label>
                            <input type="text" id="city" name="city" class="form-control" placeholder="City">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="input-group full-width">
                            <label>Message</label>
                            <textarea id="message" name="message" class="form-control" placeholder="Your requirements..." required></textarea>
                        </div>
                    </div>

                    <!-- Privacy Policy -->
                    <div class="form-row">
                        <div class="input-group full-width">
                            <div style="display:flex; gap:10px; align-items:flex-start;">
                                <input id="consent" name="consent" type="checkbox" required style="margin-top:5px; flex-shrink:0;">
                                <span class="privacy-text">
                                    By filling your correct information in the above form, you agree to receive communications and updates on your contact details about the EGN Connect X exhibition and other initiatives from EGN India Association.
                                </span>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="submit-btn">SUBMIT ENQUIRY â†’</button>
                    
                    <!-- GDPR Text -->
                    <p class="gdpr-text">
                        At EGN India, we are committed to protecting and respecting your privacy. We hold, as with most businesses, some personal information about people who may be interested in our products and services. By voluntarily providing us with your personal data by registering for one of our events, subscribing one of our publications or using our website, you are deemed to have agreed to the terms of this Privacy Policy. To know more about our GDPR compliant privacy policy, please write to us at <a href="mailto:enquiry@egnindia.com" style="color:var(--brand-blue);">enquiry@egnindia.com</a>.
                    </p>
                </form>
            </div>
        </div>

        <div class="right-column exhibitors-panel">
            <div class="section-header exhibitors-header">
                <h2>OUR PREVIOUS PARTNERS</h2>
                <p>Explore the companies that have showcased at EGN CONNECT X in recent editions.</p>
            </div>
            <div class="bookstall-exhibitors-container">
                <div class="exhibitors-grid">
                    <div class="exhibitor-logo"><img src="Logo/Samsung.jpeg" alt="Samsung" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Credila.jpeg" alt="Credila" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Upgrade.jpeg" alt="Upgrade" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Courceera.jpeg" alt="Courceera" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Ashok_Leland.jpeg" alt="Ashok_Leland" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Study.jpeg" alt="Studynlearn" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Gitam.jpeg" alt="Gitam" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/melzo.jpeg" alt="melzo" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Stemrobo.jpeg" alt="Stemrobo" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Kewaunee.jpeg" alt="Kewaunee" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Yamaha.jpeg" alt="Yamaha" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Meritto.jpeg" alt="Meritto" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Codetantra.jpeg" alt="Codetantra" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/OMO.jpeg" alt="OMO" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/SRM_University.jpeg" alt="SRM_University" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/VIR_SOFTECH.jpeg" alt="VIR_SOFTECH" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/SchoolKnot.jpeg" alt="SchoolKnot" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/I_Gauge.jpeg" alt="I_Gauge" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Tata.jpeg" alt="Tata" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Rocksport.jpeg" alt="Rocksport" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Nature_Nurture.jpeg" alt="Nature_Nurture" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/RFL_Academy.jpeg" alt="RFL_Academy" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/EI.jpeg" alt="EI" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Lead_Group.jpeg" alt="Lead_Group" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Vishwakarma.jpeg" alt="Vishwakarma" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Mafatlal.jpeg" alt="Mafatlal" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Tru.jpeg" alt="Tru" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Marcos_Quay.jpeg" alt="Marcos_Quay" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Mesa.jpeg" alt="Mesa" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Careers_and_me.jpeg" alt="Careers_and_me" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Allen.jpeg" alt="Allen" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Val_ED.jpeg" alt="Val_ED" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Greatify.jpeg" alt="Greatify" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Eduolus.jpeg" alt="Eduolus" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Adventure.jpeg" alt="Adventure" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Kpro.jpeg" alt="Kpro" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Gyan_Grove.jpeg" alt="Gyan_Grove" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Nano.jpeg" alt="Nano" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Respond_right.jpeg" alt="Allen" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Alumnatis.jpeg" alt="Alumnatis" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Amira.jpeg" alt="Codetantra" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Ashish_Edutours.jpeg" alt="EDU" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Catalyzer.jpeg" alt="Eduolus" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/EDU.jpeg" alt="I Gauge" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Eduolus-1.jpeg" alt="Lead Group" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Enlit_Kids.jpeg" alt="Learntech" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Jobs.jpeg" alt="LogIQids" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Learntech.jpeg" alt="Nature Nurture" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/LogIQids.jpeg" alt="SchoolKnot" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Mentora.jpeg" alt="Vikas Mats" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Saansh_Learning.jpeg" alt="Ashish Edutours" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/School_talkz.jpeg" alt="Ashok Leland" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/SchoolKnot.jpeg" alt="Brainy Wood" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Vikas_Mats.jpeg" alt="Catalyzer" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/X_Y.jpeg" alt="Gitam" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Agorare.jpeg" alt="Golden Sparrow" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Bonton.jpeg" alt="Jupsoft" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Brainy_Wood.jpeg" alt="Kpro" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Brians.jpeg" alt="Mafatlal" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Careers_and_me.jpeg" alt="Mesa" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/CLXX.jpeg" alt="My Classboard" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Nano.jpeg" alt="Nano" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Diamond.jpeg" alt="Rocksport" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Easy_Test.jpeg" alt="Saansh Learning" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/EI.jpeg" alt="Samsung" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Extraaedge.jpeg" alt="School talkz" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Flitelabs.jpeg" alt="Skitii" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Golden_Sparrow.jpeg" alt="Val - ED" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Gyan_Grove.jpeg" alt="X and Y" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Jain.jpeg" alt="Bonton" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Jobs_in_edu.jpeg" alt="CLXX" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Jupsoft.jpeg" alt="Diamond" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Jupsoft-1.jpeg" alt="Easy Test" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/K.jpeg" alt="EI" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Log.jpeg" alt="Extraaedge" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Mike.jpeg" alt="Mike" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Pluxee.jpeg" alt="Smily Kiddo" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Ragav.jpeg" alt="Unipro" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Scribble.jpeg" alt="Zoomer" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Security.jpeg" alt="Agorare" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Skitii.jpeg" alt="Courceera" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Smily Kiddo.jpeg" alt="Credila" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Sonacore.jpeg" alt="Flitelabs" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Unipro.jpeg" alt="K" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Ved.jpeg" alt="meritto" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Vels.jpeg" alt="Pluxee" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Wonderla.jpeg" alt="Security" loading="lazy" decoding="async"></div>
                <div class="exhibitor-logo"><img src="Logo/Zoomer.jpeg" alt="Zoomer" loading="lazy" decoding="async"></div>
            </div>
            <div style="text-align: center; margin-top: 30px; font-weight: 700; color: #555; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; gap: 10px;">
                <span>&amp; MANY MORE...</span>
                <span style="font-size: 2rem; color: var(--brand-blue); line-height: 0;"></span>
            </div>
        </div>
    </div>
</div>

    <!-- ============================= -->
    <!-- FOOTER INCLUDE                -->
    <!-- ============================= -->
    <?php include 'EGN_ConnectX_footer.php'; ?>

    <script src="https://egnindia.com/js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    
    <script>
      // Email validation
      function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(String(email).trim());
      }
      // Phone validation
      function isValidPhone(phone) {
        const digits = String(phone).replace(/\D/g, "");
        return digits.length >= 7 && digits.length <= 15;
      }
      // Helper: show error + focus
      function fail(msg, el) {
        alert(msg);
        if (el) el.focus();
        return false;
      }

      $(document).ready(function () {
        $("#bookingForm").on("submit", function (e) {
          e.preventDefault();

          const name = $("#full_name").val().trim();
          const designation = $("#designation").val();
          const phone = $("#mobile_code").val().trim();
          const email = $("#email").val().trim();
          const organization = $("#organization").val().trim();
          const country = $("#country").val();
          const state = $("#state").val().trim();
          const pincode = $("#pincode").val().trim();
          const city = $("#city").val().trim();
          const message = $("#message").val().trim();
          const consent = $("#consent").is(":checked");

          // Validation
          if (!name) return fail("Please enter your name.", $("#full_name")[0]);
          if (!designation) return fail("Please select your designation.", $("#designation")[0]);
          if (!phone) return fail("Please enter your mobile number.", $("#mobile_code")[0]);
          if (!isValidPhone(phone)) return fail("Please enter a valid mobile number.", $("#mobile_code")[0]);
          if (!email) return fail("Please enter your email address.", $("#email")[0]);
          if (!isValidEmail(email)) return fail("Please enter a valid email address.", $("#email")[0]);
          if (!organization) return fail("Please enter Institution / Organization.", $("#organization")[0]);
          if (!country) return fail("Please select your country.", $("#country")[0]);
          if (!message) return fail("Please enter your message.", $("#message")[0]);
          if (!consent) return fail("Please accept the privacy policy to continue.", $("#consent")[0]);

          const payload = {
            formtype: "booking_enquiry",
            name: name,
            designation: designation,
            expophone: phone,
            email: email,
            organization: organization,
            country: country,
            state: state,
            pincode: pincode,
            city: city,
            message: message
          };

          const $btn = $("#bookingForm button[type='submit']");
          $btn.prop("disabled", true).text("Submitting...");

          $.ajax({
            url: "https://egnindia.com/postformdata.php",
            type: "POST",
            data: $.param(payload),
            success: function (data) {
              const resp = String(data).trim().toLowerCase();
              if (resp === "ok") {
                $("#bookingForm")[0].reset();
                if ($("#pop_enq_success").length) $("#pop_enq_success").show();
                else alert("Enquiry submitted successfully.");
              } else {
                if ($("#pop_enq_fail").length) $("#pop_enq_fail").show();
                else alert("Something went wrong. Please try again.");
              }
            },
            error: function () {
              if ($("#pop_enq_fail").length) $("#pop_enq_fail").show();
              else alert("Network error. Please try again.");
            },
            complete: function () {
              $btn.prop("disabled", false).text("SUBMIT ENQUIRY â†’");
            }
          });
        });
      });
    </script>

    <script>
        // 1. Mobile Input
        const input = document.querySelector("#mobile_code");
        if(input){
            window.intlTelInput(input, {
                initialCountry: "in",
                separateDialCode: true,
                preferredCountries: ["in", "us", "uk", "ae"],
                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
            });
        }

        // 2. Global Auto-Detect Location
        async function fetchLocation() {
            const pincode = document.getElementById('pincode').value.trim();
            const msg = document.getElementById('pincode-msg');
            const stateField = document.getElementById('state');
            const cityField = document.getElementById('city');
            const countryField = document.getElementById('country');
            
            if(pincode.length >= 5) {
                stateField.classList.add('detecting');
                cityField.classList.add('detecting');
                msg.textContent = "Checking...";

                let selectedCode = countryField.value;
                let countryCode = 'in'; 
                if(selectedCode) {
                    countryCode = selectedCode.toLowerCase();
                } else {
                    if(pincode.length === 5) countryCode = 'us';
                    else if(pincode.length === 6) countryCode = 'in';
                }

                if(countryCode === 'ae') {
                     msg.textContent = "Please fill UAE address manually.";
                     stateField.classList.remove('detecting');
                     cityField.classList.remove('detecting');
                     return;
                }

                try {
                    const response = await fetch(`https://api.zippopotam.us/${countryCode}/${pincode}`);
                    if(response.ok) {
                        const data = await response.json();
                        const place = data.places[0];
                        countryField.value = data['country abbreviation'].toUpperCase();
                        stateField.value = place["state"];
                        cityField.value = place["place name"];
                        stateField.classList.replace('detecting','detected');
                        cityField.classList.replace('detecting','detected');
                        msg.style.color = "green"; 
                        msg.textContent = "Location found!";
                    } else { throw new Error(); }
                } catch {
                     msg.textContent = "Not detected. Fill manually."; 
                     msg.style.color = "#888";
                     stateField.classList.remove('detecting');
                     cityField.classList.remove('detecting');
                }
            }
        }
        
        // Menu Toggle
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        if(menuToggle && navLinks) {
            menuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
            });
            navLinks.addEventListener('click', (e) => {
                if (e.target.tagName === 'A') navLinks.classList.remove('active');
            });
        }
    </script>
</body>
</html>
