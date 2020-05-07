@extends('layout')

@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Bedrijf maken</h1>

            <form method="POST" action="/bedrijf">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="status_titel">Naam</label>

                    <div class="control">
                        <input class="input" type="text"  name="naam" id="naam" value="{{$bedrijf->status_titel}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="status_beschrijving">Beschrijving</label>

                    <div class="control">
                        <textarea class="textarea" name="status_beschrijving" id="status_beschrijving">{{$bedrijf->status_beschrijving}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Datum</label>

                    <div class="control">
                        <textarea class="textarea" name="datum" id="datum">{{$status->datum}}</textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="button is-link" type="submit">Submit</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection