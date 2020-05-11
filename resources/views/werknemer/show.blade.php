@extends('layout')
@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>
        .mdc-card{
            float:left;
            background: #2b2b2b;
        }
        .card-text{
            color:white;
        }
        .cards {
            display: flex;
            flex-wrap: wrap;
        }


        .element-card {
            width: 20em;
            margin: 16px;
        }

        .element-card > .mdc-card__media {
            height: 9em;
        }
        .mdc-card__media{
            text-align: left;
            margin: 10px;

        }
        .mdc-card__media-content{
            display: inline-block;
        }
    </style>
@endsection

@section('inhoud')
    <div id="content">
            <div class="mdc-card element-card">
                <div class="mdc-card__media">
                    <div class="mdc-card__media-content">
                        <div class="mdc-typography--headline4 card-text">{{ $werknemer->vnaam .' ' . $werknemer->anaam }}</div>
                        <div class="mdc-typography--headline9 card-text">{{ $werknemer->functie}}</div>
                        <div class="mdc-typography--headline9 card-text">{{$werknemer->plaats. ' ' . $werknemer->postcode}}</div>
                        <div class="mdc-typography--headline9 card-text">{{$werknemer->straat. ' ' . $werknemer->hnummer}}</div>
                        <div class="mdc-typography--headline9 card-text">{{$werknemer->telnummer}}</div>
                        <a href="{{$werknemer->deletepath()}} " class="card-text"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->delete<!----></i></a> <a href="{{$werknemer->editpath()}}" class="card-text"><i aria-hidden="true" class="material-icons mdc-button__icon"><!---->edit<!----></i></a>
                    </div>
                </div>
            </div>
    </div>
@endsection
