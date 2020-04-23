@extends('layout')

@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4"> status toevoegen</h1>

            <form method="post" action="/status">
                @csrf

                <div class="field">
                    <label class="label" for="status_titel">Titel</label>

                    <div class="control">
                        <input class="input @error('status_titel') is-danger @enderror" type="text"  name="titel" id="titel" value="{{old('status_titel')}}">
                        @error('status_titel')
                        <p class="alert is-danger">{{ $errors->first('status_titel') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="status_beschrijving">Beschrijving</label>

                    <div class="control">
                        <input class="input @error('status_beschrijving') is-danger @enderror" name="status_beschrijving" id="status_beschrijving" value="{{old('status_beschrijving')}}"></textarea>
                        @error('status_beschrijving')
                        <p class="alert is-danger">{{ $errors->first('status_beschrijving') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="datum">Datum</label>

                    <div class="control">
                        <input class="input @error('datum') is-danger @enderror" name="datum" id="datum" value="{{old('datum')}}"></textarea>
                        @error('datum')
                        <p class="alert is-danger">{{ $errors->first('datum') }}</p>
                        @enderror
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