@extends('layout')
@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
    <script src="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <style>

        .mdc-card {
            float: left;
            background: #2b2b2b;
        }

        .card-text {
            color: white;
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

        .mdc-card__media {
            text-align: left;
            margin: 10px;

        }

        .mdc-card__media-content {
            display: inline-block;
        }

        #content {
            width: 100%;
        }
        .grid-container {
            display: grid;
            grid-template-columns: 1.5fr 1fr 1.5fr;
            grid-template-rows: 1.5fr;
            gap: 1px 1px;
            grid-template-areas: "statuses statuses artiekelen";
        }

        .statuses { grid-area: statuses; }

        .artiekelen { grid-area: artiekelen; }
    </style>
@endsection

@section('inhoud')

    <div class="grid-container">
        <div class="statuses">
            @if (!empty($status))
                <div class="mdc-card element-card">
                    <div class="mdc-card__media">
                        <div class="mdc-card__media-content">
                            <div class="mdc-typography--headline4">{{ $status->titel}}</div>
                            <div class="mdc-typography--headline9">{{ $status->beschrijving}}</div>
                            <div class="mdc-typography--headline9">{{$status->datum}}</div>
                            <a href="{{$status->deletepath()}}">delete</a> <a href="{{$status->editpath()}}">edit</a>
                        </div>
                    </div>
                </div>
            @else
                er zijn geen statusen
            @endif
        </div>
        <div class="artiekelen">
            @if (!empty($artikelen))
                @foreach($artikelen as $artikel)
                    <div class="mdc-card element-card">
                        <div class="mdc-card__media">
                            <div class="mdc-card__media-content">
                                <div class="mdc-typography--headline4">{{ $artikel->titel}}</div>
                                <div class="mdc-typography--headline9">{{ $artikel->datum}}</div>
                                <div class="mdc-typography--headline9">{{$artikel->datum}}</div>
{{--                                <a href="{{$artikel->deletepath()}}">delete</a> <a href="{{$artikel->editpath()}}">edit</a>--}}
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                er zijn geen artiekelen
            @endif
        </div>
    </div>

@endsection
