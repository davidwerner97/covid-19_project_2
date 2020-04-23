@extends('layout')
@section('head')
    <style>
        .cards {
            display: flex;
            flex-wrap: wrap;
        }
        .mdc-card{
            float:left;
        }

        .element-card {
            width: 20em;
            margin: 16px;
        }

        .element-card > .mdc-card__media {
            height: 7em;
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
            <div class="mdc-card element-card earth">
                <div class="mdc-card__media">
                    <div class="mdc-card__media-content">
                        <div class="mdc-typography--headline4">{{ $werknemer->vnaam .' ' . $werknemer->anaam }}</div>
                        <div class="mdc-typography--headline9">{{ $werknemer->functie}}</div>
                        <div class="mdc-typography--headline9">{{$werknemer->plaats. ' ' . $werknemer->postcode}}</div>
                        <div class="mdc-typography--headline9">{{$werknemer->straat. ' ' . $werknemer->hnummer}}</div>
                        <div class="mdc-typography--headline9">{{$werknemer->telnummer}}</div>
                    </div>
                </div>
            </div>
    </div>
@endsection
