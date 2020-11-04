@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">New PC Store</h1>

        <form method="POST" action="/pcname">
        @csrf
        <div class="form-group">
  <label for="PCname">Select service what do you want:</label>
  <select class="form-control" name="PCname" id="PCname">
    <option value="change component">change component</option>
    <option value="repair">repair</option>
  </select>
</div>

    <div class="field">
        <label class="label" for="rating">Rating</label>

        <div class="control">
            <textarea class="textarea" name="rating" id="rating"></textarea>
        </div>
    </div>

<div class="field">
    <label class="label" for="detail">Detail</lable>

    <div class="control">
        <textarea class="textarea" name="detail" id="detail"></textarea>
    </div>
</div>

<div class="field is-grouped">
    <div class="control">
        <button class="button is-link" type="submit">Submit</button>
    </div>
</div>

            </form>
     