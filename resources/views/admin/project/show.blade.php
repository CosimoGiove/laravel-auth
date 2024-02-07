@extends('admin.project.layouts.layouts')
@section('main')
    <main>
        <div class="container">
            <a href="{{ route('admin.dashboard') }}">
                torna ai proggetti
            </a>
            <h2>
                {{ $project['title'] }}
            </h2>
            <div>
              linguaggio utilizzato: {{$project["language"]}}
            </div>
            <div>
              frameworks utilizzati:{{$project["frameworks"]}}
            </div>
            descrizione:{{ $project['description'] }}
    
        </div>
    </main>
@endsection
