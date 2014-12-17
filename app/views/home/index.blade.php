@extends('layout')

@section('content')
	  <div class="row">
	    <div class="small-12 medium-12 large-12 columns">
	      <div class="row collapse postfix-radius">
	        <div class="small-10 medium-10 large-10 columns">
	          <input id="search-autocomplete" class="radius" type="text" name="nickname" placeholder="Enter summoner name">
	        </div>
	        <div class="small-2 medium-2 large-2 columns" >
	         <button type="button" class="button postfix" id="search">Search</button>
	        </div>
	      </div>
	    </div>
	  </div>

	  <div class="row">
	  	<div class="small-12 medium-12 large-12 columns">
	  		<div id="data"></div>
	  	</div>
	  </div>

@stop()