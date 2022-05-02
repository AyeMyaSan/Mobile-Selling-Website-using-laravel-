@extends('layouts.app')
@section('content')


@if(session('success'))

<div class="alert alert-success">
  {{ session('success') }}
</div>

@endif

<section aria-label="Main content" role="main" class="product-detail">
  <div class="shadow">
    <div class="_cont detail-top">
      
      {!!Form::open(['route'=>'addToCart','method'=>'post'])!!}
      @csrf
      {!!Form::hidden('id',$productInfo->id)!!}
      
      
      <div class="cols">
        <div class="left-col">
          <div class="big">
            <div id="big-image">
              <div id="img">
                <img src="{{asset('images/'.$productInfo->Image)}}" alt="product image"
                style="width:100%; height:484px;">
              </div>
            </div>
            
            <div class="detail-socials">
              <div class="social-sharing"
              data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
              <a target="_blank" class="share-facebook" title="Share"></a>
              <a target="_blank" class="share-twitter" title="Tweet"></a>
              <a target="_blank" class="share-pinterest" title="Pin it"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="right-col">
        <h1 itemprop="name">{{$productInfo->Model}}</h1>
        <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
          <meta itemprop="priceCurrency" content="USD">
          <link itemprop="availability" href="https://schema.org/InStock">
          <div class="price-shipping">
            <div class="price" id="price-preview" quickbeam="price" quickbeam-price="800">
              {{$productInfo->Price}}
            </div>
            <a>Free shipping</a>
          </div>
          <?php
          
          $color = $productInfo->Color;
          
          $colors = explode(', ',$color);
          
          ?>
          
          <?php
          $arr_length = count($colors); 
          ?>
          
          @for($i=0;$i<$arr_length;$i++) 
          <?php
          $cc=$colors[$i];
          ?>
          @if($cc=='black')  
          <div class="custom-radios">
            <div class="swatch">             
              <input type="radio" id="color-1" name="clr" value="{{$colors[$i]}}"  checked/>
              
              <label for="color-1">
                <span >
                </span>
              </label>
              
            </div>
          </div>
          @endif
          
          @if($cc=='white')  
          <div class="custom-radios">
            <div class="swatch">             
              <input type="radio" id="color-2" name="clr" value="{{$colors[$i]}}"  checked/>
              
              <label for="color-2">
                <span >
                </span>
              </label>
              
            </div>
          </div>
          @endif
          @if($cc=='blue')
          <div class="custom-radios">
            <div class="swatch">            
              <input type="radio" id="color-3" name="clr" value="{{$colors[$i]}}"  checked/>
              
              <label for="color-3">
                <span >
                </span>
              </label>
              
            </div>
          </div>
          @endif
          @if($cc=='red')
          <div class="custom-radios">
            <div class="swatch">               
              <input type="radio" id="color-4" name="clr" value="{{$colors[$i]}}"  checked/>
              
              <label for="color-4">
                <span >
                </span>
              </label>
              
            </div>
          </div>
          @endif
          
          @if($cc=='silver')
          <div class="custom-radios">
            <div class="swatch">              
              <input type="radio" id="color-5" name="clr" value="{{$colors[$i]}}"  checked/>
              
              <label for="color-5">
                <span >
                </span>
              </label>
              
            </div>
          </div>
          @endif
          @endfor
          
          <form id="AddToCartForm">
            <div class="btn-and-quantity-wrap">
              <div class="btn-and-quantity">
                
                
                
                {!! Form::submit('Add To Cart', ['class' => 'btn btn-lg btn-primary','id' => "update", 'name' => "btn_edit_post" ,'style' =>
                'padding: 14px 26px 14px 53px; width: 200px;  -moz-border-radius: 25px;margin-top:10px;
                -webkit-border-radius: 25px;border-radius: 25px; background: #00AB0E url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE5cHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDE5IDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02ODYuMDAwMDAwLCAtNDUwLjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NjAuMDAwMDAwLCAxNjUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgMjY5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjAwMDAwMCwgMTYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNi43NjU0Nzg0LDQuMjc1IEwxNS44NzU4NzQ5LDguNTkzMzYwNzEgTDQuNjk5ODQwNTksOS43MjQwOTgyMSBMMy40NzM5MDMwNCw0LjI3NSBMMTYuNzY1NDc4NCw0LjI3NSBaIE0xNi44MDQ1NDYzLDkuNzI4MDY3ODYgTDE4LjY3MzcyNTEsMy4wNTM1NzE0MyBMMy4xOTkxNTIwNywzLjA1MzU3MTQzIEwyLjUxMjI3NDYzLDAgTDMuMjYzMDc1NzJlLTA1LDAgTDMuMjYzMDc1NzJlLTA1LDEuMjIxNDI4NTcgTDEuNDUzMDgwMjUsMS4yMjE0Mjg1NyBMNC4wNjM1NDA4MywxMi44MjUgTDE2Ljk2ODAyNjQsMTIuODI1IEwxNi45NjgwMjY0LDExLjYwMzU3MTQgTDUuMTIyNzM1MjEsMTEuNjAzNTcxNCBMNC45NzAwMjMyNiwxMC45MjUzNzMyIEwxNi44MDQ1NDYzLDkuNzI4MDY3ODYgWiI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy44MzEzODE3MywxNS4yNjc4NTcxIEM3LjgzMTM4MTczLDE2LjI3OTgxMDcgNi45NTQ5MTk1OSwxNy4xIDUuODczNTM2MywxNy4xIEM0Ljc5MjE1MzAxLDE3LjEgMy45MTU2OTA4NywxNi4yNzk4MTA3IDMuOTE1NjkwODcsMTUuMjY3ODU3MSBDMy45MTU2OTA4NywxNC4yNTU5MDM2IDQuNzkyMTUzMDEsMTMuNDM1NzE0MyA1Ljg3MzUzNjMsMTMuNDM1NzE0MyBDNi45NTQ5MTk1OSwxMy40MzU3MTQzIDcuODMxMzgxNzMsMTQuMjU1OTAzNiA3LjgzMTM4MTczLDE1LjI2Nzg1NzEiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1LjY2Mjc2MzUsMTUuMjY3ODU3MSBDMTUuNjYyNzYzNSwxNi4yNzk4MTA3IDE0Ljc4NjMwMTMsMTcuMSAxMy43MDQ5MTgsMTcuMSBDMTIuNjIzNTM0NywxNy4xIDExLjc0NzA3MjYsMTYuMjc5ODEwNyAxMS43NDcwNzI2LDE1LjI2Nzg1NzEgQzExLjc0NzA3MjYsMTQuMjU1OTAzNiAxMi42MjM1MzQ3LDEzLjQzNTcxNDMgMTMuNzA0OTE4LDEzLjQzNTcxNDMgQzE0Ljc4NjMwMTMsMTMuNDM1NzE0MyAxNS42NjI3NjM1LDE0LjI1NTkwMzYgMTUuNjYyNzYzNSwxNS4yNjc4NTcxIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat 26px center; ']) !!}
                {!!Form::close()!!}
                
              </div>

       
            </div>
            
          </div>
        </form>

        {!!Form::open(['route'=>'addwishlist','method'=>'post'])!!}
        @csrf
        {!!Form::hidden('id',$productInfo->id)!!}
        <form id="AddToCartForm">
          <div class="btn-and-quantity-wrap">
            <div class="btn-and-quantity">
              
              
              
              {!! Form::submit('Add To WishList', ['class' => 'btn btn-lg btn-primary','id' => "update", 'name' => "btn_wishlist" ,'style' =>
          'padding: 14px 26px 14px 53px; width: 200px;  -moz-border-radius: 25px;margin-top:10px;
          -webkit-border-radius: 25px;border-radius: 25px; background: #00AB0E url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjE5cHgiIGhlaWdodD0iMThweCIgdmlld0JveD0iMCAwIDE5IDE4IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDxnIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPgogICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKC02ODYuMDAwMDAwLCAtNDUwLjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPgogICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSg2NjAuMDAwMDAwLCAxNjUuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICA8ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgwLjAwMDAwMCwgMjY5LjAwMDAwMCkiPgogICAgICAgICAgICAgICAgICAgIDxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDI2LjAwMDAwMCwgMTYuMDAwMDAwKSI+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNi43NjU0Nzg0LDQuMjc1IEwxNS44NzU4NzQ5LDguNTkzMzYwNzEgTDQuNjk5ODQwNTksOS43MjQwOTgyMSBMMy40NzM5MDMwNCw0LjI3NSBMMTYuNzY1NDc4NCw0LjI3NSBaIE0xNi44MDQ1NDYzLDkuNzI4MDY3ODYgTDE4LjY3MzcyNTEsMy4wNTM1NzE0MyBMMy4xOTkxNTIwNywzLjA1MzU3MTQzIEwyLjUxMjI3NDYzLDAgTDMuMjYzMDc1NzJlLTA1LDAgTDMuMjYzMDc1NzJlLTA1LDEuMjIxNDI4NTcgTDEuNDUzMDgwMjUsMS4yMjE0Mjg1NyBMNC4wNjM1NDA4MywxMi44MjUgTDE2Ljk2ODAyNjQsMTIuODI1IEwxNi45NjgwMjY0LDExLjYwMzU3MTQgTDUuMTIyNzM1MjEsMTEuNjAzNTcxNCBMNC45NzAwMjMyNiwxMC45MjUzNzMyIEwxNi44MDQ1NDYzLDkuNzI4MDY3ODYgWiI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNy44MzEzODE3MywxNS4yNjc4NTcxIEM3LjgzMTM4MTczLDE2LjI3OTgxMDcgNi45NTQ5MTk1OSwxNy4xIDUuODczNTM2MywxNy4xIEM0Ljc5MjE1MzAxLDE3LjEgMy45MTU2OTA4NywxNi4yNzk4MTA3IDMuOTE1NjkwODcsMTUuMjY3ODU3MSBDMy45MTU2OTA4NywxNC4yNTU5MDM2IDQuNzkyMTUzMDEsMTMuNDM1NzE0MyA1Ljg3MzUzNjMsMTMuNDM1NzE0MyBDNi45NTQ5MTk1OSwxMy40MzU3MTQzIDcuODMxMzgxNzMsMTQuMjU1OTAzNiA3LjgzMTM4MTczLDE1LjI2Nzg1NzEiPjwvcGF0aD4KICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTE1LjY2Mjc2MzUsMTUuMjY3ODU3MSBDMTUuNjYyNzYzNSwxNi4yNzk4MTA3IDE0Ljc4NjMwMTMsMTcuMSAxMy43MDQ5MTgsMTcuMSBDMTIuNjIzNTM0NywxNy4xIDExLjc0NzA3MjYsMTYuMjc5ODEwNyAxMS43NDcwNzI2LDE1LjI2Nzg1NzEgQzExLjc0NzA3MjYsMTQuMjU1OTAzNiAxMi42MjM1MzQ3LDEzLjQzNTcxNDMgMTMuNzA0OTE4LDEzLjQzNTcxNDMgQzE0Ljc4NjMwMTMsMTMuNDM1NzE0MyAxNS42NjI3NjM1LDE0LjI1NTkwMzYgMTUuNjYyNzYzNSwxNS4yNjc4NTcxIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=") no-repeat 26px center; ']) !!}
          {!!Form::close()!!}
            </div>

     
          </div>
          
        </div>
      </form>

        <div class="tabs">
          <div class="left-col">
            <p> Brand: {{$productInfo->Brand}}</p>
            <p> Resolution:{{$productInfo->Resolution}}</p>
            <p> Screen Size: {{$productInfo->ScreenSize}}</p>
            <p> CPU:{{$productInfo->CPU}}</p>
            <p> GPU: {{$productInfo->GPU}}</p>
            <p> OS:{{$productInfo->OS}}</p>
            
          </div>
          <div class="left-col">
            <p>RAM:{{$productInfo->RAM}}</p>
            <p> Memory: {{$productInfo->Memory}}</p>
            <p> Camera: {{$productInfo->Camera}}</p>
            <p> Battery: {{$productInfo->Battery}}</p>
            <p> Other:{{$productInfo->Other_Features}}</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</section>
@endsection
