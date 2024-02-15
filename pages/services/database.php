<?php include "../../includes/header.php" ?>
<?php $ctr = new ServicesController(); ?>
<?php $select_service = $ctr->show(); ?>
<?php $service_result = mysqli_fetch_array($select_service); ?>
<body>
<?php include "../../includes/navbar.php" ?>
<div class="container-fluid text-center text-white" id="heading-bg2">
            <div style="padding-top:50px">
                <h1 style="text-transform: capitalize;">Database</h1>
    
            </div>
    
             </div>
<div class="container" style="text-align: justify;">
<div class="py-5">
 <?php echo $service_result['introduction']?>
<blockquote style="color: #00aadc;">
 <?php echo $service_result['emphasize']?>
</blockquote>
 <?php echo $service_result['body']?>
</div>
</div>
<?php include_once "../../includes/footer.php" ?>
</body>
</html>
