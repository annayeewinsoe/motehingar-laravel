@extends('layouts.layout')

@section('content')

<div class="main">
  <div class="container">
    <div class="card card-lg">
      <table>
        <thead>
          <tr>
            <th class="px-150">order for</th>
            <th>{{ $motehingar->name }}</th>
          </tr>

          <tr>
            <td>noodle:</td>
            <td>{{ $motehingar->noodle }}</td>
          </tr>

          <tr>
            <td>extra flavour:</td>
            <td>
              @foreach($motehingar->flavour as $flv)
                <span class="loop">{{ $flv }},</span>
              @endforeach
            </td>
          </tr>

          <tr>
            <td>toppings:</td>
            <td>
              @foreach($motehingar->toppings as $topping)
                <span class="loop">{{ $topping }},</span>
              @endforeach
            </td>
          </tr>

          <tr>
            <td>ordered at:</td>
            <td>{{ $motehingar->created_at }}</td>
          </tr>
        </thead>
      </table>

      <form action="/motehingars/{{ $motehingar->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="order">complete this order</button>
      </form>

      <a href="/motehingars" class="link">go back to motehingar list</a>
    </div>
  </div>
</div>

@endsection