@extends('layout')
@section('head')
    <style>
        .card-title, .card-text, .card-subtitle{
            color: black;
        }
    </style>
@endsection

@section('inhoud')
    <div id="content">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $werknemer->vnaam .' ' . $werknemer->anaam }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $werknemer->functie}}</h6>
                <p class="card-text">{{$werknemer->plaats. ' ' . $werknemer->postcode}}</p>
                <p class="card-text">{{$werknemer->straat. ' ' . $werknemer->hnummer}}</p>
                <p class="card-text">{{$werknemer->telnummer}}</p>
                <a href="{{$werknemer->deletepath()}}" class="card-link">verwijder</a>
                <a href="{{$werknemer->editpath()}}" class="card-link">bewerk</a>
            </div>
        </div>
    </div>
@endsection
