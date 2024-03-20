@extends('layouts.app')

@section('title', 'DC Comics | Read Index')

@section('main')
    <main>
        <h1>Fumetti</h1>

        <div>

            <button class="">
                <a href="{{ route('comics.create')}}">Crea fumetto</a>
            </button>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">thumb</th>
                        <th scope="col">price</th>
                        <th scope="col">series</th>
                        <th scope="col">sale_date</th>
                        <th scope="col">type</th>
                        <th scope="col">actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <th scope="row">
                                <a href="{{route('comics.show', $item->id)}}">{{$item->title}}</a>
                            </th>
                            <td>{{ $item->thumb }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->series }}</td>
                            <td>{{ $item->sale_date }}</td>
                            <td>{{ $item->type }}</td>
                            <td>
                            <form action="{{ route('comics.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger" type="submit">ELIMINA</button>

                            </form>

                            <a class="btn btn-primary" href="{{ route('comics.edit', $item->id) }}">Modifica</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
    </main>
@endsection