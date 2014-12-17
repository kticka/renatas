@if ($stats)
	@foreach($stats['playerStatSummaries'] as $stat)
		<table width="100%">
		<tr><th>Type</th><th>Wins</th></tr>
		<tr><td>{{ $stat['playerStatSummaryType'] }}</td><td>{{ $stat['wins'] }}</td></tr>
		@if (count($stat['aggregatedStats']) > 0)
			<tr><th>Name</th><th>Count</th></tr>
			@foreach($stat['aggregatedStats'] as $key => $details)
				<tr><td><b>{{$key}}</b></td><td>{{$details}}</td></tr>
			@endforeach
		@endif
		</td></tr>
		</table>

	@endforeach
@endif

