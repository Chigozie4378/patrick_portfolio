<?php include "./includes/header.php";
$ctr = new HomeController();


?>


<body>
    <?php include "./includes/navbar.php" ?>
    <?php include "./includes/slider.php" ?>


    <div class="container body1">
        <h4 class="text-center">
            <?php 
               $result = mysqli_fetch_array($ctr->index());
               echo $result['body'];
               ?> 
        </h4>
    </div>

    <?php include "./includes/services.php" ?>
   
    <div style="background-color:rgb(81, 81, 193)" class="p-5 text-white">
        <div class="container">
            <p>
              
            Our mission is to be a trusted partner and a reference point for companies dealing with Information &
                Communication Technology (ICT) related issues, especially in the areas of big data, data/information
                management; business intelligence; technology architecture; technology project management and technology
                consulting services.</p>
        </div>
    </div>
    <hr class="my-4">
    </div>
    <div class="container">
        <div class="row">
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-3.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-2.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-18.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-4.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-4.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-6.jpg" alt="" width="150"
                    height="90"></div>
        </div>
        <div class="row">
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-5.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-7.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-9.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-10.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-11.jpg" alt="" width="150"
                    height="90"></div>
        </div>
        <div class="row">
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-12.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-13.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-14.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-15.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-16.jpg" alt="" width="150"
                    height="90"></div>
            <div class=" col-6 col-md-2"><img src="./assets/images/logo_img/logo-cert-17.jpg" alt="" width="150"
                    height="90"></div>
        </div>
    </div>
    <?php include_once "./includes/footer.php" ?>
</body>



</html>