@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')

@endsection

@section('body')
<form action="cardForm" method="POST" id="cardForm">
	{{ csrf_field() }}
	<div class="mcc-ninth" v-cloak id="art">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<h2>Here are the Metrobank credit cards that best suit your lifestyle based on your answers. <br />Exclusive offers and rewards await you!
		</h2>
		<p class="mcc-sub">Select your preferred card now!</p>
			<input type="hidden" name="cardName" class="cardName">
			<div class="mcccarousel">
				
			@if($respondent->title == "Ms.")
				<a data-fancybox data-src="#card_pop" href="javascript:;" class="mcc-card" data-name="Metrobank femme signature visa">
					<img src="{{ URL::asset('assets/images/femme.jpg') }}" alt="Femme">
					<h2>Metrobank femme<br/>signature visa</h2>
					<p>You've got to own it.</p>
					<span>The most rewarding card experience for women, enjoy triple rewards for hotel accommodations, hospitals bills, salons, and spas and the 24-hour VIP concierge service reserved for only the very best.</span>
					<!-- <a href="https://metrobankcard.com/cards/metrobank-femme-signature-visa" class="stdButton">View Card Details</a> -->
        </a>

				<a data-fancybox data-src="#card_pop" href="javascript:;" class="mcc-card" data-name="Metrobank Femme visa">
					<img src="{{ URL::asset('assets/images/femmevisa.jpg') }}" alt="Femme">
					<h2>Metrobank<br/>Femme visa</h2>
					<p>Because you're a woman</p>
					<span>The Metrobank Femme Visa welcomes you to a world 
	of beauty, wellness and shopping privileges. Experience the perks and privileges you deserve with Metrobank Femme Visa.</span>
					<!-- <a href="https://metrobankcard.com/cards/metrobank-femme-visa" class="stdButton">View Card Details</a> -->
          </a>
				@endif

				<a data-fancybox data-src="#card_pop" href="javascript:;" class="mcc-card" data-name="MetroBank World Mastercard">
					<img src="{{ URL::asset('assets/images/MCC-WORLD.jpg') }}" alt="Femme">
					<h2>MetroBank World Mastercard</h2>
					<p>Go where few other cards can take you.</p>
					<span>The Metrobank World Mastercard welcomes you to unequalled privilege and luxury. It offers a credit limit that nearly sets no borders giving you the benefit of additional purchasing power whenever you need it.</span>
					<!-- <a href="https://metrobankcard.com/cards/metrobank-world-Mastercard" class="stdButton">View Card Details</a> -->
				</a>

				<a data-fancybox data-src="#card_pop" href="javascript:;" class="mcc-card" data-name="Toyota Mastercard">
					<img src="{{ URL::asset('assets/images/TOYOTA.jpg') }}" alt="Femme">
					<h2>Toyota<br/>Mastercard</h2>
					<p>Enhance your drive.</p>
					<span>Our first complete travel card that lets you earn 
	1 mile for every P17 spent overseas and on airlines and hotels, unlimited airport lounge access, free travel insurance up to P5 million coverage, and exclusive travel offers.</span>
					<!-- <a href="https://metrobankcard.com/cards/toyota-Mastercard-2" class="stdButton">View Card Details</a> -->
				</a>

				<a data-fancybox data-src="#card_pop" href="javascript:;" class="mcc-card" data-name="Metrobank Peso Platinum Mastercard">
					<img src="{{ URL::asset('assets/images/PLATINUM.jpg') }}" alt="Femme">
					<h2>Metrobank Peso Platinum<br>Mastercard</h2>
					<p>Live ahead. You deserve it.</p>
					<span>The Metrobank Peso Platinum Mastercard offers access to a wide-range of world-class privileges. It offers and exclusive 24/7 VIP Customer Service hotline, Concierge Service, as well as other rewards and perks.</span>
					<!-- <a href="https://metrobankcard.com/cards/metrobank-platinum-Mastercard" class="stdButton">View Card Details</a> -->
        </a>
				
				<a data-fancybox data-src="#card_pop" href="javascript:;" class="mcc-card" data-name="Metrobank travel platinum visa">
					<img src="{{ URL::asset('assets/images/travel.jpg') }}" alt="Femme">
					<h2>Metrobank travel<br/>platinum visa</h2>
					<p>Make your firsts last.</p>
					<span>The Toyota Mastercard is the first complete motorist card in the country. It offers convenience to Toyota customers, dealership benefits, rebates with a fuel partner and other privileges.</span>
					<!-- <a href="https://metrobankcard.com/cards/metrobank-travel-platinum-visa" class="stdButton">View Card Details</a> -->
        </a>
			</div>
	
      <button class="stdButton stdButton_new" type="submit" style="display: none;">Click to Confirm</button>
      
    <div style="display: none;" class="card_pop" id="card_pop">
      <p>Thank you for choosing <br/><span class="card_pop_title"></span></p>
      <img class="card_pop_image" src="" alt="">
      {{-- <p class="card_pop_title"></p> --}}
      <div id="card_pop_confirm" class="card_pop_confirm">Apply Now</div>
    </div>

    {{-- <a class="stdButton" href="https://www.metrobankcard.com/OnlineServices/CardApplication/Apply">Apply Now</a> --}}
    
    {{-- https://www.metrobankcard.com/OnlineServices/CardApplication/Apply --}}
		<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-10.png') }}" alt="">
	</div>
</form>
@endsection