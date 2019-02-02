{{-- email --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-fourth">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<div class="huge-circ">
			<p>Enter your email address below.</p>
			<form action="saveemail" method="POST" class="ans-gen-fn">
				{{ csrf_field() }}
				<div class="ans-gen-cont">
					<input required="" class="emailInput std-input animated" type="email" placeholder="Your email address *" name="Email">
					<p>We'll use this to get back to you. This will be kept confidential. <!-- <i class="em em-wink"></i> --></p>
				</div>
				<input id="EmailButton" class="ntStdButton" type="submit" value="SUBMIT">
			</form>
		</div>
		<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-6.png') }}" alt="">
	</div>
@endsection