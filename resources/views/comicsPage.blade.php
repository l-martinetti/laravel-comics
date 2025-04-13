@extends('layouts.master')

@php

    $comics = config('comics');

@endphp

@section('content')
    <main class="bg-dark">
        <div class="container pt-5">
            <div class="row">
                @foreach ($comics as $comic)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-6 mb-4">
                        <x-card>
                            <x-slot:thumb>{{ $comic['thumb'] }}</x-slot:thumb>
                            <x-slot:title>{{ $comic['title'] }}</x-slot:title>
                            <div class="card-body">
                                <p class="card-text text-white">{{ $comic['description'] }}</p>
                                <p class="card-text text-white">
                                    Artisti:
                                    @foreach ($comic['artists'] as $artist)
                                        {{ $artist }}{{ $loop->last ? '.' : ',' }}
                                    @endforeach
                                </p>
                                <p class="card-text text-white">
                                    Prezzo: {{ $comic['price'] }}
                                </p>
                            </div>
                        </x-card>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
