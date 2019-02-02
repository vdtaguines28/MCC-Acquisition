{{-- number --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-eight" v-cloak id="art">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<div class="huge-circ">
			<p>What's your mobile number?</p>
			<form action="savenumber" method="POST" class="ans-gen-fn">
				{{ csrf_field() }}
				<div class="ans-gen-cont">
					<input required="" class="emailInput std-input num" type="number" placeholder="Your Number" name="Number">
					<p>We'll keep in touch. <!-- <i class="em em-blush"></i> --></p>
				</div>
				<input id="NumberButton" class="ntStdButton" type="submit" value="OK">
			</form>
		</div>
		<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-4.png') }}" alt="">
	</div>
@endsection