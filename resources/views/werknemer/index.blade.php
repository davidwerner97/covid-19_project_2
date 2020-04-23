@extends('temptemplate')


@section('inhoud')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <ul>
                @foreach ($werknemers as $werknemer)
                <li class="first">
                    <h3>{{ $werknemer->vnaam }}</h3>
                </li>
                @endforeach
            </ul>

        </div>

    </div>
    @endsection
