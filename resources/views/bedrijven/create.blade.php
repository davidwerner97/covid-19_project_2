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
                        <input class="input" type="text"  name="naam" id="naam" value="{{$bedrijf->naam}}">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="status_beschrijving">Plaats</label>

                    <div class="control">
                        <textarea class="textarea" name="plaats" id="plaats">{{$bedrijf->plaats}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Postcode</label>

                    <div class="control">
                        <textarea class="textarea" name="postcode" id="postcode">{{$bedrijf->postcode}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Huisnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="datum" id="datum">{{$bedrijf->hnummer}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Straat</label>

                    <div class="control">
                        <textarea class="textarea" name="straat" id="straat">{{$bedrijf->straat}}</textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Telefoonnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="telnummer" id="telnummer">{{$bedrijf->telnummer}}</textarea>
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