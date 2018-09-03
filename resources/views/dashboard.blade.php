@extends('app')

@section('contents')
	<div class="container-fluid mb-4 card-info">
		<div class="row">
			<div class="col-lg-4 col-md-4"><h3>Card No:</h3></div>
			<div class="col-lg-6 col-md-6">{{$data->card_no}}</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-4"><h3>Pin No:</h3></div>
			<div class="col-lg-6 col-md-6">{{$data->pin_no}}</div>
		</div>
	</div>
	<div class="bottom-collection">
		<center><h1>Plese Select Your Transcation</h1></center>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6"><a href="{{URL::to('/deposit')}}" type="button" class="btn btn-block mb-2 btn-outline-primary">Deposit</a></div>
			<div class="col-lg-6 col-md-6 col-sm-6"><a href="{{URL::to('/withdrawn')}}" type="button" class="btn btn-block mb-2 btn-outline-secondary">Cash Withdraw</a></div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6"><button type="button" class="btn btn-block mb-2 btn-outline-success">Fast Cash</button></div>
			<div class="col-lg-6 col-md-6 col-sm-6"><a  href="{{URL::to('/statement')}}" type="button" class="btn btn-block mb-2 btn-outline-danger">Statement</a></div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6"><a href="{{URL::to('/changePin')}}" type="button" class="btn btn-block mb-2 btn-outline-warning">Change PIN</a></div>
			<div class="col-lg-6 col-md-6 col-sm-6"><a href="{{URL::to('/balance')}}" type="button" class="btn btn-block mb-2 btn-outline-info">Balance Enquiry</a></div>
		</div>
		<a type="button" href="{{URL::to('/logout')}}" class="btn btn-lg btn-block mb-2 btn-outline-default">Exit</a>
	</div>
@endsection

