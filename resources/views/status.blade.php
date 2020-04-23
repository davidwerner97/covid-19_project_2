@extends('layout')


@section('inhoud')
    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <ul>
                    @foreach ($statuses as $status)
                        <li class="first">
                            <h3>{{ $status->status_titel }}</h3>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection