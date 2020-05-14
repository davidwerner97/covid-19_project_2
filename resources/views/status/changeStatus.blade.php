@extends('layout')

@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4"> Status wijzigen</h1>

            <form method="POST" action="/status/{{$status->id}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="titel">Titel</label>

                    <div class="control">
                        <input class="input" type="text"  name="titel" id="titel" value="{{$status->titel}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="beschrijving">Beschrijving</label>

                    <div class="control">
                        <textarea class="textarea" name="beschrijving" id="beschrijving">{{$status->beschrijving}}</textarea>
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