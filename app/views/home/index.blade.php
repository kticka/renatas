@extends('layout')

@section('content')
	
	<div class="row">

  <div class="row">
    <div class="large-12 columns">
      <div class="row collapse">
        <div class="small-10 columns">
          <input type="text" name="nickname" placeholder="Hex Value">
        </div>
        <div class="small-2 columns">
          <a href="#" class="button postfix">Go</a>
        </div>
      </div>
    </div>
  </div>

	{{ Form::open(['route' => 'home.player']) }}
		<input type="text" name="nickname">
		<button type="submit" class="button radius tiny">Search</button>
	{{ Form::close() }}

	@if (isset($user)) 
		User found: <br>
		Username: {{ $user['name'] }}<br>
		Level: {{ $user['summonerLevel'] }}<br>
		{{ link_to_route('home.stats', 'Stats', ['player' => $user['name']]) }}
	@endif

	@if (isset($stats))
		<pre>
			{{ print_r($stats) }}
		</pre>
	@endif
@stop()