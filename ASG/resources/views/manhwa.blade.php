@extends('temp')
@section('title', 'Manhwa')
@section('text')
<link href="/css/main.css" rel="stylesheet">

<h2 class="c">Top Manhwa list</h2>
	
	<table class="center">
		<tr>
			<td>Rank</td>
			<td>Title</td>
            <td>Score</td>
		</tr>
	@foreach ($manhwa as $m)
		<tr>
			<td>{{$m['id']}}</td>
			<td>{{$m['title']}} <br> <img src = {{$m['image']}} alt="" > </td>
            <td>{{$m['Score']}}</td>
		</tr>
		@endforeach

	</table>
@endsection