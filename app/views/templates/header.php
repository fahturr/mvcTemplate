<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title><?= $data['judul'] ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= BASEURL; ?>/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/animate-3.7.0.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/fonts/flat-icon/flaticon.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/owl-carousel.min.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>

<body>
    <header class="header-area" style="position:fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="logo-area">
                    <a href="index.html"><img src="<?= BASEURL; ?>/images/logo/logo.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="custom-navbar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="main-menu">
                    <ul>
                        <li class="active"><a href="<?= BASEURL; ?>">home</a></li>
                        <li><a href="">menu</a></li>
                        <li><a href="">User</a>
                            <ul class="sub-menu mt-4">
                                <li><a href="">Blog Home</a></li>
                                <li><a href="<?= BASEURL ?>/login/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </header>
    <!-- Header Area End -->