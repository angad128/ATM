@extends('app')

@section('contents')
    <div class="form-register">
        <div class="row">
          <div class="col-lg-12">
            <h1 class="page-header"> Register</h1>
          </div>
                <!-- /.col-lg-12 -->
         </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <?php $exception = Session::get('exception');?>
                                  @if($exception)
                                  <div class="alert alert-success">
                                      <p>{{$exception}}</p>
                                      <?php Session::put('exception',null);?>
                                  </div>
                                  @endif
                                <div class="col-lg-12">
                                    <form role="form" method="post" action="/newuser" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required autofocus>
                                                      <label for="cardNo">Name </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="fathers_name" id="fathers_name" class="form-control" placeholder="Your Fathers's Name" required autofocus>
                                                      <label for="fathers_name">Father's Name </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group row">
                                                      <div class="col-lg-6 col-md-6 col-sm-6"><legend class="col-form-legend col-sm-2">Gender</legend></div>
                                                        <div class="col-lg-4 col-md-4 col-sm-6">
                                                          <select name="gender" class="custom-select">
                                                            <option value="1">Male</option>
                                                            <option value="2">Female</option>
                                                            <option value="3">Other</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                   <div class="form-label-group">
                                                      <input type="date" name="dob" id="dob" class="form-control" placeholder="Date of Birth" required autofocus>
                                                      <label for="dob">DOB </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="email" name="email" id="email" class="form-control" placeholder="Email" required autofocus>
                                                      <label for="email">Email </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                   <fieldset class="form-group row">
                                                      <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6"><legend class="col-form-legend col-sm-2">Maritual Status</legend></div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                          <div class="row">
                                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                              <div class="form-check">
                                                                <label class="radio-inline">
                                                                  <input class="form-check-input" type="radio" name="marital_status" id="marital_status1" value="Yes" checked>
                                                                  Yes
                                                                </label>
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                               <div class="radio-inline">
                                                                <label class="form-check-label">
                                                                  <input class="form-check-input" type="radio" name="marital_status" id="marital_status2" value="No">
                                                                  No
                                                                </label>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                  </div>
                                                </div>   
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                   <div class="form-group row">
                                                      <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6"><legend class="col-form-legend col-sm-2">State</legend></div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                          <select name="state" class="custom-select">
                                                            <option selected>Select Provience No.</option>
                                                            <option value="1">Provience1</option>
                                                            <option value="2">Provience2</option>
                                                            <option value="3">Provience3</option>
                                                            <option value="4">Provience4</option>
                                                            <option value="5">Provience5</option>
                                                            <option value="6">Provience6</option>
                                                            <option value="7">Provience7</option>
                                                          </select>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                   <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="district" name="district" id="district" class="form-control" placeholder="District" required autofocus>
                                                      <label for="district">District </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="address" id="address" class="form-control" placeholder="Address" required autofocus>
                                                      <label for="address">Address </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="religion" id="religion" class="form-control" placeholder="Religion" required autofocus>
                                                      <label for="religion">Religion </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="category" id="category" class="form-control" placeholder="Category" required autofocus>
                                                      <label for="category">Category </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="number" name="income" id="income" class="form-control" placeholder="Income" required autofocus>
                                                      <label for="income">Income </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Education Qualification" required autofocus>
                                                      <label for="qualification">Qualification </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="text" name="occupation" id="occupation" class="form-control" placeholder="Occupation" required autofocus>
                                                      <label for="occupation">Occupation </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="number" name="pan_no" id="pan_no" class="form-control" placeholder="PAN No" required autofocus>
                                                      <label for="pan">PAN No </label>
                                                    </div>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                    <div class="form-label-group">
                                                      <input type="number" name="citizenship_no" id="citizenship_no" class="form-control" placeholder="Citizenship_no" required autofocus>
                                                      <label for="citizenship_no">Citizenship_no </label>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                   <fieldset class="form-group row">
                                                      <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6"><legend class="col-form-legend col-sm-2">Senior Citizens</legend></div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                          <div class="row">
                                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                              <div class="form-check">
                                                                <label class="radio-inline">
                                                                  <input class="form-check-input" type="radio" name="senior_citizen" id="senior_citizen" value="Yes" checked>
                                                                  Yes
                                                                </label>
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                               <div class="radio-inline">
                                                                <label class="form-check-label">
                                                                  <input class="form-check-input" type="radio" name="senior_citizen" id="senior_citizen2" value="No">
                                                                  No
                                                                </label>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                   <fieldset class="form-group row">
                                                      <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6"><legend class="col-form-legend col-sm-2">Existion Account</legend></div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                                          <div class="row">
                                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                              <div class="form-check">
                                                                <label class="radio-inline">
                                                                  <input class="form-check-input" type="radio" name="existion_account" id="existion_account1" value="Yes" checked>
                                                                  Yes
                                                                </label>
                                                              </div>
                                                            </div>
                                                            <div class="col-sm-6 col-md-6 col-lg-6">
                                                               <div class="radio-inline">
                                                                <label class="form-check-label">
                                                                  <input class="form-check-input" type="radio" name="existion_account" id="existion_account2" value="No">
                                                                  No
                                                                </label>
                                                              </div>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                  </div>
                                                </div>
                                                <div class="row">
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                   <fieldset class="form-group row">
                                                      <div class="row">
                                                        <legend class="col-form-legend col-sm-3">Account</legend>
                                                              <div class="form-check">
                                                                <label class="radio-inline">
                                                                  <input class="form-check-input" type="radio" name="account_type" id="account_type1" value="Saving" checked>
                                                                  Saving
                                                                </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <label class="radio-inline">
                                                                  <input class="form-check-input" type="radio" name="account_type" id="account_type2" value="FIxed">
                                                                  Fixed
                                                                </label>
                                                              </div>
                                                              <div class="form-check">
                                                                <label class="radio-inline">
                                                                  <input class="form-check-input" type="radio" name="account_type" id="account_type3" value="General">
                                                                  General
                                                                </label>
                                                              </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </fieldset>
                                                  </div>
                                                  <div class="col-sm-12 col-md-6 col-lg-6">
                                                     <div class="row">
                                                      <label class="col-sm-12 col-lg-3 col-md-4">Service Required</label>
                                                      <div class="col-sm-12  col-lg-3 col-md-8">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" name="service_required" value="mobilebanking" type="checkbox"> MobileBanking
                                                          </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-12  col-lg-3 col-md-3">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" name="service_required" value="atmcard"  type="checkbox"> ATMCARD
                                                          </label>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-12  col-lg-3 col-md-3">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" name="service_required" value="ebanking" type="checkbox"> EBanking
                                                          </label>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>           
                                                <div class="row">
                                                      <label class="col-sm-8"></label>
                                                      <div class="col-sm-12">
                                                        <div class="form-check">
                                                          <label class="form-check-label">
                                                            <input class="form-check-input" type="checkbox"> Accept all trems and conditions.
                                                          </label>
                                                        </div>
                                                      </div>
                                                </div>
                                                                                                    
                                        <button type="submit" class="btn btn-success mr-1" type="submit">Submit Button</button>
                                        <button type="reset" class="btn btn-default ml-1" type="reset">Reset Button</button>
                                        <a class="btn btn-lg pd-2 btn-primary ml-2" href="{{URL::to('/')}}">Back</a>                                        
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
     
    </div>
@endsection


