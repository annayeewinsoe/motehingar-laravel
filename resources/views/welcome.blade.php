@extends('layouts.layout')

@section('content')
    <div class="main">
        <div class="container">
            <h1 class="brand">min ga lar par</h1>
            <img src="img/logo.jpg" alt="mote hin gar" class="logo">

            <p class="msg">{{ session('msg') }}</p>
            <a href="/motehingars/create" class="link">order motehingar here</a>
        </div>
    </div>
@endsection