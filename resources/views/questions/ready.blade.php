{{-- ready --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-container">
		<div class="mcc-second">
			<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
			<div class="huge-circ">
	            <div class="disNameCont">
	                <p>Are you ready for your adventure,</p>
	                <h2>{{$respondent->firstname.' '.$respondent->lastname}} ?</h2>
	                <a href="{{ url('where-would-you-go') }}" class="ntStdButton">LET'S GO</a>
	            </div>
	            <img class="mcc-progress" src="{{ URL::asset('assets/images/prog-2.png') }}" alt="">
			</div>
		</div>
	</div>
@endsection