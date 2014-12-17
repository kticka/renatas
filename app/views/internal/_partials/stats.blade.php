@if ($stats)
	@foreach($stats['playerStatSummaries'] as $stat)
		<table width="100%">
		<tr><th>Type</th><th>Wins</th></tr>
		<tr><td>{{ $stat['playerStatSummaryType'] }}</td><td>{{ $stat['wins'] }}</td></tr>
		@if (count($stat['aggregatedStats']) > 0)
			<tr><td colspan="2">
				<table width="100%">
					<tr>
						@foreach(array_keys($stat['aggregatedStats']) as $name)
							<th>{{ $name }}</th>
						@endforeach
					</tr>
					<tr>
						@foreach($stat['aggregatedStats'] as $details)
							<td>{{ $details }}</td>
						@endforeach
					</tr>
				</table>
		@endif
		</td></tr>
		</table>

	@endforeach
@endif

