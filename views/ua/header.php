<?php defined('SITE_OPEN') OR exit('Error'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <link rel="icon" href="<?php echo SITE_URI?>public/image/icon.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- My css file -->
    <link rel="stylesheet" href="<?php echo SITE_URI;?>public/css/main.css" crossorigin="anonymous">
</head>
<body>

<!-- HEADER ------------------------------------------------------------------------ -->
<header>

    <!-- NAVBAR -->
    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo SITE_URI;?>">
                        <span class="h-brand-style">TMV</span></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headerNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="headerNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#main">Головна</a></li>
                        <li><a href="#resume">Резюме</a></li>
                        <li><a href="#portfolio">Портфоліо</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo SITE_URI;?>en"><small>EN </small><img src="<?php echo SITE_URI;?>/public/image/en.gif"></a></li>
                        <li><a href="#contact">Контакти</a></li>
                    </ul>
                </div>
        </div>
   </nav>
</header>