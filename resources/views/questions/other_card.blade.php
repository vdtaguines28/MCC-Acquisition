{{-- other banks --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-cards">
			<h1 class="mcc-logo"><img src="./assets/images/mcclogo.png" alt=""></h1>
			<div class="huge-circ">
				<p>Do you have an existing credit card with other banks?</p>
				<form action="saveothercard" method="POST" class="ans-gen-fn">
					{{ csrf_field() }}
					<div class="ans-gen-cont">
						<input type="submit" class="card-button" value="YES" name="card" placeholder="Yes">
						<input type="submit" class="card-button" value="NO" name="card" placeholder="No">
					</div>
				</form>
				<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-9.png') }}" alt="">
			</div>
		</div>
@endsection