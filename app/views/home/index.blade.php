@extends('layout')

@section('content')
	{{ Form::open(['route' => 'home.player']) }}

	  <div class="row">
	    <div class="small-12 medium-12 large-12 columns">
	      <div class="row collapse postfix-radius">
	        <div class="small-10 medium-10 large-10 columns">
	          <input class="radius" type="text" name="nickname" placeholder="Enter summoner name">
	        </div>
	        <div class="small-2 medium-2 large-2 columns" >
	          <input type="submit" class="button postfix" value="Search">
	        </div>
	      </div>
	    </div>
	  </div>
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