@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="text-center">
                il mio portfolio di progetti.
            </h1>
            <form action="{{route("admin.project.create")}}" method="get">
            <button>
                crea un nuovo post
            </button>
            </form>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">titolo</th>
                        <th scope="col">nome</th>
                        <th scope="col">cognome</th>
                        <th scope="col">edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($newProject as $project)
                        <tr>
                            <th scope="row">{{ $project['id'] }}</th>
                            <td>{{ $project['title'] }}</td>
                            <td>{{ $project['name'] }}</td>
                            <td>{{ $project['surname'] }}</td>
                            <td>
                                <div class="d-flex">
                                    <span>
                                        <form action="{{ route('admin.project.show', $project) }}" method="GET">
                                            <span>
                                                <button>visualizza</button>
                                            </span>
                                        </form>
                                    </span>
                                    <span>
                                        <form action="{{ route('admin.project.show', $project) }}" method="GET">
                                            <span>
                                                <button>visualizza</button>
                                            </span>
                                        </form>
                                    </span>
                                    <span>
                                        <form action="{{ route('admin.project.show', $project) }}" method="GET">
                                            <span>
                                                <button>cancella</button>
                                            </span>
                                        </form>
                                    </span>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
