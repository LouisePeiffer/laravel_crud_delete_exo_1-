@extends('layouts.index')

@section('content')
    <div>
        @foreach ($dataHommes as $homme)
            <div>
                {{$homme->nom}}
            </div>
        @endforeach
    </div>
@endsection