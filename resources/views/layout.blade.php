<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet" />
</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a>Covid-19 killers</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::path() === 'werknemer.index' ?'current_page_item' : ''}}"><a href="/werknemer/" accesskey="1" title="">Werknemers</a></li>
                <li class="{{Request::path() === 'bedrijven.index' ?'current_page_item' : ''}}"><a href="/bedrijf/" accesskey="2" title="">Bedrijven</a></li>
                <li class="{{Request::path() === 'artikelen.index' ?'current_page_item' : ''}}"><a href="/artikelen" accesskey="2" title="">Artikelen</a></li>
                <li class="{{Request::path() === 'status.index' ?'current_page_item' : ''}}"><a href="/status/" accesskey="3" title="">Statuses</a></li>
            </ul>
        </div>
    </div>
</div>
<div>
@yield('head')
</div>
<div class="container">
@yield('inhoud')
</div>

<div id="footer">
    <div id="copyright" class="container">
    <p>&copy; Covid-19 killers. All rights reserved. | Design by Covid-19 killers team.</p>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
