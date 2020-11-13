@extends('layout')

@section('content')
    <div id="wrapper">
        <div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">What your criteria to find PC Store</h1>
<br>
        <form method="POST" action="{{route('service.create')}}">
        @csrf
        <div class="form-group">
        
        <label for="name">Select service what do you want:</label>
        <select class="form-control" name="name" id="name">
            <option value="">--- Select service ---</option>
  
            @foreach ($services as $service)
                <option value="{{ $service->id }}" <?php echo old('name') == $service->id ? 'selected' : '';?>>{{ $service->service_type }} </option>
            @endforeach
        </select>

        @if ($errors->has('name'))
        <div style="color: red">
         {{$errors->first('name')}}
        </div>
        @endif
</div>


<br>
<label for="speed_service">Please select your desire the speed of service  (faster=urgent/ standard=anytime):</label>

        @foreach ($times as $time)
 
            <input type="radio" id="service_feedback_{{ $time->id }}" name="service_feedback" value="{{ $time->id }}" <?php echo old('service_feedback') == $time->id ? 'checked' : '';?>>
            <label for="service_feedback_{{ $time->id }}">{{ $time->service_feedback }}</label><br>
        @endforeach
  <br>
  @if ($errors->has('service_feedback'))
        <div style="color: red">
         {{$errors->first('service_feedback')}}
        </div>
        @endif
  <br>
  <br>


<div class="field is-grouped">
    <div class="control">
        <button class="button is-link" type="submit">Recommend</button>
    </div>
</div>


</div>
</div>
            </form>
     @endsection
