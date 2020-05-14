@extends('layout')

@section('head')
    <link href="https://unpkg.com/material-components-web@v4.0.0/dist/material-components-web.min.css" rel="stylesheet">
@endsection

@section('inhoud')

    <div id="wrapper">
        <div id="page" class="container">
            <h1 class="heading " style="color: white; margin-bottom: 20px;">Status wijzigen</h1>

            <form method="POST" action="/status/{{$status->id}}">
                @csrf
                @method('PUT')

                <div class="field" style="margin-bottom: 20px;">
                    <label class="label" for="titel">Titel</label>

                    <div class="control">
                        <input class="form-control" type="text"  name="titel" id="titel" value="{{$status->titel}}">
                    </div>
                </div>

                <div class="field" style="margin-bottom: 20px;">
                    <label class="label" for="beschrijving">Beschrijving</label>

                    <div class="control">
                        <textarea class="form-control" name="beschrijving" id="beschrijving">{{$status->beschrijving}}</textarea>
                    </div>
                </div>

                <div class="field" style="margin-bottom: 20px;">
                    <label class="label" for="datum">Datum</label>

                    <div class="control">
                        <textarea class="form-control" name="datum" id="datum">{{$status->datum}}</textarea>
                    </div>
                </div>
                <div class="field is-grouped">
                    <div class="control">
                        <button class="btn btn-info" type="submit">wijzigen</button>
                    </div>
                </div>
            </form>

        </div>
    </div>


@endsection