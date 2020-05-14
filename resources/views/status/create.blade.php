@extends('layout')

@section('head')

@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading " style="color: white; margin-bottom: 20px;">Status toevoegen</h1>

            <form method="post" action="{{route('status.store')}}">
                @csrf

                <div class="field" style="margin-bottom: 20px;">
                    <label class="label" for="titel">Titel</label>

                    <div class="control">
                        <input class="form-control @error('titel') alert-danger @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" type="text"  name="titel" id="titel" value="{{old('titel')}}">
                        @error('titel')
                        <p class="alert is-danger" style="color: red;">{{ $errors->first('titel') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field" style="margin-bottom: 20px;">
                    <label class="label" for="beschrijving">Beschrijving</label>

                    <div class="control">
                        <input class="form-control @error('beschrijving') alert-danger @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="beschrijving" id="beschrijving" value="{{old('beschrijving')}}"></textarea>
                        @error('beschrijving')
                        <p class="alert is-danger" style="color: red;">{{ $errors->first('beschrijving') }}</p>
                        @enderror
                    </div>
                </div>

                <div class="field" style="margin-bottom: 20px;">
                    <label class="label" for="datum">Datum</label>

                    <div class="control">
                        <input class="form-control @error('datum') alert-danger @enderror" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="datum" id="datum" value="{{old('datum')}}"></textarea>
                        @error('datum')
                        <p class="alert is-danger" style="color: red;">{{ $errors->first('datum') }}</p>
                        @enderror
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-light" type="submit">Toevoegen</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection