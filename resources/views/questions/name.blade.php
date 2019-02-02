@extends('layout.page')

@section('title')
	Metrobank
@endsection

{{-- name --}}
@section('head')
@endsection

@section('body')
	<div class="mcc-container">
		<div class="mcc-first">
			<h1 class="mcc-logo"><img src="./assets/images/mcclogo.png" alt=""></h1>
			<div class="huge-circ">
				<p>What should we call you?</p>
				<form action="savename" method="POST" class="ans-gen-fn">
					{{ csrf_field() }}
					<div class="ans-gen-cont">
						<div class="select-cont">
							<div class="caret"></div>
							<select required="" class="gen std-select" name="title">
								<option value="Ms.">Ms.</option>
								<option value="Mr.">Mr.</option>
							</select>
						</div>
						<input required="" class="std-input" type="text" placeholder="First name *" name="firstname">
						<input required="" class="std-input" type="text" placeholder="Last name *" name="lastname">
					</div>
					<input id="WswcyBtn" class="ntStdButton" type="submit" value="OK">
				</form>
				<img class="mcc-progress" src="{{ URL::asset('assets/images/prog-1.png') }}" alt="">
			</div>
		</div>
	</div>
@endsection