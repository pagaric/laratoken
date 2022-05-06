@extends('layouts.app')

@section('content')

    <div>
        <ul>
            @foreach ($tokens as $token)
                <li>{{$token->jeton}} - {{$token->etat}}</li>
            @endforeach
        </ul>
    </div>

@endsection