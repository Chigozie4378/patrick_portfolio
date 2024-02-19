<style>
    /* Custom styling */
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
    }

    .footer-column {
        margin-bottom: 20px;
    }

    .footer-column h3 {
        color: #fff;
    }

    .footer-column ul {
        padding: 0;
        list-style: none;
        margin: 0;
    }

    .footer-column ul li {
        margin-bottom: 10px;
    }

    .footer-column ul li a {
        color: #fff;
        text-decoration: none;
    }

    .footer-column ul li a:hover {
        text-decoration: underline;
    }

    .latest-projects img {
        width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
</style>
<div class="container-fluid text-center text-white" <?php
                                                    $current_path = $_SERVER['PHP_SELF'];

                                                    if (strpos($current_path, '/patrick_portfolio/pages/services') !== false) {
                                                        echo 'id="contact-bg2"';
                                                    } elseif (strpos($current_path, '/patrick_portfolio/pages') !== false) {
                                                        echo 'id="contact-bg1"';
                                                    } else {
                                                        echo 'id="contact-bg"';
                                                    }
                                                    ?>>
    <div style="padding-top:100px">
        <h1>Are you interested?</h1>
        <a href="" class="btn btn-outline-light">Contact Us</a>
        <div style="font-size: 30px;">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-google"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
        </div>

    </div>
</div>
<!-- <footer style="background-color: black; height:auto">
    <div class="container-fluid pb-4">
        <div class="container">
            <div class="row text-white" style="padding:60px 0px 0px 0px">
                <div class="col-sm-12 col-md-4">
                    <h2>United Kingdom</h2>
                    <i class="fa-solid fa-location-dot"></i>&nbsp;
                    100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                    <i class="fa-solid fa-phone"></i>&nbsp;
                    +44700000000 <br>
                    <i class="fa-solid fa-envelope"></i>&nbsp;
                    <a href="">info@patrick_portfolio.com</a>
                    <h3>About Us</h3>
                <p>Brief overview of the company's mission and values.</p>
                <ul>
                    <li>Address: 123 Company St, City</li>
                    <li>Phone: 123-456-7890</li>
                    <li>Email: info@example.com</li>
                </ul>
                </div>
                
                <div class="col-sm-12 col-md-4">
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr style="border-color: white;">
        <div style="color: white; text-align:center">patrick_Portfolio &copy; Copyright <?php echo date('Y') ?>. All Right Reserve. <a href="">PrivatePolicy</a></div>
    </div>


</footer> -->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4 footer-column">
                <h2>United Kingdom</h2>
                <i class="fa-solid fa-location-dot"></i>&nbsp;
                100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                <i class="fa-solid fa-phone"></i>&nbsp;
                +44700000000 <br>
                <i class="fa-solid fa-envelope"></i>&nbsp;
                <a href="">info@patrick_portfolio.com</a>

             
            </div>
            <div class="col-md-4 footer-column">
            <ul class="list-inline">
            <h3>Socials</h3>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                </ul>
                
               
            </div>
            <div class="col-md-4 footer-column">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="/patrick_portfolio/pages/about.php">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="/patrick_portfolio/pages/careers.php">Careers</a></li>
                    <li><a href="/patrick_portfolio/pages/commitment.php">Commitment</a></li>
                    <li><a href="/patrick_portfolio/pages/contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>
    <hr style="border-color: white;">
    <div style="color: white; text-align:center">patrick_Portfolio &copy; Copyright <?php echo date('Y') ?>. All Right Reserve. <a href="">PrivatePolicy</a></div>
</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>