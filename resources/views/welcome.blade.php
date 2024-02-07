@extends('layouts.app')
@section('content')
@foreach ($newProject as $project)
<ul>
    <li>
        {{$project["title"]}}
    </li>
</ul>

@endforeach
@endsection
