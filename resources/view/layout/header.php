<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="resources/images/logo.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">

    <!-- MyCSS -->
    <link rel="stylesheet" href="public/css/style.css">

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- DATEPICKER -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#datepicker").datepicker({
                dateFormat: 'dd/mm/yy',
                changeMonth: true,
                changeYear: true
            });
        });

        $(document).ready(function() {
            $(".preloader").delay(350).fadeOut('slow');
        });
    </script>

    <title>Aston | <?= $title; ?></title>
</head>

<body>

    <div class="preloader">
        <div class="loading">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_rwq6ciql.json" background="transparent" speed="2" style="width: 80px; height: 80px;" loop autoplay></lottie-player>
        </div>
    </div>


    <header class="nav d-flex justify-content-between align-items-center <?php if ($detail == "detail") {
                                                                                echo "solid-nav-detail";
                                                                            } else {
                                                                                echo "";
                                                                            } ?>">
        <a href="home" class="text-decoration-none">
            <h2 class="logo">Aston</h2>
        </a>
        <nav class="navigation">
            <a href="home" <?php if ($page == "home") {
                                echo "class='active'";
                            } else {
                                echo "class='unactive'";
                            } ?>>Home</a>
            <a href="price" <?php if ($page == "price") {
                                echo "class='active'";
                            } else {
                                echo "class='unactive'";
                            } ?>>Price List</a>
            <a href="booking" <?php if ($page == "booking") {
                                    echo "class='active'";
                                } else {
                                    echo "class='unactive'";
                                } ?>>Booking Room</a>
            <a href="contact" <?php if ($page == "contact") {
                                    echo "class='active'";
                                } else {
                                    echo "class='unactive'";
                                } ?>>Contact Us</a>
            <!-- <button class="btnlogin-popup bg-transparent">Booking</button> -->
        </nav>
    </header>