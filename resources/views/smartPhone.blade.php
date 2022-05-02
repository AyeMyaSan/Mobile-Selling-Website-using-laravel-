@extends('layouts.app')
@section('content')
<section class="mbr-section content4 cid-qvXDlTpHu4" id="content4-l" data-rv-view="670" style="background-color: #efefef;margin-bottom:10px;">
    <div class="container">
       <div class="media-container-row">
        <h2 class="align-center mbr-fonts-style display-2">
            SmartPhone</h2>                    
          </div>
       </div>
     </section>
<div class="container justify-content-center">
  <div class="col-md-12">
    <div class="row" style="display:flex; align:center;">
      @if(count($productInfo) < 1) <div class="text-center pt-4"><i class="fas fa-exclamation-triangle text-center"></i>
      </div>
      <h3 class="text-center pt-2 warning">No Posts have been found!</h3>
      <div class="text-center pt-4"><a href={{route('showProductAdd')}} class="btn btn-primary">Add New Post</a></div>
      @endif
      @foreach($productInfo as $key=>$value)
      <div class="col-md-4 col-sm-6">
        <div class="card" style="margin-bottom:5px;">
          <span class="product-new-label"
          style="color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0">Sale</span>
          <a href="{{route('showProductDetail',$value->id)}}"><img src="{{asset('images/'.$value->Image)}}" class="card-img-top" alt="{{$value->Image}}"
            style="height:280px;" /></a>
            <div class="card-body">
              <h4 class="card-title mbr-fonts-style display-5">
                <a href="{{route('showProductDetail',$value->id)}}">
                  <p class="card-text">{{$value->Model}}&nbsp;({{$value->RAM}}/{{$value->Memory}})</p>
                </a>
              </h4>
              <p class="card-text">{{$value->Brand}}<br>{{$value->Color}}</p>
              <p class="card-text" style="color:#F5762A"> {{$value->Price}} </p>
              {!!Form::open(['route'=>['showProductDetail',$value->id],'method'=>'get'])!!}
              {!! Form::submit('View Detail', ['class' => 'btn btn-lg btn-primary']) !!}
              {!!Form::close()!!}
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
@endsection