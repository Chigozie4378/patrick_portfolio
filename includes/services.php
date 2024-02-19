<style>
    .service-wrapper {
        display: flex;
        flex-direction: column;
        height: 100%;
        /* Ensures the container takes up the entire height of its parent */
    }

    .service-text {
        margin-bottom: 10px;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
        height: 4.5em;
    }

    .read-more {
        font-size: inherit;
        text-decoration: none;
    }
</style>
<?php
$ctr3 = new ServicesController();
$services = $ctr3->index(); // Assuming index() method fetches services from the database
?>

<div class="container-fluid" style="background-color:rgb(227, 240, 243);" id="services">
    <div class="container py-4">
        <h1 class="text-center text-primary">Our Services</h1>
        <div class="row pt-1">
            <?php foreach ($services as $service) { ?>
                <div class="col-xs-12 col-12 col-md-4">
                    <div class="service-wrapper">
                        <h2><?php echo $service['title']; ?></h2>
                        <p class="service-text"><?php echo $service['description']; ?></p>
                        <a href="<?php echo $service['link']; ?>?service_id=<?php echo $service['id'];?>" class="read-more">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
