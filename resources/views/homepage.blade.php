@extends('layouts.master')

@section('title')
    Laravel Comics
@endsection

@php

    $comics = config('comics');

@endphp

@section('content')
    <section>
        <div style="height: 400px; overflow: hidden;">
            <img class="img-fluid w-100 h-100" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="teen titans"
                style="object-fit: cover; object-position: center top;">
        </div>
    </section>
    <section class="main">
        <div class="container pt-5">
            <x-button>
                <x-slot:classes>position-relative</x-slot:classes>
                <x-slot:text>CURRENT SERIES</x-slot:text>
            </x-button>
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2 mb-4">
                        <x-card>
                            <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
                            <x-slot:title>{{ $comic['title'] }}</x-slot:title>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
