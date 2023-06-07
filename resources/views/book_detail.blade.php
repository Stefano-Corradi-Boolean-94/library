@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $book->title }}</h1>
        <p>Categoria: {{ $book->category }} | Genere: {{ $book->genre }} | Editore: {{ $book->publisher }} | ISBN: {{ $book->isbn }}</p>
        <p>
            {{ $book->plot }}
        </p>
    </div>
@endsection
