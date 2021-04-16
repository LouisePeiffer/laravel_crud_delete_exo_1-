@extends('layouts.index')

@section('content')
    <a href="{{route('create.membre')}}">Ajouter un membre</a>
    <div>
        @foreach ($dataMembres as $membres)
        <div>
            {{$membres->nom}}
        </div>
        <form method="POST" action="{{route('destroy.membre', $membres->id)}}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        @endforeach
    </div>
    
@endsection