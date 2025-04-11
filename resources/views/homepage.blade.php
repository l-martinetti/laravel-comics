@extends('layouts.master')

@section('title')
    Laravel Comics
@endsection

@section('content')
    <section>
        <div style="height: 400px; overflow: hidden;">
            <img class="img-fluid w-100 h-100" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="teen titans"
                style="object-fit: cover; object-position: center top;">
        </div>
    </section>
    <section class="bg-dark">
        <x-card>

        </x-card>
    </section>
@endsection
