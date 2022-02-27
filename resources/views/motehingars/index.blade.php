@extends('layouts.layout')

@section('content')

<div class="main">
  <div class="container">
    <h1 class="brand">mote hin gar - order list</h1>

    @foreach($motehingars as $motehingar)
    <div class="card">
      <a href="/motehingars/{{ $motehingar->id }}" class="to-show">
        <h3>order by: <span class="name">{{ $motehingar->name }}</span></h3>
        <p><b class="loop">noodle type:</b> <span>{{ $motehingar->noodle }}</span></p>
        <p><b class="loop">flavour:</b>
          @foreach($motehingar->flavour as $flv)
          <span class="loop">{{ $flv }},</span>
          @endforeach
        </p>
        <p><b class="loop">toppings:</b>
          @foreach($motehingar->toppings as $topping)
          <span class="loop">{{ $topping }},</span>
          @endforeach
        </p>
      </a>
    </div>
    @endforeach
  </div>
</div>

@endsection