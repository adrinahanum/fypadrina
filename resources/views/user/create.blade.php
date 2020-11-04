@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">What your criteria to find PC Store</h1>
<br>
        <form method="POST" action="/user">
        @csrf
        <div class="form-group">
  <label for="name">Select service what do you want:</label>
  <select class="form-control" name="name" id="name">
    <option value="1">Change component</option>
    <option value="2">repair</option>
  </select>
</div>

<br>
<label for="speed_service">Please select your desire the speed of service (faster=urgent/ standard=anytime):</label>
  <input type="radio" id="faster" name="speed_service" value="faster">
  <label for="faster">Faster</label><br>
  <input type="radio" id="standard" name="speed_service" value="standard">
  <label for="standard">Standard</label><br>
  

<div class="field is-grouped">
    <div class="control">
        <button class="button is-link" type="submit">Recommend</button>
    </div>
</div>

            </form>
     