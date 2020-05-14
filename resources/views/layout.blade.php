<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet" />
</head>
<body>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1><a href="/">Covid-19 killers</a></h1>
        </div>
        <div id="menu">
            <ul>
                <li class="{{Request::path() === 'werknemer.index' ?'current_page_item' : ''}}"><a href="/werknemer/" accesskey="1" title="">Werknemers</a></li>
                <li class="{{Request::path() === 'artikelen.index' ?'current_page_item' : ''}}"><a href="/artikelen/" accesskey="2" title="">Bedrijven</a></li>
                <li class="{{Request::path() === 'status.index' ?'current_page_item' : ''}}"><a href="/status/" accesskey="3" title="">Statuses</a></li>
            </ul>
        </div>
    </div>
</div>

@yield('head')

@yield('inhoud')

<div id="footer">
    <div id="copyright" class="container">
    <p>&copy; Covid-19 killers. All rights reserved. | Design by Covid-19 killers team.</p>
    </div>
</div>

</body>
</html>
