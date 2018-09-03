@extends('app')

@section('contents')
	<?php $exception = Session::get('exception');?>
    @if($exception)
    <div class="alert alert-success">
        <p>{{$exception}}</p>
        <?php Session::put('exception',null);?>
    </div>
    @endif
	<div class="bottom-collection">
		<div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Enter Ammount you want to deposit.</h1>
          </div>
        </div>
	</div>
	<form role="form" method="post" action="/postdeposit" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-label-group">
            <input type="number" name="deposit" id="deposit" class="form-control" placeholder="Amount" required autofocus>
            <label for="ammount">Amount </label>
        </div>
                                                 
        <button type="submit" class="btn btn-lg btn-success mr-1" type="submit">Deposit</button>
        <a class="btn btn-lg pd-2 btn-primary ml-2" href="{{URL::to('/dashboard')}}">Back</a>                                     
    </form>
@endsection