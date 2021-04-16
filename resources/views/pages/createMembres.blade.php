@extends('layouts.index')

@section('content')
    <form method="POST" action="{{route('store.membre')}}">
        @csrf
        <label for="age">AGE</label>
        <input type="text" name="age">

        <br>

        <label for="nom">NOM</label>
        <input type="text" name="nom">

        <br>

        <label for="genre">GENRE</label>
        <input type="text" name="genre">

        <br>
        <button type="submit" class="btn btn-success">Rajouter un membre</button>
    </form>
@endsection