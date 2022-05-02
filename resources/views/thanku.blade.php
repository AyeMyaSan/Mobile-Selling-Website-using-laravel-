
<!------ Include the above in your HEAD tag ---------->
@extends('layouts.app')
@section('content')
<div class="containerttt" >
  <div class="jumbotron text-xs-center" >
    <h1 class="display-3">Thank You!</h1>
    <p class="lead" style="margin-left:30px;"><strong>We Will Contact You Within 24 Hours.</strong> </p>
    <p class="lead">
      <a class="btn btn-primary btn-sm" href="#" style="margin-left:30px;">Continue to homepage</a>
    </p>
  </div> 
</div>
<div class="voucher" style="width:500px;margin-left:30%;">
  <div class="row">
    <div class="row">    
      <div class="col-xs-4 col-sm-4 col-md-4">
      </div>
    </div>
  </div>
  
  <div>
    <table class="table table-bordered">
      <thead style="background-color:#efefef;">
        <tr>
          <th>Product </th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="col-md-9">Samsung Galaxy A30</td>
          <td class="col-md-3">350000</td>
        </tr>
        <tr>
          <td class="col-md-9">Samsung Galaxy A30</td>
          <td class="col-md-3"> 350000</td>
        </tr>
        <tr>
          <td class="col-md-9">Samsung Galaxy A30</td>
          <td class="col-md-3">350000</td>
        </tr>
        <tr>
          <td class="text-right">
            <p>
              <strong>Order Date:</strong>
            </p>
            <p>
              <strong>Quantity</strong>
            </p>
            <p>
              <strong>Discount</strong>
            </p>            
          </td>
          <td>
            <p>
              <strong> 4.6.2019</strong>
            </p>
            <p>
              <strong>5</strong>
            </p>
            <p>
              <strong>555</strong>
            </p>           
          </td>
        </tr>
        <tr>
          <td class="text-right"><h2><strong>Total: </strong></h2></td>
          <td class="text-left text-danger"><h2><strong> 31566MMK</strong></h2></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>    

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
{{-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script> --}}
{{-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->
@endsection
