@extends('admin.project.layouts.layouts')
@section('main')
    <main>
        <div class="container">
            <a href="{{ route('admin.project.index') }}">
                torna ai proggetti
            </a>
            <h2>
                {{ $project['title'] }}
            </h2>
            descrizione:{{ $project['description'] }}
        </div>
    </main>
@endsection
