@extends('layout.base')

@section('content')
<a href="#" class="github-link">
	<p class="nes-balloon from-right">Fork me <br>on GitHub</p>
	<i class="nes-octocat"></i>
</a>
<h1>The best URL SHORTENER!!</h1>

<form  method="post">
    {{ csrf_field() }}
    <input class="nes-input" name="url" type="text" placeholder="Enter your URL Here" value="{{ old('url') }}">
    {!! $errors->first('url','<p class="error-msg">:message</p>') !!}
    <button class="nes-btn">Short URL</button>
</form>




@endsection