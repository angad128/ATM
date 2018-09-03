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
<div class="form-signin">
        <?php $exception = Session::get('exception');?>
        @if($exception)
          <div class="alert alert-success">
            <p>{{$exception}}</p>
            <?php Session::put('exception',null);?>
          </div>
        @endif
          <form class="mb-3" role="form" method="post" action="/postChangePin">
            @csrf
            <div class="text-center mb-4">
              <h1 class="h3 mb-3 font-weight-normal">Change your PIN Number</h1>
              <p>Insert four(4) digits Pin number just like:<code> XXXX</code></p>
            </div>

            <div class="form-label-group">
              <input type="number" id="pinNo" name="pin_no" class="form-control" placeholder=" {{$data->pin_no}}" value="{{$data->pin_no}}" required>
            </div>
                
            <div class="row btn-bottom">
              <div class="col">
                <button class="btn btn-lg btn-danger btn-block" type="reset" value="Reset">Clear</button>
              </div>
              <div class="col">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Change</button>
              </div>
            </div>     
          </form>
          <a class="btn btn-lg  btn-success btn-block" href="{{URL::to('/dashboard')}}">Back</a>
        </div>
@endsection