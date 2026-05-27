<?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<header>

    <nav class="navbar">

        <div class="nav-wrapper">

            <!-- LOGO -->

            <div class="logo">

                <a href="http://localhost/EGN_ConnectX/index.php">

                    <img src="Logo\EGN_main.jpg" alt="EGN CONNECT X" width="160" height="60" decoding="async">

                </a>

            </div>

            <!-- CENTER NAVIGATION -->

            <div class="nav-center">

                <a href="http://localhost/EGN_ConnectX/index.php" class="<?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">Home</a>
                <a href="http://localhost/EGN_ConnectX/about-summit.php" class="<?php echo $currentPage === 'about-summit.php' ? 'active' : ''; ?>">About Summit</a>
                <a href="http://localhost/EGN_ConnectX/Education_awards.php" class="<?php echo $currentPage === 'Education_awards.php' ? 'active' : ''; ?>">Awards</a>
                <a href="http://localhost/EGN_ConnectX/index.php#events">Events</a>
                <a href="http://localhost/EGN_ConnectX/index.php#visitors">Visitors</a>
                <a href="http://localhost/EGN_ConnectX/index.php#gallery">Gallery</a>
                <a href="http://localhost/EGN_ConnectX/contact-us.php" class="<?php echo $currentPage === 'contact-us.php' ? 'active' : ''; ?>">Contact</a>

            </div>

            <!-- RIGHT BUTTONS -->

            <div class="nav-right">

                <a href="http://localhost/EGN_ConnectX/EGN_bookstall.php" class="btn-uniform btn-stall <?php echo $currentPage === 'EGN_bookstall.php' ? 'active' : ''; ?>">

                    Book Your Stall

                </a>

                <a href="http://localhost/EGN_ConnectX/Register_EGN.php" class="btn-uniform cta-button <?php echo $currentPage === 'Register_EGN.php' ? 'active' : ''; ?>">

                    Register Now

                    <span class="cta-icon-wrapper">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">

                            <path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/>

                        </svg>

                    </span>

                </a>

            </div>

            <!-- MOBILE MENU TOGGLE -->

            <div class="menu-toggle" aria-label="Open navigation menu" role="button" tabindex="0">

                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>

            </div>

        </div>

        <!-- MOBILE NAVIGATION DRAWER -->
        <ul class="nav-links">
            <li><a href="http://localhost/EGN_ConnectX/index.php" class="nav-text <?php echo $currentPage === 'index.php' ? 'active' : ''; ?>">Home</a></li>
            <li><a href="http://localhost/EGN_ConnectX/about-summit.php" class="nav-text <?php echo $currentPage === 'about-summit.php' ? 'active' : ''; ?>">About Summit</a></li>
            <li><a href="http://localhost/EGN_ConnectX/Education_awards.php" class="nav-text <?php echo $currentPage === 'Education_awards.php' ? 'active' : ''; ?>">Awards</a></li>
            <li><a href="http://localhost/EGN_ConnectX/index.php#events" class="nav-text">Events</a></li>
            <li><a href="http://localhost/EGN_ConnectX/index.php#visitors" class="nav-text">Visitors</a></li>
            <li><a href="http://localhost/EGN_ConnectX/index.php#gallery" class="nav-text">Gallery</a></li>
            <li><a href="http://localhost/EGN_ConnectX/contact-us.php" class="nav-text <?php echo $currentPage === 'contact-us.php' ? 'active' : ''; ?>">Contact</a></li>
            <li><a href="http://localhost/EGN_ConnectX/privacy-policy.php" class="nav-text <?php echo $currentPage === 'privacy-policy.php' ? 'active' : ''; ?>">Privacy Policy</a></li>
            <li><a href="http://localhost/EGN_ConnectX/terms-and-conditions.php" class="nav-text <?php echo $currentPage === 'terms-and-conditions.php' ? 'active' : ''; ?>">Terms &amp; Conditions</a></li>
            <li><a href="http://localhost/EGN_ConnectX/cancellation-refund-policy.php" class="nav-text <?php echo $currentPage === 'cancellation-refund-policy.php' ? 'active' : ''; ?>">Cancellation Policy</a></li>
            <li><a href="http://localhost/EGN_ConnectX/EGN_bookstall.php" class="btn-uniform btn-stall <?php echo $currentPage === 'EGN_bookstall.php' ? 'active' : ''; ?>">Book Your Stall</a></li>
            <li>
                <a href="http://localhost/EGN_ConnectX/Register_EGN.php" class="btn-uniform cta-button <?php echo $currentPage === 'Register_EGN.php' ? 'active' : ''; ?>">
                    Register Now
                    <span class="cta-icon-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
                    </span>
                </a>
            </li>
        </ul>

    </nav>

</header>