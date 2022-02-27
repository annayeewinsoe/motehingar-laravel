@extends('layouts.layout')

@section('content')

<div class="main">
  <div class="container">
    <h1 class="brand">order motehingar here</h1>

    <div class="card card-lg">
      <form action="/motehingars" method="POST">
        @csrf
        <label for="name">your name</label>
        <input type="text" id="name" name="name">

        <label for="noodle">choose noodle type</label>
        <select name="noodle" id="noodle">
          <option value="mote phat">mote phat</option>
          <option value="nyat">nyat</option>
          <option value="mote phat and nyat">mote phat and nyat</option>
        </select>

        <fieldset>
          <label>add flavour</label>
          <div class="choice">
            <input type="checkbox" name="flavour[]" value="chin (extra lime)">chin (extra lime)
          </div>
          <div class="choice">
            <input type="checkbox" name="flavour[]" value="ngan (extra ngan pyar yay)">ngan (extra ngan pyar yay)
          </div>
          <div class="choice">
            <input type="checkbox" name="flavour[]" value="sat (extra chilly)">sat (extra chilly)
          </div>
        </fieldset>

        <fieldset>
          <label>choose toppings</label>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="nan nan pin">nan nan pin
          </div>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="onion">khat thon ni
          </div>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="ee kyar kwee">ee kyar kwee
          </div>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="buu thee kyaw">buu thee kyaw
          </div>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="pe thee">pe thee
          </div>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="pe kyaw">pe kyaw
          </div>
          <div class="choice">
            <input type="checkbox" name="toppings[]" value="oh be u">oh be u
          </div>
        </fieldset>

        <input type="submit" value="order" class="order">
      </form>
    </div>
  </div>
</div>

@endsection