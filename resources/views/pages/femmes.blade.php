@extends('layouts.index')

@section('content')
    <div>
        @foreach ($dataFemmes as $femme)
            <div>
                {{$femme->nom}}
            </div>
        @endforeach
    </div>
@endsection