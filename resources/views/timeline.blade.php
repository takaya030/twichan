@extends('layouts.app')

@section('title', 'Timeline')

@section('content')
	@foreach( $tweets as $tweet )
		<blockquote class="twitter-tweet"><p lang="{{ $tweet->getLang() }}" dir="ltr">{{ $tweet->getFullText() }}</p>&mdash; {{ $tweet->getName() }} @({{ $tweet->getScreenName() }}) <a href="{{ $tweet->getStatusUrl() }}?ref_src=twsrc%5Etfw">{{ $tweet->getCreatedAt() }}</a></blockquote>
	@endforeach
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endsection
