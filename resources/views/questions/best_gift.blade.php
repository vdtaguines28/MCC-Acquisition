{{-- best gift --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-seventh">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<div class="huge-circ">
			<div class="thirdcont">
				<p>What's the best gift you've ever received?</p>
				<form action="savegift" method="POST" class="cards" id="GiftRadio">
					{{ csrf_field() }}
					<div class="card">
						<label class="giftcheck">
							<input type="radio" id="WatchCheck" name="GiftCheck" value="watch"/>
							<img id="Watch" src="{{ URL::asset('assets/images/gift1.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="giftcheck">
							<input type="radio" id="MakeupCheck" name="GiftCheck" value="makeup"/>
							<img id="Makeup" src="{{ URL::asset('assets/images/gift2.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="giftcheck">
							<input type="radio" id="TravelCheck" name="GiftCheck" value="travel"/>
							<img id="Travel" src="{{ URL::asset('assets/images/gift3.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="giftcheck">
							<input type="radio" id="DateCheck" name="GiftCheck" value="car"/>
							<img id="Date" src="{{ URL::asset('assets/images/car.jpg') }}" alt="">
						</label>
					</div>
					<input id="GiftButton" class="d-none" type="submit">
				</form>
			</div>
		</div>
		<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-8.png') }}" alt="">
	</div>
@endsection