<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../includes/header.php" ?>


<body>
    <?php include "../includes/navbar.php" ?>
    <?php include "../includes/heading.php"; 
    $ctr  = new ContactController();
    $ctr->store();   
    ?>


    <div class="container py-4" style="text-align: justify;">
        <h2 class="text-center">If you have any questions or want to know more,
            please don't hesitate to get in contact with us.</h1>

            <div class="row">
                <div class="col-sm-12 col-md-7">
                    <!-- Google Map Embed -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1227.2927955293374!2d-0.7719297110378652!3d52.03264679298438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48770009df5912eb%3A0xd939c1c0eeb73b8d!2sMilton%20Keynes%20MK9%201FH!5e0!3m2!1sen!2suk!4v1706190576382!5m2!1sen!2suk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-sm-12 col-md-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-primary">United Kingdom</h2>
                            <i class="fa-solid fa-location-dot"></i>&nbsp; 100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                            <i class="fa-solid fa-phone"></i>&nbsp; +44700000000 <br>
                            <i class="fa-solid fa-envelope"></i>&nbsp; <a href="mailto:info@portfolio.com">info@portfolio.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-primary">United Kingdom</h2>
                            <i class="fa-solid fa-location-dot"></i>&nbsp; 100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                            <i class="fa-solid fa-phone"></i>&nbsp; +44700000000 <br>
                            <i class="fa-solid fa-envelope"></i>&nbsp; <a href="mailto:info@portfolio.com">info@portfolio.com</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-primary">United Kingdom</h2>
                            <i class="fa-solid fa-location-dot"></i>&nbsp; 100 Avebury Boulevard, Milton Keynes, MK9 1FH <br>
                            <i class="fa-solid fa-phone"></i>&nbsp; +44700000000 <br>
                            <i class="fa-solid fa-envelope"></i>&nbsp; <a href="mailto:info@portfolio.com">info@portfolio.com</a>
                        </div>
                    </div>

                </div>
            </div>

    </div>
    <div class="container-fluid jumbotron">
        <div class="offset-md-3 col-md-6">
        <?php echo $ctr->success?>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                <div class="form-group">
                    <label for="">Full Name:</label>
                    <span class="text-danger"><?php echo $ctr->nameErr?></span>
                    <input type="text" class="form-control" placeholder="Enter your Full Name" name="name">
                </div>
                <div class="form-group">
                    <label for="">Email:</label>
                    <span class="text-danger"><?php echo $ctr->emailErr?></span>
                    <input type="text" class="form-control" placeholder="Enter your Email" name="email">
                </div>
                <div class="form-group">
                    <label for="">Subject:</label>
                    <span class="text-danger"><?php echo $ctr->subjectErr?></span>
                    <input type="text" class="form-control" placeholder="Enter your Subject" name="subject">
                </div>
                <div class="form-group">
                    <label for="">Message:</label>
                    <span class="text-danger"><?php echo $ctr->messageErr?></span>
                    <textarea name="message" id="" cols="10" rows="5" class="form-control"></textarea>
                </div>
                <input type="submit" name="send" value="Send" class="btn btn-info">
            </form>
        </div>
    </div>



    <?php include_once "../includes/footer.php" ?>
</body>



</html>