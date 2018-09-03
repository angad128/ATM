@extends('app')

@section('contents')
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-12">
    <h4>Date: {{date('d/m/Y',strtotime(now()))}}</h4>
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12">
    <h3> Statements of card no: {{Session::get('card_no')}}</h3>
  </div>
</div>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
       <div class="widget-box">
          @if(count($data)>0)
          <div class="widget-content">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                  <table class="table table-bordered data-table dataTable" id="DataTables_Table_0">
                    <thead>
                      <tr role="row">
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"><div class="DataTables_sort_wrapper">S.N.<span class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span></div></th>
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"><div class="DataTables_sort_wrapper">
                        Date<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"><div class="DataTables_sort_wrapper">
                        Deposti<span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"><div class="DataTables_sort_wrapper">
                        Wtihdrawn <span class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div></th>

                     
                      </tr>
                    </thead>         
                  <tbody role="alert" aria-live="polite" aria-relevant="all">
                  <?php $i=1; foreach($data as $key){ ?>

                    <tr <?php if($i%2==0){ ?> class="gradeA odd" <?php }else{ ?> class="gradeA even" <?php } ?>>
                        <td class="  sorting_1"><?php echo $i ?></td>
                         <td>{{date('d/m/Y',strtotime($key->created_at))}}</td>
                          @if($key->deposit)
                          <td>{{$key->deposit}}</td>
                          @else
                          <td>----</td>
                          @endif
                          @if($key->withdrawn)
                          <td>{{$key->withdrawn}}</td>
                          @else
                          <td>----</td>
                          @endif
                      </tr>
                      </tbody>
                 <?php $i++;} ?>
                  </table>
                  
                  </div>
          </div>
          @else
            <h3>No Transcation done yet, please deposite some cash first!!</h3>
          @endif
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-lg-3 col-md-3 col-sm-4">
    <h1 class="page-header">Total Balance:</h1>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-8">
    <h3 class="page-content">{{$result->balance}}</h3>
  </div>
  <div class="col-lg-4 col-md-4 col-sm-12">
    <a class="btn btn-lg pd-2 btn-primary ml-2" href="{{URL::to('/dashboard')}}">Back</a> 
  </div>
</div>
@endsection