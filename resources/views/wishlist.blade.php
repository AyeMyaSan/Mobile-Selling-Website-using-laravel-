@extends('layouts.app')
@section('content')
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div>
@endif
<div class="container">
  {!!Form::open(['route'=>'showwishlist', 'method'=>'post', 'enctype' => 'multipart/form-data'])!!}
  <table id="cart" class="table table-hover table-condensed table-responsive product">
    <thead>
      <tr>
        <th style="width:40%">Product</th>
        <th style="width:10%">Color</th>
        <th style="width:10%">Price</th>     
        <th style="width:10%"></th>
      </tr>
    </thead>
    <tbody>
      
      <?php 
      $total = 0;
      $total_cost = 0;
      ?>
      
      @if(session('pwishlist'))
      @foreach(session('pwishlist') as $key => $details)
      
      
      @csrf
      
      <?php
      $price = (int)$details['price'];
      ?>
      
      
      
      <tr class="product">
        <td data-th="Product">
          <div class="row">
            <div class="col-sm-3 hidden-xs"><img src="{{asset('images/'.$details['image'])}}" width="100" height="100"
              class="img-responsive" /></div>
              <div class="col-sm-9">
                <h4 class="nomargin">{{ $details['model'] }}</h4>
              </div>
            </div>
          </td>
          <td data-th="Color">{{$details['color']}}</td>
          <td data-th="Price" class="product-price">{{$price}}MMK</td>
    
       
          <td class="actions" data-th="">
            <button class="btn btn-danger btn-sm remove-from-cart" name="btn_edit_post" value="{{$key}}" ><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
        {!! Form::hidden("product[{$key}][id]",$details['id'],['class' => 'form-control quantity','min'=>'1'])!!}
        {!! Form::hidden("product[{$key}][color]",$details['color'],['class' => 'form-control quantity'])!!}
      </tbody>
      @endforeach
      <tfoot>
        <tr>
          <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
          <td colspan="3" class="hidden-xs"></td>
          <td class="hidden-xs text-center"><strong>Total ${{ $total_cost }}</strong></td>
        </tr>
      </tfoot>
      @endif
    </table>
    
    <div style="margin-left:40%;">
      {!! Form::submit('Update', ['class' => 'btn btn-lg btn-primary', 'name' => "btn_edit_post" ]) !!}
    </div>
    {!!Form::close()!!}
  </div>
  <script src="{{asset('js/Qty.js')}}"></script>
  @endsection
