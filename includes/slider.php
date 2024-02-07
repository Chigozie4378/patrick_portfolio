<?php
$ctr2 = new CarouselController();
$select2 = $ctr2->index();
$carousel_items = []; // Initialize an array to store carousel items

// Fetch all rows from the result set and store them in an array
while ($result2 = mysqli_fetch_array($select2)) {
    $carousel_items[] = $result2;
}
?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php foreach ($carousel_items as $key => $item) { ?>
            <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $key ?>" <?php echo ($key === 0 ? 'class="active"' : '') ?>></li>
        <?php } ?>
    </ol>
    <div class="carousel-inner text-success">
        <?php foreach ($carousel_items as $key => $item) { ?>
            <div class="carousel-item <?php echo ($key === 0 ? 'active' : '') ?>">
                <img src="<?php echo $item['image2'] ?>" class="d-block w-100" height="500" alt="...">
                <div class="carousel-caption d-block">
                    <h5><?php echo $item['title'] ?></h5>
                </div>
            </div>
        <?php } ?>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>
