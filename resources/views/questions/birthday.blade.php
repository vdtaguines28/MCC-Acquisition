{{-- birthday --}}
@extends('layout.page')

@section('title')
	Metrobank
@endsection

@section('head')
@endsection

@section('body')
	<div class="mcc-sixth" v-cloak id="art">
		<h1 class="mcc-logo"><img src="{{ URL::asset('assets/images/mcclogo.png') }}" alt=""></h1>
		<div class="huge-circ">
			<p>When's your birthday?</p>
			<img class="party-right animated fadeInRight" src="{{ URL::asset('assets/images/party-right.png') }}" alt="">
			<img class="party-left animated fadeInLeft" src="{{ URL::asset('assets/images/party-left.png') }}" alt="">
			<form action="savebirthday" method="POST" class="ans-gen-fn">
				{{ csrf_field() }}
				<div class="ans-gen-cont">
					<div class="select-cont">
						<div class="caret"></div>
						<select required="" name="bday_month" class="gen std-select month" id="BirthdayMonth">
							<option selected="" disabled="">Month</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
					</div>
					<div class="select-cont">
						<div class="caret"></div>
						<select required="" name="bday_day" class="gen std-select day" id="BirthdayDay">
							<option selected="" disabled="">Day</option>
							<option class="remove-this"></option>
						</select>
					</div>
					<div class="select-cont">
						<div class="caret"></div>
						<select required="" name="bday_year" class="gen std-select year" id="BirthdayYear">
							<option disabled="" selected="" reversed>Year</option>
						</select>
					</div>
				</div>
				<input id="BirthdayButton" class="ntStdButton" type="submit" value="LET'S CELEBRATE!">
			</form>
		</div>
		<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-7.png') }}" alt="">
	</div>
@endsection