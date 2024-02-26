<?php
session_start();

if (file_exists("../classes/autoload.php")) {
    include_once "../classes/autoload.php";
} elseif (file_exists("./classes/autoload.php")) {
    include_once "./classes/autoload.php";
} elseif (file_exists("../../classes/autoload.php")) {
    include_once "../../classes/autoload.php";
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .navbar-nav {
            margin-left: auto;
            margin-right: auto;
        }

        .nav-item {
            margin-right: 20px;
        }

        @media (max-width: 767px) {
            #carouselExampleCaptions {
                height: 200px;
                /* Set your desired height for mobile devices */
            }

            #carouselExampleCaptions .carousel-inner img {
                height: 200px;
                /* Set the height of the images inside the carousel */
                object-fit: cover;
                /* Maintain aspect ratio and cover the container */
            }
        }

        /* Default link styling */
        .navbar-nav .nav-item .nav-link {
            color: dark;
        }

        /* Hover effect */
        .navbar-item .nav-link:hover {
            color: deepskyblue;
            /* You can adjust the color as needed */
        }

        /* Active link styling */
        .navbar-nav .nav-item.active .nav-link {
            color: green;
            /* You can adjust the color as needed */
        }

        .body1 {
            padding: 20px 100px 20px 100px;
        }

        #contact-bg {
            background-image: linear-gradient(rgba(32, 163, 193, 0.5), rgba(121, 104, 185, 0.5)), url('./assets/images/urban-architecture-office-building-business-600nw-1339962440.webp');
            height: 40vh;
            opacity: 0.8;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }

        #contact-bg1 {
            background-image: linear-gradient(rgba(32, 163, 193, 0.5), rgba(121, 104, 185, 0.5)), url('../assets/images/urban-architecture-office-building-business-600nw-1339962440.webp');
            height: 40vh;
            opacity: 0.8;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }

        #contact-bg2 {
            background-image: linear-gradient(rgba(32, 163, 193, 0.5), rgba(121, 104, 185, 0.5)), url('../../assets/images/urban-architecture-office-building-business-600nw-1339962440.webp');
            height: 40vh;
            opacity: 0.8;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }

        #heading-bg1 {
            background-image: linear-gradient(rgba(32, 163, 193, 0.5), rgba(121, 104, 185, 0.5)), url('../assets/images/urban-architecture-office-building-business-600nw-1339962440.webp');
            height: 20vh;
            opacity: 0.8;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }

        #heading-bg2 {
            background-image: linear-gradient(rgba(32, 163, 193, 0.5), rgba(121, 104, 185, 0.5)), url('../../assets/images/urban-architecture-office-building-business-600nw-1339962440.webp');
            height: 20vh;
            opacity: 0.8;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover;
        }

        blockquote {
            padding: 10px 20px;
            margin: 0 0 20px;
            font-size: 17.5px;
            border-left: 5px solid #eee;
        }
    </style>
</head>