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
		<div class="row">
      <div class="col-lg-12">
        <h1 class="page-header"> Your total balance is </h1>
        <h3 class="page-content">{{$data->balance}}</h3>
      </div>
    </div>
    <a class="btn btn-lg btn-primary" href="{{URL::to('/dashboard')}}">Back</a>
	</div>
@endsection