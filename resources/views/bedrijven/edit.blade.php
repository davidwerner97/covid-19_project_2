@extends('layout')

@section('head')
    <style>

    </style>
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">Bedrijf aanpassen</h1>

            <form method="POST" action="{{route('bedrijven.update', $bedrijf)}}">
                @csrf
                @method('PUT')

                <div class="field">
                    <label class="label" for="naam">Naam</label>

                    <div class="control">
                        <input class="input" type="text"  name="naam" id="naam" value="">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="plaats">Plaats</label>

                    <div class="control">
                        <textarea class="textarea" name="plaats" id="plaats"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="postcode">Postcode</label>

                    <div class="control">
                        <textarea class="textarea" name="postcode" id="postcode"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="hnummer">Huisnummer</label>

                    <div class="control">
                        <textarea class="textarea" name="hnummer" id="hnummer"></textarea>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="straat">Straat</label>

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