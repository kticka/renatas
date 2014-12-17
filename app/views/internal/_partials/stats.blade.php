@if ($stats)
	@foreach($stats['playerStatSummaries'] as $stat)
		<table width="100%">
		<tr><th align="left">Type</th><th align="right">Wins</th></tr>
		<tr><td align="left">{{ $stat['playerStatSummaryType'] }}</td><td align="right">{{ $stat['wins'] }}</td></tr>
		@if (count($stat['aggregatedStats']) > 0)
			<tr><th align="left">Name</th><th align="right">Count</th></tr>
			@foreach($stat['aggregatedStats'] as $key => $details)
				<tr><td align="left"><b>{{$key}}</b></td><td align="right">{{$details}}</td></tr>
			@endforeach
		@endif
		</td></tr>
		</table>

	@endforeach
@endif

