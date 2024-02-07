
<div class="container-fluid text-center text-white" <?php $current_path = $_SERVER['PHP_SELF'];

if (strpos($current_path, '/patrick_portfolio/pages/services') !== false) {
    echo 'id="heading-bg2"';
} elseif (strpos($current_path, '/patrick_portfolio/pages') !== false) {
    echo 'id="heading-bg1"';
}?>>
    <div style="padding-top:50px">
        <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/about.php'){ echo '<h1>About Us</h1>'; }elseif($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/commitment.php'){ echo '<h1>Our Commitment to Quality</h1>'; }elseif($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/careers.php'){ echo '<h1>Careers</h1>'; }elseif($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/contact.php'){ echo '<h1>Contact Us</h1>'; }elseif($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/big_data.php'){ echo '<h1>Big Data</h1>'; }elseif($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/data_analysis.php'){ echo '<h1>Data Analysis</h1>'; } elseif($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/datawarehouse.php'){ echo '<h1>Data Warehouse</h1>'; } ?>

    </div>

</div>