@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-front">
    <img class="fs_bg" src="./assets/images/firstslidebg.jpg" alt="Background Image">
		<h1 class="mcc-logo"><img src="./assets/images/mcclogo.png" alt=""></h1>
		<p>Live a life of endless possibilities!</p>
		<p>Ready to find the credit card that best suits your lifestyle?</p>
		<p>But first, we want to know you more.</p>
		{{-- <h2>Let's begin with you.</h2> --}}
		<a href="{{ url('what-should-we-call-you') }}" class="stdButton">Get Started</a>
	</div>
@endsection