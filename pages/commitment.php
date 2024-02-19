<?php include "../includes/header.php" ?>


<body>
    <?php include "../includes/navbar.php" ?>
    <?php include "../includes/heading.php";
    $ctr = new CommitmentController(); 
     $result = mysqli_fetch_array($ctr->index());
    ?>


    <div class="container" style="text-align: justify;">
        <div class="py-5">
            <p><?php echo $result['introduction'];?>

            <blockquote style="color: #00aadc;">
                <p><?php echo $result['emphasize'];?>.</p>

            </blockquote>

            <?php echo $result['body'];?>.</p>

        </div>
    </div>




    <?php include_once "../includes/footer.php" ?>
</body>



</html>