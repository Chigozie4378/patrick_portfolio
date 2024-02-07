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
                    
                    <li class="nav-item dropdown  <?php if ($_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/big_data.php' || $_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/data_analysis.php' || $_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/big_data.php' || $_SERVER['PHP_SELF'] == '/patrick_portfolio/pages/services/datawarehouse.php'){ echo 'active'; } ?>">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="/patrick_portfolio/pages/services/big_data.php">Big Data</a>
                            <a class="dropdown-item" href="/patrick_portfolio/pages/services/datawarehouse.php">Data Warehouse</a>
                           
                            <a class="dropdown-item" href="/patrick_portfolio/pages/services/data_analysis.php">Data Analysis</a>
                        </div>
                    </li>
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