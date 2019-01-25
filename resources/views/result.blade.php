@extends('layout.base')

@section('content')
	<h1 class="H1result">Find your shortened URL here : </h1>
	<input type="text" id="myInput" class="nes-input is-success" value="{{ config('app.url') }}/{{ $shortened }}">
	<button onclick="myFunction()" class="nes-btn">Copy URL to Clipboard</button>
	<button onclick="window.location='{{ url("/") }}'" class="nes-btn">Try it Again !!</button>
@endsection

{{-- 
<a href="{{ env('APP_URL') }}/{{ $shortened }}">
{{ env('APP_URL') }}/{{ $shortened }}</a>
--}}