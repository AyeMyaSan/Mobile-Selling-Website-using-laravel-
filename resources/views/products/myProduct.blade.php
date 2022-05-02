@extends('home')
@section('content')
<div class="container">
  <div class="col-md-8">
    <h2>My Products</h2>
    @if(count($productInfo) < 1) <div class="text-center pt-4"><i class="fas fa-exclamation-triangle text-center"></i>
    </div>
    <h3 class="text-center pt-2 warning">No Posts have been found!</h3>
    <div class="text-center pt-4"><a href={{route('postAddShow')}} class="btn btn-primary">Add New Product</a></div>
    @endif
    {!! Form::submit('Last 7 Days Posts', ['class' => 'btn btn-md btn-primary']) !!}
    {!! Form::submit('Last 30 Days Posts', ['class' => 'btn btn-md btn-primary']) !!}
    {!! Form::submit('View All Posts', ['class' => 'btn btn-md btn-primary']) !!}
  </div>
  
  <div class="row">
    @foreach($productInfo as $key=>$value)
    <div class="col-md-4 my-4">
      <div class="card">
        <img src="{{asset('images/'.$value->Image)}}" class="card-img-top" alt="{{$value->Image}}">
        <div class="card-body">
          <h5 class="card-title">Model: {{$value->Model}}</h5>
          <p class="card-text"> Brand: {{$value->Brand}} </p>
          <p class="card-text"> Category: {{config('constants.category')[$value->Category]}} </p>
          <p class="card-text"> CPU: {{$value->CPU}} </p>
          <p class="card-text">  GPU: {{$value->GPU}} </p>
          <p class="card-text"> Operating System: {{$value->OS}} </p>
          <p class="card-text"> ScreenSize: {{$value->ScreenSize}} </p>
          
          <div class="card-footer">
              {!!Form::open(['route'=>['productEditShow',$value->id],'method'=>'get'])!!}  
            @csrf
            <span class="text-left">
              {{ $value->created_at->diff(Carbon::now())->days > 1 ? 'today' : $value->created_at->diffForHumans() }}
            </span>
            
            <span class="text-right">
              
              {!!Form::submit('Edit', ['class' => 'btn btn-sm btn-primary']) !!}
              {!!Form::close()!!}
              {!!Form::open(['route'=>'productDelete', 'method'=>'post', 'class' => 'd-inline'])!!}
              @csrf
              
              {!!Form::hidden('hiddenproductid', $value->id) !!}  
              {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger','onclick' => "return confirm('Are you sure to delete this post?')"]) !!}
              
            </span>
            {!!Form::close()!!}
          </span>
        </div>
      </div>
    </div>
  </div>
  @endforeach
</div> 
</div>
@endsection
