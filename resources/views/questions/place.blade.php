@extends('layout.page')

@section('title')
	Metrobank
@endsection

{{-- place --}}
@section('head')
@endsection

@section('body')
<div class="mcc-container">
	<div class="mcc-third">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<div class="huge-circ">
			<div class="thirdcont">
				<p>If you could teleport to any place in<br/> the world right now, where would you go?</p>
				<form action="saveplace" method="POST" class="cards" id="TeleportRadio">
					{{ csrf_field() }}
					<div class="card">
						<label class="teleportcheck" for="ItalyCheck">
							<input type="radio" id="ItalyCheck" name="TelCheck" value="america"/>
							<img id="Italy" src="{{ URL::asset('assets/images/teleport1.jpg') }}" alt="">
						</label>
					</div>
					<div class="card">
						<label class="teleportcheck" for="JapanCheck">
							<input type="radio" id="JapanCheck" name="TelCheck" value="italy"/>
							<img id="Japan" src="{{ URL::asset('assets/images/teleport2.jpg') }}"  alt="">
						</label>
					</div>
					<div class="card">
						<label class="teleportcheck" for="KoreaCheck">
							<input type="radio" id="KoreaCheck" name="TelCheck" value="germany"/>
							<img id="Korea" src="{{ URL::asset('assets/images/teleport3.jpg') }}"  alt="">
						</label>
					</div>
					<div class="card">
						<label class="teleportcheck" for="ChinaCheck">
							<input type="radio" id="ChinaCheck" name="TelCheck" value="japan"/>
							<img id="China" src="{{ URL::asset('assets/images/teleport4.jpg') }}" alt="">
						</label>
					</div>
					<input id="TelButton" class="d-none" type="submit">
				</form>
			</div>
			<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-3.png') }}" alt="">
		</div>
	</div>
</div>
@endsection