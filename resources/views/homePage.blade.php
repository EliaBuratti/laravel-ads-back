@extends('layouts.app')

@section('content')
    @if ($user['modal'])
        <h1>Benvenuto nel mio sito!</h1>
    @else
        <h1>Bentornato nel mio sito!</h1>
        <a href="{{ route('generated::Vl6u37GxCHZ93hr7') }}">Exit session</a>
    @endif
@endsection
