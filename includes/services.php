
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
$ctr2 = new ServicesController();
$services = $ctr2->index(); // Assuming index() method fetches services from the database
?>

<div class="container-fluid" style="background-color:rgb(227, 240, 243);">
    <div class="container py-4">
        <h1 class="text-center text-primary">Our Services</h1>
        <div class="row pt-1">
            <?php foreach ($services as $service) { ?>
                <div class="col-xs-12 col-12 col-md-4">
                    <div class="service-wrapper">
                        <h2><?php echo $service['title']; ?></h2>
                        <p class="service-text"><?php echo $service['body']; ?></p>
                        <a href="<?php echo $service['link']; ?>" class="read-more">Read More</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>


<!-- <div class="container-fluid" style="background-color:rgb(227, 240, 243);">
    <div class="container py-4">
        <h1 class="text-center text-primary">Our Services</h1>
        <div class="row pt-1">
            <div class="col-xs-12 col-12 col-md-4">

                <h2>Data Warehousing</h2>
                <p>For several organisations, the story is the same; data amasses swiftly, comes in several formats,
                    from several sources </p>
                <a href="">Read More</a>
            </div>
            <div class="col-xs-12 col-12 col-md-4">
                <h2>Analytics / BI</h2>
                <p>Consultants in SoftSkan will support you to turn your data into actionable relics by helping you
                    gain more insight into your data.</p>
                <a href="">Read More</a>
            </div>
            <div class="col-xs-12 col-12 col-md-4">
                <h2>Project Management</h2>
                <p>Your project is meant to be a temporary effort that meets your goals within defined resource
                    limits.</p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-12 col-md-4">

                <h2>Data Warehousing</h2>
                <p>For several organisations, the story is the same; data amasses swiftly, comes in several formats,
                    from several sources </p>
                <a href="">Read More</a>
            </div>
            <div class="col-xs-12 col-12 col-md-4">
                <h2>CRM and ERP Systems</h2>
                <p>Enterprise Resource Planning (ERP) and Customer Relationship Management (CRM)</p> <a href="">Read
                    More</a>
            </div>
            <div class="col-xs-12 col-12 col-md-4">
                <h2>Cloud Servicet</h2>
                <p>SoftSkan provides cloud services in using the best platforms in the Tech industry</p> <a href="">Read More</a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-12 col-md-4">

                <h2>Offshore Tech Resources</h2>
                <p>All offshore project will always be handled with a quality and experienced team</p> <a href="">Read More</a>
            </div>
            <div class="col-xs-12 col-12 col-md-4">
                <h2>Big Data</h2>
                <p>Big data has tremendous potentials to transform business processes, help us make more meaning out
                    of the events around us,</p> <a href="">Read More</a>
            </div>
            <div class="col-xs-12 col-12 col-md-4">
                <h2>IT / IS Consulting</h2>
                <p>SoftSkan is a business technology consultancy services provider. Our core service areas include
                    but are not limited to,

                </p>
                <a href="">Read More</a>
            </div>
        </div>
    </div>

</div> -->