@extends('_layouts.master')

@section('body')

	<h1 class="title is-1  is-spaced">{{ $page->title }}</h1>
	<p class="subtitle is-4">{{ date('F j, Y', $page->date) }}</p>

	@yield('content')

@endsection
