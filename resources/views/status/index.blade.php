@extends('layout')
@section('head')
    <style>
        .cards {
            display: flex;
            flex-wrap: wrap;
        }
        .mdc-card{
            float:right;
            background-color: black;
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
            font-size: x-large;

        }
        .mdc-card__media-content{
            display: inline-block;
        }
    </style>
@endsection

@section('inhoud')
    <div id="header" style="margin-left: 20px; margin-top: 30px;">
        <h1>Statuses</h1>
    </div>
    <div id="content">
        <ul>
        @foreach ($status as $status)
            <div class="mdc-card element-card earth">
                <div class="mdc-card__media">
                    <div class="mdc-card__media-content">
                        <div class="mdc-typography--headline4">Status-Id: {{ $status->id}}</div>
                        <div class="mdc-typography--headline4">Title: {{ $status->titel}}</div>
                        <div class="mdc-typography--headline9">Beschrijving: {{ $status->beschrijving}}</div>
                        <div class="mdc-typography--headline9">Datum: {{$status->datum}}</div>
                    </div>
                </div>
                <div style="margin-left: 20px; margin-bottom: 25px;">
                    <a class="btn btn-light" href="{{$status->path()}}">View</a> <a class="btn btn-danger" href="{{$status->deletepath()}}">Verwijderen</a> <a class="btn btn-info" href="{{$status->editpath()}}">Wijzigen</a>
                </div>
            </div>
        </ul>
        @endforeach
    </div>
@endsection
