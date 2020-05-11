@extends('layout')

@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Bedrijf aanpassen</h1>

            <form method="POST" action="/bedrijfs">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="status_titel">Naam</label>

                    <div class="control">
                        <input class="input" type="text"  name="naam" id="naam" value="">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="status_beschrijving">Plaats</label>

                    <div class="control">
                        <textarea class="textarea" name="plaats" id="plaats"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Postcode</label>

                    <div class="control">
                        <textarea class="textarea" name="postcode" id="postcode"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Huisnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="datum" id="datum"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Straat</label>

                    <div class="control">
                        <textarea class="textarea" name="straat" id="straat"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Telefoonnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="telnummer" id="telnummer"></textarea>
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