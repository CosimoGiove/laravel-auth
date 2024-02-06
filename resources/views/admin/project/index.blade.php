@extends('admin.project.layouts.layouts')
@section('main')
    <header>
        <div class="container">
            <h1 class="text-center">
                il mio portfolio di progetti.
            </h1>

            <ul>
                @foreach ($newProject as $project)
                    <li>
                        <div class="img-utente">
                            <img src="{{ $project['img'] }}" alt="{{ $project['name'] }}">
                        </div>
                        <div>
                            nome: {{$project["name"]}}
                        </div>
                        <div>
                            cognome: {{$project["surname"]}}
                        </div>
                        <div>
                            età: {{$project["age"]}}
                        </div>
                        <div>
                            frameworks utilizzato: {{$project["frameworks"]}}
                        </div>
                        <div>
                          linguaggio utilizzato  : {{$project["language"]}}
                        </div>
                    </li>
                @endforeach
            </ul>
            <a href="{{route("admin.project.show",$project)}}">
                clicca qui per vededere le informazioni
            </a>
        </div>
    </header>
@endsection
