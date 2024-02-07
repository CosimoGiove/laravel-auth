@extends('admin.project.layouts.layouts')
@section('main')
    <main>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container">
            <a href="{{ route('admin.dashboard') }}">torna indietro</a>
            <form action="{{ route('admin.project.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <div class="text-center">
                        <h1>Crea nuovo progetto</h1>
                        <div>
                            effetua le modifiche
                        </div>
                    </div>
                    <label for="titolo" class="form-label">
                        titolo :
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('title') }}" name="title">
                    <label for="titolo" class="form-label">
                        descrizione:
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('description') }}" name="description">
                    <label for="titolo" class="form-label">
                        titolo :
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('frameworks') }}" name="frameworks">
                    <label for="titolo" class="form-label">
                        titolo :
                    </label>
                    <input type="text" class="form-control" aria-describedby="emailHelp" id="titolo"
                        value="{{ old('language') }}" name="language">

                    <button type="submit">invia</button>
            </form>
        </div>

    </main>

@endsection
