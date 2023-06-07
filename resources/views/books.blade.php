@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Elenco libri</h1>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Autore</th>
                <th scope="col">Categoria</th>
                <th scope="col">Azioni</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book )

                    <tr>
                        <th scope="row">{{ $book->id }}</ th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category }}</td>
                        <td>
                            <a href="{{ route('book_detail', ['slug' => $book->slug]) }}" class="btn btn-primary">VAI</a>
                        </td>
                    </tr>

                @endforeach

            </tbody>
          </table>
    </div>
@endsection
