@extends('layouts.index')

@section('content')
    <a href="{{route('create.membre')}}">Ajouter un membre</a>
    <div>
        @foreach ($dataMembres as $membres)
        <div>
            {{$membres->nom}}
        </div>
        @endforeach
    </div>
    
@endsection