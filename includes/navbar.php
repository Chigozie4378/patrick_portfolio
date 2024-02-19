<?php 
$ctr_navbar = new NavbarController();
?>
 <!-- Navigation   -->
 <nav class="navbar navbar-expand-md navbar-light sticky-top" style="background-color: rgb(255, 255, 255);">
        <div class="container-fluid">

            <!-- Logo on the top left -->
            <a class="navbar-brand" href="#"><img src="<?php
            $current_path = $_SERVER['PHP_SELF'];

            if (strpos($current_path, '/patrick_portfolio/pages/services') !== false) {
                echo '../../assets/images/logo.jpg';
            } elseif (strpos($current_path, '/patrick_portfolio/pages') !== false) {
                echo '../assets/images/logo.jpg';
            } else {
                // If it's not in '/patrick_portfolio/'
                echo './assets/images/logo.jpg';
            }?> " height="40" width="40" alt=""></a>

            <!-- Toggler/collapsible Button on the top right -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/index.php'){ echo 'active'; } ?>">
                        <a class="nav-link" href="/patrick_portfolio/index.php">Home</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/about.php'){ echo 'active'; } ?>">
                        <a class="nav-link" href="/patrick_portfolio/pages/about.php">About Us</a>
                    </li>
                    
                    
                    <?php
                    // Assuming $services is an array of services fetched from the database with fields 'title' and 'link'
                    $services = $ctr_navbar->navbarIndex(); // Assuming $ctr->index() fetches the services from the database

                    // Start the outer list item
                    echo '<li class="nav-item dropdown">';
                    echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">';
                    echo 'Services';
                    echo '</a>';
                    echo '<div class="dropdown-menu">';

                    // Output list items for each service
                    foreach ($services as $service) {
                        $serviceLink1 = strtolower(str_replace('../../', '../', $service['link']));
                        $serviceLink2 = strtolower(str_replace('../../', './', $service['link'])) ;
                        // Check if the current page matches the generated link
                        $isActive = ($_SERVER['PHP_SELF'] == $service['link']) ? 'active' : '';

                        // Output list item
                        if (strpos($current_path, '/patrick_portfolio/pages/services') !== false) {
                           
                            echo '<a class="dropdown-item ' . $isActive . '" href="/' . $service['link'] . '?service_id='.$service['id'].'">' . $service['title'] . '</a>';
                        } 
                        elseif (strpos($current_path, '/patrick_portfolio/pages') !== false) {
                            echo '<a class="dropdown-item ' . $isActive . '" href="/' . $serviceLink1 . '?service_id='.$service['id'].'">' . $service['title'] . '</a>';
                        } else {
                            // If it's not in '/patrick_portfolio/'
                            echo '<a class="dropdown-item ' . $isActive . '" href="/' . $serviceLink2 . '?service_id='.$service['id'].'">' . $service['title'] . '</a>';
                        }
                        // echo '<a class="dropdown-item ' . $isActive . '" href="/' . $serviceLink2 . '?service_id='.$service['id'].'">' . $service['title'] . '</a>';
                    }

                    // Close the dropdown menu and outer list item
                    echo '</div>';
                    echo '</li>';
                    ?>
                    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/careers.php'){ echo 'active'; } ?>">
                        <a class="nav-link" href="/patrick_portfolio/pages/careers.php">Careers</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/commitment.php'){ echo 'active'; } ?>">
                        <a class="nav-link" href="/patrick_portfolio/pages/commitment.php">Commitment</a>
                    </li>
                    <li class="nav-item <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/contact.php'){ echo 'active'; } ?>">
                        <a class="nav-link" href="/patrick_portfolio/pages/contact.php">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>