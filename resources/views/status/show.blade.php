@extends('layout')
@section('head')
    <style>
        .cards {
            display: flex;
            flex-wrap: wrap;
        }
        .mdc-card{
            float:none;
        }

        .element-card {
            width: 30em;
            margin: 16px;
        }

        .element-card > .mdc-card__media {
            height: 9em;
        }
        .mdc-card__media{
            text-align: left;
            margin: 10px;
            font-size: xx-large;

        }
        .mdc-card__media-content{
            display: inline-block;
        }
    </style>
@endsection

@section('inhoud')
    <div id="content">
        <h2 class="card-title" style="margin-left: 25px;">Status: {{ $status->id}}</h2>
                <div class="mdc-card element-card earth">
                    <div class="mdc-card__media">
                        <div class="mdc-card__media-content">
                            <div class="mdc-typography--headline4">Title: {{ $status->titel}}</div>
                            <div class="mdc-typography--headline9">Beschrijving: {{ $status->beschrijving}}</div>
                            <div class="mdc-typography--headline9">Datum: {{$status->datum}}</div>
                    </div>
                </div>
                    <div class="field is-grouped">
                        <div class="control">
                            <a class="btn btn-danger" href="{{$status->deletepath()}}">Verwijderen</a> <a class="btn btn-info" href="{{$status->editpath()}}">Wijzigen</a>
                        </div>
                    </div>
    </div>
@endsection
