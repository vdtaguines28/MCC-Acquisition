{{-- to do --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-fifth">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<div class="huge-circ">
			<div class="thirdcont">
				<p>If you could get some time off,<br/>what would you do?</p>
				<form action="savetodo" method="POST" class="cards" id="TimeOffRadio">
					{{ csrf_field() }}
					<div class="card">
						<label class="todocheck">
							<input type="radio" id="SpaCheck" name="TimeCheck" value="spa"/>
							<img id="Spa" src="{{ URL::asset('assets/images/timeoff1.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="todocheck">
							<input type="radio" id="BeachCheck" name="TimeCheck" value="shop"/>
							<img id="Beach" src="{{ URL::asset('assets/images/shop.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="todocheck">
							<input type="radio" id="GymCheck" name="TimeCheck" value="gym"/>
							<img id="Gym" src="{{ URL::asset('assets/images/timeoff3.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="todocheck">
							<input type="radio" id="EatCheck" name="TimeCheck" value="eat"/>
							<img id="Eat" src="{{ URL::asset('assets/images/eat.jpg') }}" alt="">
						</label>
					</div>
					<input id="TimeOffButton" class="d-none" type="submit">
				</form>
			</div>
			<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-5.png') }}" alt="">
		</div>
		
	</div>
@endsection