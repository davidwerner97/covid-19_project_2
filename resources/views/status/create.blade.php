@extends('layout')

@section('head')

@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading " style="color: white;">Status toevoegen</h1>

            <form method="post" action="{{route('status.store')}}">
                @csrf

                <div class="field">
                    <label class="label" for="titel">Titel</label>

                    <div class="control">
                        <input class="input @error('titel') is-danger @enderror" type="text"  name="titel" id="titel" value="{{old('titel')}}">
                        @error('titel')
                        <p class="alert is-danger">{{ $errors->first('titel') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="beschrijving">Beschrijving</label>

                    <div class="control">
                        <input class="input @error('beschrijving') is-danger @enderror" name="beschrijving" id="beschrijving" value="{{old('beschrijving')}}"></textarea>
                        @error('beschrijving')
                        <p class="alert is-danger">{{ $errors->first('beschrijving') }}</p>
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