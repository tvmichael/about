<?php defined('SITE_OPEN') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- My css file -->
    <link rel="stylesheet" href="<?php echo SITE_URI;?>public/css/about.css" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<header>

    <nav class="navbar navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo SITE_URI;?>">TVIMER</a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#headerNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="headerNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Головна</a></li>
                        <li><a href="#">Резюме</a></li>
                        <li><a href="#">Портфоліо</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Контакти</a></li>
                    </ul>
                </div>
        </div>
   </nav>

</header>