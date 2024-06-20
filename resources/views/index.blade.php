<!-- resources/views/products/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Movies</h1>

        <ul>
            @foreach ($products as $product)
                <li>
                    <strong>{{ $product['title'] }}</strong><br>
                    {{ $product['description'] }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
