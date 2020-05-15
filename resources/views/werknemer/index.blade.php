@extends('layout')
@section('head')
    <style>
    /*.card-title, .card-text, .card-subtitle{*/
    /*    color: black;*/
    /*}*/
    </style>
@endsection

@section('inhoud')
@php
$i = 0
@endphp

                    @foreach ($werknemers as $werknemer)
                        @php
                        if($i == 0){echo '<div class="row">';}
                        @endphp

                        <div class="col-sm">


                            <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $werknemer->vnaam .' ' . $werknemer->anaam }}</h5>
                                    <h6 class="card-subtitle mb-2">{{ $werknemer->functie}}</h6>
                                    <p class="card-text">{{$werknemer->plaats. ' ' . $werknemer->postcode}}</p>
                                    <p class="card-text">{{$werknemer->straat. ' ' . $werknemer->hnummer}}</p>
                                    <p class="card-text">{{$werknemer->telnummer}}</p>
                                    <a href="{{$werknemer->path()}}" class="btn btn-primary">view</a>
                                    <a href="{{$werknemer->deletepath()}}" class="btn btn-primary">verwijder</a>
                                    <a href="{{$werknemer->editpath()}}" class="btn btn-primary">bewerk</a>
                                </div>
                            </div>
                        </div>
                        @php
                            ++$i;
   if($i == 3){echo '</div>';}

   if($i == 3){$i = 0;}

                        @endphp
                    @endforeach

@endsection
