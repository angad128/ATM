@extends('app')

@section('contents')
     <div class="form-signin">
                                <?php $exception = Session::get('exception');?>
                                  @if($exception)
                                  <div class="alert alert-success">
                                      <p>{{$exception}}</p>
                                      <?php Session::put('exception',null);?>
                                  </div>
                                  @endif
          <form class="mb-3" role="form" method="post" action="/login" enctype="multipart/form-data">
            @csrf
            <div class="text-center mb-4">
              <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
              <h1 class="h3 mb-3 font-weight-normal">WebTM</h1>
              <p>Access your all <code>:Bank-details & Make Transaction</code> Works for AnyOne, AnyWhere, and AnyTime.</p>
            </div>
            <div class="form-label-group">
              <input type="number" id="cardNo" class="form-control" name="card_no" placeholder="Card Number" required autofocus>
              <label for="cardNo">Card No: </label>
            </div>

            <div class="form-label-group">
              <input type="password" id="pinNo" name="pin_no" class="form-control" placeholder="PIN Number" required>
              <label for="PIN">PIN No:</label>
            </div>
                
            <div class="row btn-bottom">
              <div class="col">
                <button class="btn btn-lg btn-danger btn-block" type="reset" value="Reset">Clear</button>
              </div>
              <div class="col">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
              </div>
            </div>     
          </form>
          <a class="btn btn-lg  btn-success btn-block" href="{{URL::to('register')}}">Sign Up</a>
        </div>
@endsection



