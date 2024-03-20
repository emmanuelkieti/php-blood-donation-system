<nav>
            <ul class="navigation">
                <li><a href="/bloodbank/index.php">HOME</a></li>
                <li><a href="/bloodbank/pages/about.php">ABOUT</a></li>
                <?php if(isset($_SESSION["user"]) || isset($_SESSION["facility_name"])){
                    if(isset($_SESSION["facility_name"])) {
                        echo "<li><a href='/bloodbank/pages/facility.php'>MY FACILITY</a></li>";
                        echo "<li><a href='/bloodbank/pages/facilities.php'>FACILITIES</a></li>";
                        echo "<li><a href='/bloodbank/pages/donation-appointments.php'>DONATION-APPOINTMENTS</a></li>";
                    }
                    if(isset($_SESSION["user"])) {
                        echo "<li><a href='/bloodbank/pages/book-donation.php'>BOOK-DONATION</a></li>";
                    }
                    echo "<li><a href='/bloodbank/includes/logout.php'>LOGOUT</a></li>";
                }
                else  {
                    echo "<li><a href='/bloodbank/pages/registration.php'>REGISTRATION</a></li>";
                    echo "<li><a href='/bloodbank/pages/login.php'>LOGIN</a></li>";
                }
                ?>
            </ul>
        </nav>
        <script src="/bloodbank/assets/js/index.js"></script>