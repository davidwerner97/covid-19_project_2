<!DOCTYPE html>
<html lang="en">
{{--deze template is tijdelijk deze kan ik gebruiken om van te extenden om later de goede template gemakkelijk te kunnen gebruiken--}}
<head>
    @yield('head')
        <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
        <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body id="page-top">
    @yield("inhoud")
</body>
</html>
