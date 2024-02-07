


<div class="container-fluid text-center text-white" <?php  
$current_path = $_SERVER['PHP_SELF'];

if (strpos($current_path, '/patrick_portfolio/pages/services') !== false) {
    echo 'id="contact-bg2"';
} elseif (strpos($current_path, '/patrick_portfolio/pages') !== false) {
    echo 'id="contact-bg1"';
} else {
    echo 'id="contact-bg"';
}
?> >
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
<footer style="background-color: black; height:auto">
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
                </div>
                <div class="col-sm-12 col-md-4">
                    <h2>United Kingdom</h2>
                    <i class="fa-solid fa-location-dot"></i>&nbsp;
                    100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                    <i class="fa-solid fa-phone"></i>&nbsp;
                    +44700000000 <br>
                    <i class="fa-solid fa-envelope"></i>&nbsp;
                    <a href="">info@patrick_portfolio.com</a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <h2>United Kingdom</h2>
                    <i class="fa-solid fa-location-dot"></i>&nbsp;
                    100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                    <i class="fa-solid fa-phone"></i>&nbsp;
                    +44700000000 <br>
                    <i class="fa-solid fa-envelope"></i>&nbsp;
                    <a href="">info@patrick_portfolio.com</a>
                </div>
            </div>
        </div>
        <hr style="border-color: white;">
        <div style="color: white; text-align:center">patrick_Portfolio &copy; Copyright <?php echo date('Y') ?>. All Right Reserve. <a href="">PrivatePolicy</a></div>
    </div>


</footer>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>