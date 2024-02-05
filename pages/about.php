<?php include "../includes/header.php";

$ctr = new AboutController();
?>


<body>
    <?php include "../includes/navbar.php" ?>
    <?php include "../includes/heading.php" ?>


    <div class="container">
        <div class="row py-5" style="text-align: justify;">
            <div class="col-sm-12 col-md-8">
                <h1><?php 
               $result = mysqli_fetch_array($ctr->index());
               echo $result['title'];
               ?> </h1>
                <?php echo $result['body'];?>
            </div>
            <div class="col-sm-12 col-md-4 py-5">
                <img src="<?php echo $result['image'];?>" alt="" width="100%" height="100%">
            </div>
        </div>
    </div>


   
    <?php include_once "../includes/services.php" ?>
    <?php include_once "../includes/footer.php" ?>
</body>



</html>