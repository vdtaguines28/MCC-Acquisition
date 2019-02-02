@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-ninth" id="art">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<h2>All right, that was a fun start! Are you ready to explore<br/>
		endless possibilities with the card that best suits your lifestyle?
		</h2>
		<div class="mcccarousel">
			@if($respondent != '')
				@if($respondent->title == 'Ms.')
					<div class="mcc-card">
						<img src="{{ URL::asset('assets/images/femme.jpg') }}" alt="Femme">
						<h2>Metrobank femme<br/>signature visa</h2>
						<p>You've got to own it.</p>
						<a href="https://metrobankcard.com/cards/metrobank-femme-signature-visa" class="stdButton">View Card Details</a>
					</div>
					<div class="mcc-card">
						<img src="{{ URL::asset('assets/images/femmevisa.jpg') }}" alt="Femme">
						<h2>Metrobank<br/>Femme visa</h2>
						<p>Because you're a woman</p>
						<a href="https://metrobankcard.com/cards/metrobank-femme-visa" class="stdButton">View Card Details</a>
					</div>
				@endif
				@if($respondent->title == 'Mr.')
					<div class="mcc-card">
						<img src="{{ URL::asset('assets/images/PLATINUM.jpg') }}" alt="Femme">
						<h2>Metrobank Peso Platinum<br>Mastercard</h2>
						<p>Live ahead. You deserve it.</p>
						<a href="https://metrobankcard.com/cards/metrobank-platinum-Mastercard" class="stdButton">View Card Details</a>
					</div>
					<div class="mcc-card">
						<img src="{{ URL::asset('assets/images/MCC-WORLD.jpg') }}" alt="Femme">
						<h2>MetroBank World Mastercard</h2>
						<p>Go where few other cards can take you.</p>
						<a href="https://metrobankcard.com/cards/metrobank-world-Mastercard" class="stdButton">View Card Details</a>
					</div>
				@endif
			@endif
			<div class="mcc-card">
				<img src="{{ URL::asset('assets/images/travel.jpg') }}" alt="Femme">
				<h2>Metrobank travel<br/>platinum visa</h2>
				<p>Make your firsts last.</p>
				<a href="https://metrobankcard.com/cards/metrobank-travel-platinum-visa" class="stdButton">View Card Details</a>
			</div>
			<div class="mcc-card">
				<img src="{{ URL::asset('assets/images/TOYOTA.jpg') }}" alt="Femme">
				<h2>Toyota<br/>Mastercard</h2>
				<p>Enhance your drive.</p>
				<a href="https://metrobankcard.com/cards/toyota-Mastercard-2" class="stdButton">View Card Details</a>
			</div>
<!-- 			<div class="mcc-card">
				<img src="{{ URL::asset('assets/images/femme.jpg') }}" alt="Femme">
				<h2>Metrobank femme<br/>signature visa</h2>
				<p>You've got to own it</p>
				<a href="https://metrobankcard.com/cards/metrobank-femme-signature-visa" class="stdButton">View Card Details</a>
			</div> -->
		</div>
		<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-10.png') }}" alt="">
	</div>
@endsection