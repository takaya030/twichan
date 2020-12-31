@extends('layouts.app')

@section('title', 'Timeline')

@section('content')
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
	@foreach( $tweets as $tweet )
		<blockquote class="twitter-tweet"><a href="{{ $tweet->getStatusUrl() }}?ref_src=twsrc%5Etfw"></a></blockquote>
	@endforeach
@endsection
